<?php

namespace App\Filament\Resources\Restaurants\RelationManagers;

use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MenusRelationManager extends RelationManager
{
    protected static string $relationship = 'menus';

    protected static ?string $title = 'Menus';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                TextInput::make('title')
                    ->label('Menu title')
                    ->required()
                    ->maxLength(120),
                TextInput::make('page_count')
                    ->label('Page count')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(999)
                    ->helperText('Optional'),
                FileUpload::make('file_path')
                    ->label('Menu file')
                    ->required()
                    ->columnSpanFull()
                    ->disk('public')
                    ->acceptedFileTypes([
                        'application/pdf',
                        'image/jpeg',
                        'image/png',
                        'image/webp',
                    ])
                    ->directory('menus/files')
                    ->visibility('public')
                    ->downloadable()
                    ->openable(),
                FileUpload::make('preview_path')
                    ->label('Preview image')
                    ->columnSpanFull()
                    ->image()
                    ->disk('public')
                    ->directory('menus/previews')
                    ->visibility('public')
                    ->imageEditor()
                    ->imagePreviewHeight('150')
                    ->helperText('Shown to customers as the menu cover.'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                ImageColumn::make('preview_path')
                    ->label('Preview')
                    ->disk('public')
                    ->imageSize(56),
                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('page_count')
                    ->label('Pages')
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->label('Updated')
                    ->since()
                    ->sortable(),
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->recordActions([
                Action::make('view')
                    ->label('View')
                    ->icon('heroicon-o-eye')
                    ->url(fn($record) => route('menus.view', $record))
                    ->openUrlInNewTab()
                    ->visible(fn($record) => filled($record->file_url)),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->emptyStateHeading('No menus uploaded')
            ->emptyStateDescription('Upload your first menu so diners can see it on the restaurant page.');
    }
}
