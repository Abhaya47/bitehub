<?php

namespace App\Filament\Resources\Messages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class MessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('message')
                    ->required(),
                TextInput::make('restaurant')
                    ->hint("name|address include '|'")
                    ->required(),
                TextInput::make('email')
                    ->label('User Email')
                    ->default(fn()=>Auth::user()->email)
                    ->string()
            ]);
    }
}
