<?php

namespace App;

use App\Pet;
use Illuminate\Database\Eloquent\Model;

class AdoptionRequest extends Model
{
    protected $fillable = [
        'pet_id',
        'user_id',
        'request_status',
        'adoption_purpose',
    ];

    protected $dates = [
        'created_at',
    ];

    public function scopeFieldsForMasterList($query)
    {
        return $query;
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }

    public function requestor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
