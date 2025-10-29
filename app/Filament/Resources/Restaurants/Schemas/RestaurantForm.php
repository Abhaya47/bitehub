<?php

namespace App\Filament\Resources\Restaurants\Schemas;

use App\Models\User;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Auth;

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
                        ->required(),
                    DatePicker::make('established_date')
                        ->required()
                        ->before('today'),
                    TextInput::make('email')
                        ->label('Owner Email')
                        ->default(fn()=>Auth::user()->email)
                        ->nullable()
                        ->string()
                ]);
    }


}
