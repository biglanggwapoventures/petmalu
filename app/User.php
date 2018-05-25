<?php

namespace App;

use App\AdoptionRequest;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'birthdate', 'address', 'gender', 'civil_status', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function adoptionRequest(Pet $pet)
    {
        return $pet->adoptionRequests()->whereUserId($this->id)->first();
    }

    public function adoptionRequests()
    {
        return $this->hasMany(AdoptionRequest::class);
    }
}
