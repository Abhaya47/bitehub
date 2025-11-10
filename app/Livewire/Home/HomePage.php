<?php

namespace App\Livewire\Home;

use App\Models\Food;
use App\Models\Restaurant;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('layouts.homePage')]
class HomePage extends Component
{


    public string $background="bg-red-500";

    public array $restaurant=[];
    public string $name;

    public function mount()
    {
        if(!Auth::check()){
            return redirect()->route('/login');
        }
        $this->name=Auth::user()->name;
    }



    public function render()
    {
//        if ($this->search == null) {
//            return view('livewire.home-page', [
//                'responses' => []
//            ]);
//        }
//        $response = $this->getModelQuery();
        return view('livewire.home-page');
    }
}
