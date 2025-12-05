<?php

namespace App\Filament\Resources\Offers\Tables;

use Filament\Actions\DeleteBulkAction as ActionsDeleteBulkAction;
use Filament\Actions\EditAction as ActionsEditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class OffersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('restaurant.name')->label('Restaurant'),
                TextColumn::make('title'),
                TextColumn::make('start_at')->dateTime(),
                TextColumn::make('end_at')->dateTime(),
                TextColumn::make('discount_value')->label('Discount'),
            ])
            ->filters([])
            ->recordActions([
                ActionsEditAction::make(),
            ])
            ->toolbarActions([
                ActionsDeleteBulkAction::make(),
            ]);
    }
}
