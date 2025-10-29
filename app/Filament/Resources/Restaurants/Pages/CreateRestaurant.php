<?php

namespace App\Filament\Resources\Restaurants\Pages;

use App\Filament\Resources\Restaurants\RestaurantResource;
use App\Models\User;
use Filament\Resources\Pages\CreateRecord;

class CreateRestaurant extends CreateRecord
{
    protected static string $resource = RestaurantResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $user = User::where('email', $data['email'])->first();
        unset($data['email']);
        if($user==null){
            return $data;
        }
        $data['owner_id'] = $user->id;
        return $data;
    }
}
