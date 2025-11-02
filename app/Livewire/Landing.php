<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.landingPage')]

class Landing extends Component
{
    public function render()
    {
        return view('livewire.landing');
    }
}
