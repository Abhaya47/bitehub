<?php

namespace App\Filament\Resources\Restaurants\Tables;

use Filament\Tables\Table;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Support\Enums\ActionSize;
use Filament\Tables\Columns\TextColumn;

class RestaurantsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('address')
                    ->searchable(),
                TextColumn::make('pan_number')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('established_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('owner.email')->label('Owner Email')->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                Action::make('view')
                    ->label('View')
                    ->icon('heroicon-o-eye')
                    ->url(fn($record) => route('description', ['restaurant' => $record->id]))
                    ->openUrlInNewTab()
                    ->visible(fn($record) => filled($record->id)),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
