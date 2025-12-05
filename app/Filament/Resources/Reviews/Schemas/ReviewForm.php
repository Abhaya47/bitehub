<?php

namespace App\Filament\Resources\Reviews\Schemas;

use App\Models\User;
use App\Models\Restaurant;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Utilities\Get;

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
                Select::make('name')
                    ->label('Name')
                    ->live(true)
                    ->options(function () {
                        $user = Auth::user();
                        if (User::isAdmin()) {
                            return Restaurant::query()->pluck('name', 'name');
                        }
                        return $user->restaurants()->pluck('name', 'name');
                    })
                    ->afterStateUpdated(function (Select $component, ?string $state) {
                        if ($state !== null) {
                            $component->state($state);
                        }
                    })
                    ->loadingMessage('Loading Restaurants...')
                    ->searchable(),
                Select::make('address')
                    ->label('Address')
                    ->reactive()
                    ->options(function (Get $get) {
                        $restaurantName = $get('name');
                        return Restaurant::where('name', $restaurantName)
                            ->pluck('address', 'address') // address => address
                            ->toArray();
                    })
                    ->searchable()
                    ->loadingMessage('Loading Addresses...'),

                Select::make('email')
                    ->label('User email')
                    ->options(function () {
                        if (User::isAdmin()) {
                            return User::query()->pluck('email', 'email');
                        }
                        return User::query()->where('id', Auth::user()->id)->pluck('email', 'email');
                    })
                    ->default(fn() => Auth::user()->email)
                    ->searchable(),
                FileUpload::make('file_path')
                    ->label('Review Image')
                    ->image()
                    ->multiple()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->columnSpanFull()
                    ->disk('public')
                    ->acceptedFileTypes([
                        'image/jpeg',
                        'image/png',
                    ])
                    ->directory('review_images/files')
                    ->visibility('public')
                    ->downloadable()
                    ->openable()
                    ->deletable(true)
                    ->helperText('You can upload an image related to your review.'),

            ]);
    }
}
