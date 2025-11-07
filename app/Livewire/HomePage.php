<?php

namespace App\Livewire;

use App\Models\Food;
use App\Models\Restaurant;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;


#[Layout('layouts.homePage')]
class HomePage extends Component
{

    public string $category='restaurant';
    public string $search = '';
    public array $restaurant=[];
    public string $name;


    public function render()
    {
        $this->name=Auth::user()->name;
        if($this->search==null){
            return view('livewire.home-page',[
                'restaurants' => []
            ]);
        }
        $this->search=trim($this->search);
        $response= $this->getModel()::query()->where('name', 'like', '%'.$this->search.'%')->limit(7)->get();
        return view('livewire.home-page', [
            'responses' => $response,
        ]);
    }

    public function getModel(){
        if($this->category=='restaurant'){
            return Restaurant::class;
        }
        elseif($this->category=='food'){
            return Food::class;
        }
        return Tag::class;
    }
}
