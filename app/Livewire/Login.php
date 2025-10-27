<?php

namespace App\Livewire;

use App\Http\Requests\LoginRequest;
use Livewire\Component;

class Login extends Component
{

    private $email;
    private $password;

    protected $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];

    public $messages= [
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'Password is required.',
//            'password.min' => 'Password must be at least 6 characters.'
        ];

    public function login(LoginRequest $validatedRequest){
        $this->validate();
        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('error', 'Invalid email or password.');
            return;
        }
        $token = Auth::user()->createToken('my-app-token')->plainTextToken;

        return redirect('/')
            ->withCookie(cookie('token', $token, 1440))
            ->with('status', 'Logged in successfully');
    }

    public function render()
    {
        return view('livewire.login')->layout('layouts.layout');
    }
}
