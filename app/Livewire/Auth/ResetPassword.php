<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('layouts.app')]
class ResetPassword extends Component
{

    public string $token = '';
    public string $email = '';
    public string $password;
    public string $password_confirmation;

    public array $rules = [
        'email' => 'required|email',
        'password' => 'required',
        'password_confirmation' => 'required',
    ];

    public function resetPassword()
    {
        $this->validate($this->rules);
        $status = Password::reset(
            [
                'email' => $this->email,
                'password' => $this->password,
                'password_confirmation' => $this->password_confirmation,
                'token' => $this->token
            ],
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();
            }
        );
        return $status === Password::PasswordReset
            ? redirect('/login')->with('status', __($status))
            : session()->flash('error', __($status));
    }

    public function mount()
    {
        $this->email = request('email', '');
        //        $this->token = request()->route('token', '');
    }

    public function render()
    {
        return view('livewire.reset-password');
    }
}
