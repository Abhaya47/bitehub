<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\LocationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Profile extends Component
{
    public $activeTab = 'reviews';
    public $position;

    public function mount(Request $request)
    {
        $ip = $request->ip();
        $this->position = LocationService::getLocationFromIP($ip);
    }

    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function render()
    {
        $user = Auth::user();

        return view('livewire.profile', [
            'user' => $user,
            'reviews' => $user->review, // Assuming 'review' relationship exists
            'position' => $this->position,
        ]);
    }
}
