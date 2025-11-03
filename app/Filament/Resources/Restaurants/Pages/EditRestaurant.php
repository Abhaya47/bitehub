<?php

namespace App\Filament\Resources\Restaurants\Pages;

use App\Filament\Resources\Restaurants\RestaurantResource;
use App\Models\User;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;

class EditRestaurant extends EditRecord
{
    protected static string $resource = RestaurantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $user = User::where('email', $data['email'])->first();
        unset($data['email']);
        if($user== null){
            return $data;
        }
        $data['owner_id'] = $user->id;
        return $data;
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $user= User::where('id',$data['owner_id'])->first();
        unset($data['owner_id']);
        if($user== null){
            return $data;
        }
        $data['email'] =$user->email;
        return $data;
    }
}
