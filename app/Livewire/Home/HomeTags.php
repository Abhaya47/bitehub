<?php

namespace App\Livewire\Home;

use App\Models\RestaurantTag;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class HomeTags extends Component
{
    public $tags;

    public function mount()
    {
        $this->tags=RestaurantTag::with('tag','restaurant')->get();
    }

    public function render()
    {
        return view('livewire.home_components.home-tags');
    }
}
