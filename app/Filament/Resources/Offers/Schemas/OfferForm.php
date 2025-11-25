<?php

namespace App\Filament\Resources\Offers\Schemas;

use App\Models\Offer;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Forms\Components\DateTimePicker;

class OfferForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            Select::make('restaurant_id')
                ->label('Restaurant')
                ->options(function () {
                    $user = Auth::user();
                    if ($user->role === \App\Enums\UserType::Admin->value) {
                        return \App\Models\Restaurant::pluck('name', 'id');
                    }
                    return $user ? $user->restaurants()->pluck('name', 'id') : [];
                })
                ->required()
                ->live(),

            TextInput::make('title')
                ->required()
                ->rule(function (callable $get, $record) {
                    return function (string $attribute, $value, \Closure $fail) use ($get, $record) {
                        $query = Offer::where('title', $value)
                            ->where('restaurant_id', $get('restaurant_id'))
                            ->where('start_at', $get('start_at'))
                            ->where('end_at', $get('end_at'))
                            ->where('discount_type', $get('discount_type'))
                            ->where('discount_value', $get('discount_value'));

                        // Exclude current record when editing
                        if ($record && $record->exists) {
                            $query->where('id', '!=', $record->id);
                        }

                        if ($query->exists()) {
                            $fail('An offer with these exact details already exists.');
                            Notification::make()
                                ->warning()
                                ->title('Similar offer already exists')
                                ->body('An offer with the same details has already been created.')
                                ->send();
                        }
                    };
                }),

            Textarea::make('description')->required(),
            DateTimePicker::make('start_at')->required(),
            DateTimePicker::make('end_at')->required(),

            Select::make('discount_type')
                ->options([
                    'percentage' => 'Percentage',
                    'fixed' => 'Fixed',
                ])
                ->required(),

            TextInput::make('discount_value')
                ->numeric()
                ->required(),
        ]);
    }
}
