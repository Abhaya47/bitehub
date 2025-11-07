<?php

namespace App\Livewire;

use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;


#[Layout('layouts.homePage')]
class HomePage extends Component
{


    public string $category;
    public string $search = '';
    public array $restaurant=[];
    public string $name;


    public function render()
    {
        return view('livewire.home-page');
        $this->name=Auth::user()->name;
        if($this->search==null){
            return view('livewire.home-page',[
                'restaurants' => []
            ]);
        }

        $this->search=trim($this->search);
        $restaurants= Restaurant::query()->where('name', 'like', '%'.$this->search.'%')->limit(7)->get();

        return view('livewire.home-page', [
            'restaurants' => $restaurants,

        ]);
    }
}
