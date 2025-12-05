<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Services\LocationService;

#[Layout('layouts.app')]

class ProfileSettings extends Component
{
    use WithFileUploads;

    public $name;
    public $bio;
    public $photo;
    public $existingPhoto;
    public $position;

    public function mount(Request $request)
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->bio = $user->bio;
        $this->existingPhoto = $user->file_path;

        $ip = $request->ip();
        $this->position = LocationService::getLocationFromIP($ip);
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|min:3',
            'bio' => 'nullable|string|max:300',
            'photo' => 'nullable|image|max:1024', // 1MB Max
        ]);

        $user = Auth::user();
        $user->name = $this->name;
        $user->bio = $this->bio;

        if ($this->photo) {
            // Delete old photo if exists and it's not the default one (optional check)
            if ($user->file_path) {
                Storage::disk('public')->delete($user->file_path);
            }

            $path = $this->photo->store('profile-photos', 'public');
            $user->file_path = $path;
        }

        $user->save();

        // Update existing photo to show the new one immediately if needed, 
        // though the redirect or refresh might handle it. 
        // For now, let's just re-assign.
        if ($this->photo) {
            $this->existingPhoto = $user->file_path;
            $this->photo = null; // Reset upload input
        }

        session()->flash('message', 'Profile updated successfully.');
        $this->dispatch('refresh-header');
    }

    public function render()
    {
        return view('livewire.profile-settings');
    }
}
