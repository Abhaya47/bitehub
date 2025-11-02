<?php

namespace App\Livewire;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
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

    public function login(){
        $validated=$this->validate($this->rules);
        $user=User::where('email', $this->email)->first();
        if($user==null){
            session()->flash('message', 'Invalid email or password.');
            return;
        }
        if ( ! Hash::check($validated['password'], $user->password) ){
            session()->flash('message', 'Invalid email or password.');
            return;
        }
        Auth::login($user, $this->remember);
        return redirect('/home')
            ->with('status', 'Logged in successfully');
    }

    public function mount()
    {
        if (auth()->check()) {
            return redirect('/home');
        }
    }
    public function render()
    {
        return view('livewire.login')->layout('layouts.layout');
    }
}

