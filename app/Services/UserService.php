<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Support\Facades\Hash;

class UserService
{
    /**
     * @param string $name
     * @param string $email
     * @param string $password
     * @return User
     * @throws UniqueConstraintViolationException
     */
    public function setUser(string $name, string $email, string $password): User
    {
        return User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password)
        ]);
    }

    /**
     * @param string $email
     * @return User|null
     *
     */
    public function getUser(string $email): User|null
    {
        $user = User::where("email", $email)->first();
        if ($user == null) {
            return null;
        }
        return $user;
    }

    public function checkPassword(User $user, string $password): bool
    {
        if (!Hash::check($password, $user->password)) {
            return false;
        }
        return true;
    }


}
