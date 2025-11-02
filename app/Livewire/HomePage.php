<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;


#[Layout('layouts.homePage')]
class HomePage extends Component
{
    
    public function render()
    {
        return view('livewire.home-page');
    }
}
