<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MatchResource\Pages;
use App\Models\FootballMatch;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class MatchResource extends Resource
{
    protected static ?string $model = FootballMatch::class;

    protected static ?string $navigationIcon = 'heroicon-o-trophy';

    protected static ?string $navigationGroup = 'Football';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Match Details')
                    ->schema([
                        Forms\Components\TextInput::make('opponent')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('e.g., Simba SC'),

                        Forms\Components\DateTimePicker::make('match_date')
                            ->required()
                            ->native(false)
                            ->seconds(false),

                        Forms\Components\TextInput::make('venue')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('e.g., Benjamin Mkapa Stadium'),

                        Forms\Components\TextInput::make('competition')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('e.g., League One, FA Cup')
                            ->datalist([
                                'League One',
                                'Championship',
                                'Premier League',
                                'FA Cup',
                                'Regional League',
                            ]),

                        Forms\Components\Select::make('match_type')
                            ->options([
                                'home' => 'Home',
                                'away' => 'Away',
                                'neutral' => 'Neutral',
                            ])
                            ->required()
                            ->default('home'),

                        Forms\Components\Select::make('status')
                            ->options([
                                'scheduled' => 'Scheduled',
                                'live' => 'Live',
                                'completed' => 'Completed',
                                'postponed' => 'Postponed',
                                'cancelled' => 'Cancelled',
                            ])
                            ->required()
                            ->default('scheduled'),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Match Result')
                    ->schema([
                        Forms\Components\TextInput::make('npsc_score')
                            ->label('NPSC Score')
                            ->numeric()
                            ->minValue(0)
                            ->placeholder('0'),

                        Forms\Components\TextInput::make('opponent_score')
                            ->label('Opponent Score')
                            ->numeric()
                            ->minValue(0)
                            ->placeholder('0'),

                        Forms\Components\Placeholder::make('result_display')
                            ->label('Result')
                            ->content(fn ($record) => $record?->score_display ?? 'Enter scores to see result'),

                        Forms\Components\TextInput::make('attendance')
                            ->numeric()
                            ->minValue(0)
                            ->placeholder('Number of spectators'),

                        Forms\Components\TextInput::make('referee')
                            ->maxLength(255),
                    ])
                    ->columns(2)
                    ->visible(fn ($get) => in_array($get('status'), ['completed', 'live'])),

                Forms\Components\Section::make('Match Report')
                    ->schema([
                        Forms\Components\RichEditor::make('match_report')
                            ->columnSpanFull()
                            ->fileAttachmentsDisk('public')
                            ->fileAttachmentsDirectory('uploads'),

                        Forms\Components\FileUpload::make('match_report_image')
                            ->image()
                            ->directory('matches/images')
                            ->imageEditor(),

                        Forms\Components\TextInput::make('video_highlight_url')
                            ->url()
                            ->placeholder('https://youtube.com/watch?v=...')
                            ->helperText('YouTube, Vimeo, or other video platform URL'),
                    ])
                    ->columns(2)
                    ->collapsible()
                    ->visible(fn ($get) => $get('status') === 'completed'),

                Forms\Components\Section::make('Statistics & Details')
                    ->schema([
                        Forms\Components\KeyValue::make('statistics')
                            ->label('Match Statistics')
                            ->keyLabel('Stat Name')
                            ->valueLabel('Value')
                            ->addButtonLabel('Add Statistic')
                            ->helperText('e.g., Possession: 60%, Shots: 15, etc.'),

                        Forms\Components\Repeater::make('scorers')
                            ->label('Goal Scorers')
                            ->schema([
                                Forms\Components\TextInput::make('player')
                                    ->required()
                                    ->placeholder('Player name'),
                                Forms\Components\TextInput::make('minute')
                                    ->numeric()
                                    ->required()
                                    ->placeholder("45'"),
                            ])
                            ->columns(2)
                            ->columnSpanFull(),

                        Forms\Components\Textarea::make('lineup')
                            ->rows(5)
                            ->placeholder('Starting XI and formation')
                            ->columnSpanFull(),
                    ])
                    ->columns(1)
                    ->collapsible()
                    ->visible(fn ($get) => $get('status') === 'completed'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('match_date')
                    ->label('Date')
                    ->dateTime('M d, Y H:i')
                    ->sortable(),

                Tables\Columns\TextColumn::make('opponent')
                    ->searchable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('score_display')
                    ->label('Score')
                    ->badge()
                    ->color(fn ($record) => match($record->result) {
                        'win' => 'success',
                        'draw' => 'warning',
                        'loss' => 'danger',
                        default => 'gray',
                    })
                    ->default('- : -'),

                Tables\Columns\TextColumn::make('venue')
                    ->searchable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('competition')
                    ->badge()
                    ->searchable(),

                Tables\Columns\TextColumn::make('match_type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'home' => 'success',
                        'away' => 'warning',
                        'neutral' => 'gray',
                    }),

                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'scheduled' => 'gray',
                        'live' => 'danger',
                        'completed' => 'success',
                        'postponed' => 'warning',
                        'cancelled' => 'danger',
                    }),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'scheduled' => 'Scheduled',
                        'completed' => 'Completed',
                        'postponed' => 'Postponed',
                        'cancelled' => 'Cancelled',
                    ]),

                Tables\Filters\SelectFilter::make('competition'),

                Tables\Filters\SelectFilter::make('match_type')
                    ->options([
                        'home' => 'Home',
                        'away' => 'Away',
                        'neutral' => 'Neutral',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('match_date', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMatches::route('/'),
            'create' => Pages\CreateMatch::route('/create'),
            'edit' => Pages\EditMatch::route('/{record}/edit'),
        ];
    }
}
