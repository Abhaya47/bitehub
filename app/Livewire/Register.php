<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.layout')]
class Register extends Component
{


    public $name;
    public $email;
    public $password;
    public $password_confirmation;


    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
//        'password_confirmation' => 'required'
    ];

    public $messages= [
        'name.required' => 'Please enter a name.',
        'email.required' => 'Please enter your email address.',
        'email.email' => 'Please enter a valid email address.',
        'password.required' => 'Password is required.',
//            'password.min' => 'Password must be at least 6 characters.'
    ];

    public function register(){
        $validatedFields=$this->validate($this->rules);
        try {
            $user = User::create([
                'name' => $validatedFields['name'],
                'email' => $validatedFields['email'],
                'password' => Hash::make($validatedFields['password'])
            ]);
        }
        catch (UniqueConstraintViolationException $exception) {
            session()->flash('message', 'Something is wrong, guess and fix it please.');
            return;
        }
        Auth::login($user);
        return redirect()->to('/');

    }

    public function render()
    {
        return view('livewire.register');
    }
}
