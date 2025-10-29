<?php

namespace App\Filament\Resources\Restaurants\Schemas;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;

class RestaurantInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextColumn::make('name')
                ->searchable()
                ->sortable(),
                TextColumn::make('address')
                ->searchable()
                ->sortable(),
                TextEntry::make('pan_number')
                    ->numeric(),
                TextEntry::make('established_date')
                    ->date(),
                TextColumn::make('owner.email')
                    ->label('Email')
                    ->searchable()
            ]);
    }
}
