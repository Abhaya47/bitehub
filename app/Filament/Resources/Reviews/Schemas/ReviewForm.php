<?php

namespace App\Filament\Resources\Reviews\Schemas;

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
                TextInput::make('restaurant_id')
                    ->required()
                    ->numeric(),
                TextInput::make('user_id')
                    ->default(fn()=>Auth::user()->id)
                    ->readonly()
                    ->required()
                    ->numeric(),
            ]);
    }
}
