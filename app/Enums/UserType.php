<?php

namespace App\Enums;

enum UserType: string
{
    //
    case Admin = "admin";
    case Owner = "owner";
    case User = "user";


//    /**
//     * Sends user role
//     * @return string
//     */
//    public function userRole(): string
//    {
//        return match ($this) {
//            self::Admin => 'Admin',
//            self::Owner => 'Owner',
//            self::User => 'User',
//        };
//      }
}
