<?php

namespace App\Services;

use App\Models\Restaurant;
use App\Models\User;

class FilamentMessageReviewLogic
{
    public static function handleSave(array $data): array{
        //        Finding user for their id. Can't use Auth because can be a different user
        $user = User::where('email', $data['email'])->first();
        unset($data['email']);
//        Finding restaurant id
        [$restaurantName,$restaurantAddresss]=array_map('trim',explode("|", $data['restaurant']));
        $restaurant = Restaurant::where('name', $restaurantName)
            ->where('address', $restaurantAddresss)
            ->first();
        unset($data['restaurant']);
//        adds to query
        $data['restaurant_id'] = $restaurant->id;
        $data['user_id'] = $user->id;
        return $data;
    }

    public static function handleFill(){

    }

}
