<?php

namespace App\Filament\Resources\Reviews\Schemas;

use App\Models\Restaurant;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class ReviewForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('review')
                    ->required(),
                TextInput::make('rating')
                    ->required()
                    ->numeric(),
                TextInput::make('restaurant')
//                    ->default(fn()=>Restaurant::find('owner_id', Auth::user()->id)->first())
                    ->hint("name|address include '|'")
                    ->required(),
                TextInput::make('email')
                    ->label('User Email')
                    ->default(fn()=>Auth::user()->email)
                    ->string()
            ]);
    }
}
