<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'Content';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Post Content')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) =>
                                $operation === 'create' ? $set('slug', Str::slug($state)) : null
                            ),

                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(Post::class, 'slug', ignoreRecord: true)
                            ->helperText('Auto-generated from title, or enter custom slug'),

                        Forms\Components\Select::make('category_id')
                            ->relationship('category', 'name')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\Select::make('type')
                                    ->options([
                                        'news' => 'News',
                                        'programs' => 'Programs',
                                        'reports' => 'Reports',
                                    ])
                                    ->required(),
                            ]),

                        Forms\Components\Textarea::make('excerpt')
                            ->rows(3)
                            ->maxLength(500)
                            ->helperText('Brief summary (auto-generated if left empty)'),

                        Forms\Components\RichEditor::make('content')
                            ->required()
                            ->columnSpanFull()
                            ->fileAttachmentsDisk('public')
                            ->fileAttachmentsDirectory('uploads'),

                        Forms\Components\FileUpload::make('featured_image')
                            ->image()
                            ->directory('posts/featured-images')
                            ->imageEditor()
                            ->columnSpanFull(),

                        Forms\Components\TextInput::make('featured_image_alt')
                            ->maxLength(255)
                            ->helperText('Alt text for accessibility and SEO'),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Publication Settings')
                    ->schema([
                        Forms\Components\Select::make('slot_position')
                            ->options([
                                'hero' => 'Hero (Main Featured)',
                                'featured_1' => 'Featured Story 1',
                                'featured_2' => 'Featured Story 2',
                                'featured_3' => 'Featured Story 3',
                                'archive' => 'Archive (Not Featured)',
                            ])
                            ->default('archive')
                            ->required()
                            ->helperText('WARNING: Assigning to a slot will archive the current post in that slot'),

                        Forms\Components\Select::make('status')
                            ->options([
                                'draft' => 'Draft',
                                'pending_approval' => 'Pending Approval',
                                'approved' => 'Approved',
                                'published' => 'Published',
                                'archived' => 'Archived',
                            ])
                            ->default('draft')
                            ->required()
                            ->disabled(fn ($record) => $record && !auth()->user()->can('approve_posts')),

                        Forms\Components\DateTimePicker::make('published_at')
                            ->label('Publish Date & Time')
                            ->helperText('Leave empty to publish immediately when approved'),

                        Forms\Components\Toggle::make('is_featured')
                            ->label('Mark as Featured')
                            ->helperText('Featured posts appear in special sections'),

                        Forms\Components\Toggle::make('allow_comments')
                            ->label('Allow Comments')
                            ->default(true),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('SEO Settings')
                    ->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->maxLength(60)
                            ->helperText('Leave empty to use post title'),

                        Forms\Components\Textarea::make('meta_description')
                            ->rows(3)
                            ->maxLength(160)
                            ->helperText('Leave empty to use excerpt'),

                        Forms\Components\TextInput::make('meta_keywords')
                            ->maxLength(255)
                            ->helperText('Comma-separated keywords'),
                    ])
                    ->columns(2)
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('featured_image')
                    ->circular()
                    ->defaultImageUrl(url('/images/placeholder.jpg')),

                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(50),

                Tables\Columns\TextColumn::make('category.name')
                    ->badge()
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('slot_position')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'hero' => 'danger',
                        'featured_1', 'featured_2', 'featured_3' => 'warning',
                        default => 'gray',
                    }),

                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'draft' => 'gray',
                        'pending_approval' => 'warning',
                        'approved' => 'info',
                        'published' => 'success',
                        'archived' => 'danger',
                    }),

                Tables\Columns\TextColumn::make('creator.name')
                    ->label('Created By')
                    ->sortable(),

                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),

                Tables\Columns\TextColumn::make('views_count')
                    ->label('Views')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'pending_approval' => 'Pending Approval',
                        'approved' => 'Approved',
                        'published' => 'Published',
                        'archived' => 'Archived',
                    ]),

                Tables\Filters\SelectFilter::make('category')
                    ->relationship('category', 'name'),

                Tables\Filters\SelectFilter::make('slot_position')
                    ->options([
                        'hero' => 'Hero',
                        'featured_1' => 'Featured 1',
                        'featured_2' => 'Featured 2',
                        'featured_3' => 'Featured 3',
                        'archive' => 'Archive',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

                Tables\Actions\Action::make('approve')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->visible(fn (Post $record) => $record->status === 'pending_approval' && auth()->user()->can('approve_posts'))
                    ->action(function (Post $record) {
                        $record->update([
                            'status' => 'approved',
                            'approved_by' => auth()->id(),
                            'approved_at' => now(),
                        ]);
                    })
                    ->successNotificationTitle('Post approved successfully!'),

                Tables\Actions\Action::make('publish')
                    ->icon('heroicon-o-rocket-launch')
                    ->color('info')
                    ->visible(fn (Post $record) => in_array($record->status, ['approved', 'draft']) && auth()->user()->can('publish_posts'))
                    ->action(function (Post $record) {
                        $record->update([
                            'status' => 'published',
                            'published_at' => $record->published_at ?? now(),
                        ]);
                    })
                    ->successNotificationTitle('Post published successfully!'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->with(['category', 'creator', 'approver']);
    }
}
