<?php

namespace App\Filament\Resources\Restaurants\Schemas;

use App\Models\User;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
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
                Select::make('email')
                    ->label('User email')
                    ->options(function () {
                        if (User::isAdmin()) {
                            return User::query()->pluck('email', 'email');
                        }
                        return User::query()->where('id', Auth::user()->id)->pluck('email', 'email');
                    })
                    ->default(fn() => Auth::user()->email)
                    ->searchable()
            ]);
    }


}
