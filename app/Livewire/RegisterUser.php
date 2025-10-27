<?php

namespace App\Livewire;

use App\Http\Requests\CreateRequest;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Http\Response;
use Livewire\Component;

class RegisterUser extends Component
{
    public function create(CreateRequest $request): Response
    {
        $fields = $request->validated();
        try {
            $user = ($this->userService->setUser($fields['name'], $fields['email'], $fields['password']));
        }
        catch (UniqueConstraintViolationException $exception) {
            return response(["message" => "User already exists!"], 409);
        }
        $token = $user->createToken('my-app-token')->plainTextToken;
        $response = [
            'user'=>$user,
            'token'=>$token
        ];
        return response($response,201);
    }

    public function render()
    {
        return view('livewire.register-user');
    }
}
