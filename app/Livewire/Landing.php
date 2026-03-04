<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Landing extends Component
{
    public function render()
    {
        return view('livewire.landing');
    }
}
