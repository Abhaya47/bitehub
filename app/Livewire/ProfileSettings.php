<?php

namespace App\Livewire;

use App\Services\LocationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

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
            /*
             * php artisan storage:link to make this work
             */
            // Delete old photo if exists, and it's not the default one (optional check)
            if ($user->file_path) {
                Storage::disk('public')->delete($user->file_path);
            }

            $path = $this->photo->store('profile-photos', 'public');
            $user->file_path = $path;
        }

        $user->save();

        if ($this->photo) {
            $this->existingPhoto = $user->file_path;
            $this->photo = null;
        }

        // Refresh the authenticated user in the session
        Auth::setUser($user->fresh());

        session()->flash('message', 'Profile updated successfully.');
        $this->dispatch('refresh-header');
    }

    public function render()
    {
        return view('livewire.profile-settings');
    }
}
