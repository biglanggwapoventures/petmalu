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
        'name', 'email', 'mobile_number', 'birthdate', 'address', 'gender', 'civil_status', 'password', 'role',
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

    /**
     * Determine if user is of current role
     * @param  String  $role
     * @return boolean
     */
    public function is($role)
    {
        return strtolower($role) === strtolower($this->role);
    }
}
