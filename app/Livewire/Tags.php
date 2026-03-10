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

    public function mount(Request $request, $tagId)
    {
        $tag = \App\Models\Tag::findOrFail($tagId);
        $this->restaurants = $tag->restaurants()->with('rating')->get();
    }

    public function render()
    {
        return view('livewire.tags');
    }
}
