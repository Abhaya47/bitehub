<?php

namespace App\Filament\Resources\Restaurants\Schemas;

use App\Models\User;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;

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
                    ->searchable(),

                FileUpload::make('file_path')
                    ->label('Restaurant Logo')
                    ->image()
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
                    ->directory('logos/files')
                    ->visibility('public')
                    ->downloadable()
                    ->openable()
                    ->deletable(true)
                    ->helperText('This logo is used in the homepage slider.'),
            ]);
    }
}
