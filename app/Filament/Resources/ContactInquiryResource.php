<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactInquiryResource\Pages;
use App\Models\ContactInquiry;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Notifications\Notification;

class ContactInquiryResource extends Resource
{
    protected static ?string $model = ContactInquiry::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox';

    protected static ?string $navigationGroup = 'Marketing';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationLabel = 'Contact Inquiries';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Inquiry Details')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->disabled(),

                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->required()
                            ->disabled(),

                        Forms\Components\TextInput::make('phone')
                            ->disabled(),

                        Forms\Components\Select::make('type')
                            ->options([
                                'general' => 'General',
                                'sponsorship' => 'Sponsorship',
                                'academy' => 'Academy',
                                'media' => 'Media',
                                'volunteer' => 'Volunteer',
                                'partnership' => 'Partnership',
                            ])
                            ->disabled(),

                        Forms\Components\TextInput::make('subject')
                            ->required()
                            ->disabled()
                            ->columnSpanFull(),

                        Forms\Components\Textarea::make('message')
                            ->required()
                            ->rows(5)
                            ->disabled()
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Admin Response')
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->options([
                                'new' => 'New',
                                'read' => 'Read',
                                'replied' => 'Replied',
                                'archived' => 'Archived',
                            ])
                            ->required(),

                        Forms\Components\Textarea::make('admin_notes')
                            ->rows(5)
                            ->columnSpanFull()
                            ->helperText('Internal notes about this inquiry'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->copyable(),

                Tables\Columns\TextColumn::make('phone')
                    ->searchable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'sponsorship', 'partnership' => 'success',
                        'academy' => 'info',
                        'media' => 'warning',
                        default => 'gray',
                    }),

                Tables\Columns\TextColumn::make('subject')
                    ->limit(50)
                    ->searchable(),

                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'new' => 'danger',
                        'read' => 'warning',
                        'replied' => 'success',
                        'archived' => 'gray',
                    }),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'general' => 'General',
                        'sponsorship' => 'Sponsorship',
                        'academy' => 'Academy',
                        'media' => 'Media',
                        'volunteer' => 'Volunteer',
                        'partnership' => 'Partnership',
                    ]),

                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'new' => 'New',
                        'read' => 'Read',
                        'replied' => 'Replied',
                        'archived' => 'Archived',
                    ]),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),

                Tables\Actions\Action::make('mark_read')
                    ->icon('heroicon-o-eye')
                    ->color('info')
                    ->visible(fn (ContactInquiry $record) => $record->status === 'new')
                    ->action(fn (ContactInquiry $record) => $record->markAsRead())
                    ->successNotificationTitle('Marked as read'),

                Tables\Actions\Action::make('mark_replied')
                    ->icon('heroicon-o-check')
                    ->color('success')
                    ->visible(fn (ContactInquiry $record) => in_array($record->status, ['new', 'read']))
                    ->action(fn (ContactInquiry $record) => $record->markAsReplied())
                    ->successNotificationTitle('Marked as replied'),

                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageContactInquiries::route('/'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('status', 'new')->count() ?: null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'danger';
    }
}
