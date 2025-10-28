<?php

namespace App\Filament\Resources\Messages\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class MessageInfolist
{

    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('message'),
                TextEntry::make('restaurant_id')
                    ->numeric(),
                TextEntry::make('user_id')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
