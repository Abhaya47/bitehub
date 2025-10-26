<?php

namespace App\Filament\Resources\Restaurants\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;

class RestaurantForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Name')
                    ->required(),
                TextInput::make('address')
                    ->required(),
                TextInput::make('pan_number')
                    ->required()
                    ->numeric(),
                DatePicker::make('established_date')
                    ->required(),
                TextInput::make('owner_id')
                    ->nullable()
                    ->numeric(),
            ]);
    }
}
