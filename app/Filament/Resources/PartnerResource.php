<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartnerResource\Pages;
use App\Models\Partner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PartnerResource extends Resource
{
    protected static ?string $model = Partner::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    protected static ?string $navigationGroup = 'Marketing';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'Partners & Sponsors';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Partner Information')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\FileUpload::make('logo')
                            ->image()
                            ->required()
                            ->directory('partners/logos')
                            ->imageEditor()
                            ->helperText('Upload partner/sponsor logo'),

                        Forms\Components\TextInput::make('website')
                            ->url()
                            ->placeholder('https://partner-website.com')
                            ->helperText('Partner website URL (optional)'),

                        Forms\Components\Select::make('tier')
                            ->options([
                                'main_partner' => 'Main Partner',
                                'official_sponsor' => 'Official Sponsor',
                                'community_partner' => 'Community Partner',
                            ])
                            ->required()
                            ->default('community_partner')
                            ->helperText('Main Partners display prominently'),

                        Forms\Components\Textarea::make('description')
                            ->rows(3)
                            ->columnSpanFull()
                            ->helperText('Brief description of the partnership'),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Partnership Duration')
                    ->schema([
                        Forms\Components\DatePicker::make('partnership_start')
                            ->label('Start Date'),

                        Forms\Components\DatePicker::make('partnership_end')
                            ->label('End Date')
                            ->after('partnership_start')
                            ->helperText('Leave empty for ongoing partnerships'),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Display Settings')
                    ->schema([
                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true)
                            ->helperText('Only active partners are displayed'),

                        Forms\Components\Toggle::make('show_on_homepage')
                            ->label('Show on Homepage')
                            ->default(true),

                        Forms\Components\Toggle::make('show_in_footer')
                            ->label('Show in Footer')
                            ->default(false),

                        Forms\Components\TextInput::make('display_order')
                            ->numeric()
                            ->default(0)
                            ->minValue(0)
                            ->helperText('Lower numbers appear first (0 = highest priority)'),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo')
                    ->circular(),

                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('tier')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'main_partner' => 'danger',
                        'official_sponsor' => 'warning',
                        'community_partner' => 'info',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'main_partner' => 'Main Partner',
                        'official_sponsor' => 'Official Sponsor',
                        'community_partner' => 'Community Partner',
                    }),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),

                Tables\Columns\IconColumn::make('show_on_homepage')
                    ->boolean()
                    ->label('Homepage'),

                Tables\Columns\IconColumn::make('show_in_footer')
                    ->boolean()
                    ->label('Footer'),

                Tables\Columns\TextColumn::make('display_order')
                    ->sortable()
                    ->label('Order'),

                Tables\Columns\TextColumn::make('partnership_start')
                    ->date()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('partnership_end')
                    ->date()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('tier')
                    ->options([
                        'main_partner' => 'Main Partner',
                        'official_sponsor' => 'Official Sponsor',
                        'community_partner' => 'Community Partner',
                    ]),

                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Status'),
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
            ->defaultSort('display_order', 'asc')
            ->reorderable('display_order');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePartners::route('/'),
        ];
    }
}
