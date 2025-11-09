<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Description extends Component
{

    public $restaurant;

    public function mount($restaurant = null)
    {
        //This could come from DB if you have a model.
        $this->restaurant = $restaurant ?? 'Unknown Restaurant';
    }

    public function render()
    {
        return view('livewire.description');
    }
}
