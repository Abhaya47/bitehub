<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.layout')]
class Login extends Component
{

    public $email;
    public $password;
    public bool $remember= false;

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

    public function login()
    {
        $validated = $this->validate($this->rules);
        if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']], $this->remember)) {
            return redirect('/home')
                ->with('status', 'Logged in successfully');
        }
        else {
            return session()->flash('error', 'Failed to login, please try again.');
        }
    }

    public function render()
    {
        return view('livewire.login')->layout('layouts.layout');
    }
}
