<?php

namespace App\Livewire;

use App\Models\Food;
use App\Models\Restaurant;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Search extends Component
{
    public string $category='restaurant';
    public string $search = '';


    public function getResponsesProperty(): Collection{
        $this->search=trim($this->search);
        if (empty($this->search)) return Collection::make([]);
        if($this->category=='restaurant'){
            return Restaurant::query()->join('ratings' ,'restaurants.id','=','ratings.restaurant_id')->where('restaurants.name', 'like', '%'.$this->search.'%')->orderBy('ratings.rating')->limit(7)->get();
        }
        elseif($this->category=='food'){
            return Food::class::query()->where('name', 'like', '%'.$this->search.'%')->limit(7)->get();
        }
        return Tag::class::query()->where('name', 'like', '%'.$this->search.'%')->limit(7)->get();
    }


    public function render()
    {
        return view('livewire.search',[
            'responses' => $this->responses,
        ]);
    }
}
