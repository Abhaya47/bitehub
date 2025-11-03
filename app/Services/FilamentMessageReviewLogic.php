<?php

namespace App\Services;

use App\Models\Restaurant;
use App\Models\User;

class FilamentMessageReviewLogic
{
    /**
     * @param array $data
     * @return array
     */
    public static function handleSave(array $data): array{
        //Finding user for their id. Can't use Auth because can be a different user
        $user = User::where('email', $data['email'])->first();
        unset($data['email']);
        $restaurant = Restaurant::where('name', $data['name'])
            ->where('address', $data['address'])
            ->first();
        unset($data['name']);
        unset($data['address']);
        //adds to query
        $data['restaurant_id'] = $restaurant->id;
        $data['user_id'] = $user->id;
        return $data;
    }

    public static function handleFill(){

    }

}
