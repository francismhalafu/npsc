<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsletterSubscriberResource\Pages;
use App\Models\NewsletterSubscriber;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class NewsletterSubscriberResource extends Resource
{
    protected static ?string $model = NewsletterSubscriber::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationGroup = 'Marketing';

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationLabel = 'Newsletter';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('name')
                    ->maxLength(255),

                Forms\Components\Toggle::make('is_active')
                    ->required()
                    ->default(true),

                Forms\Components\DateTimePicker::make('verified_at')
                    ->label('Verified At')
                    ->disabled(),

                Forms\Components\DateTimePicker::make('subscribed_at')
                    ->default(now())
                    ->disabled(),

                Forms\Components\DateTimePicker::make('unsubscribed_at')
                    ->disabled(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable()
                    ->copyable(),

                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->toggleable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),

                Tables\Columns\IconColumn::make('verified_at')
                    ->label('Verified')
                    ->boolean()
                    ->getStateUsing(fn ($record) => $record->isVerified()),

                Tables\Columns\TextColumn::make('subscribed_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('unsubscribed_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Status'),

                Tables\Filters\Filter::make('verified')
                    ->query(fn (Builder $query): Builder => $query->whereNotNull('verified_at'))
                    ->toggle(),

                Tables\Filters\Filter::make('unverified')
                    ->query(fn (Builder $query): Builder => $query->whereNull('verified_at'))
                    ->toggle(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

                Tables\Actions\Action::make('verify')
                    ->icon('heroicon-o-check-badge')
                    ->color('success')
                    ->visible(fn (NewsletterSubscriber $record) => !$record->isVerified())
                    ->action(fn (NewsletterSubscriber $record) => $record->verify())
                    ->successNotificationTitle('Subscriber verified'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('subscribed_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageNewsletterSubscribers::route('/'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('is_active', true)->count() ?: null;
    }
}
