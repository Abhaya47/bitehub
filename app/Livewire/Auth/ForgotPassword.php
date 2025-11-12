<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class ForgotPassword extends Component
{

    public string $email;
    public array $rules = [
        'email' => 'required|email',
    ];


    function forgotPassword()
    {
        $this->validate($this->rules);
        $status = Password::sendResetLink(
            array('email' => $this->email),
        );
        return $status === Password::ResetLinkSent
            ? session()->flash('message', "message sent")
            : session()->flash('error', __($status));
    }


    public function render()
    {
        return view('livewire.forgot-password');
    }
}
