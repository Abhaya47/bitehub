<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Filament\Panel;
use App\Services\UserService;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function canAccessPanel(Panel $panel): bool
    {
        return match ($panel->getId()) {
            'admin' => $this->role === 'admin',
            'owner' => $this->role === 'owner',
            default => false
        };
    }

    public function restaurants()
    {
        return $this->hasMany('App\Models\Restaurant');
    }

    public function review(){
        return $this->hasMany('App\Models\Review');
    }

    public function messages(){
        return $this->hasMany('App\Models\Message');
    }

    protected function isAdmin(): bool{
        $user=Auth::user();
        if(($user->role)=="admin"){
            return true;
        }
        return false;
    }

    protected function isOwner(): bool{
        $user=Auth::user();
        if(($user->role)=="owner"){
            return true;
        }
        return false;
    }

    protected function isUser(): bool{
        $user=Auth::user();
        if(($user->role)=="user"){
            return true;
        }
        return false;
    }


}
