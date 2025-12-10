<?php

namespace App\Filament\Resources\Notices\Schemas;

use App\Enums\UserType;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;

class NoticeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('created_by')
                    ->default(fn () => auth()->id()),
                
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->label('Notice Title'),
                
                Textarea::make('message')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull()
                    ->label('Message Content'),
                
                Select::make('target_role')
                    ->required()
                    ->options([
                        UserType::User->value => 'Regular Users',
                        UserType::Owner->value => 'Restaurant Owners',
                        UserType::Admin->value => 'Administrators',
                    ])
                    ->label('Target Audience'),
                
                Select::make('type')
                    ->required()
                    ->options([
                        'notice' => 'General Notice',
                        'alert' => 'Alert',
                        'announcement' => 'Announcement',
                        'maintenance' => 'Maintenance',
                    ])
                    ->default('notice')
                    ->label('Notice Type'),
                
                Toggle::make('is_published')
                    ->label('Published')
                    ->helperText('When enabled, this notice will be sent to all users in the target role')
                    ->live()
                    ->afterStateUpdated(function ($state, Set $set) {
                        if ($state) {
                            $set('published_at', now());
                        } else {
                            $set('published_at', null);
                        }
                    }),
            ]);
    }
}
