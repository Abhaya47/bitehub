<?php

namespace App\Livewire;

use App\Models\RestaurantTag;
use Illuminate\Http\Request;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Tags extends Component
{

    public $restaurants;

    public function mount(Request $request, $tag)
    {
        $this->restaurants = RestaurantTag::with(['restaurant.rating'])->where('tag_id', $tag)->get();

    }

    public function render()
    {
        return view('livewire.tags');
    }
}
