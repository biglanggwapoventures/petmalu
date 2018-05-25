<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model
{
    use SoftDeletes;

    protected $dates = [
        'created_at',
    ];

    protected $appends = [
        'photo_filepath',
    ];

    protected $fillable = [
        'origin',
        'origin_latitude',
        'origin_longitude',
        'ownership',
        'habitat',
        'species',
        'pet_name',
        'breed',
        'birthdate',
        'color',
        'sex',
        'female_sex_extra',
        'num_puppies',
        'tag',
        'other_tag_extra',
        'other_animal_contact',
        'date_vaccinated',
        'vaccinated_by',
        'vaccination_source',
        'vaccination_type',
        'vaccine_stock_number',
        'routine_service_activity',
        'other_routine_service_activity_extra',
        'routine_service_remarks',
        'registration_status',
        'created_by',
        'photo',
    ];

    public function scopeFieldsForMasterList($query)
    {
        return $query;
    }

    public function getPhotoFilepathAttribute()
    {
        return asset("storage/{$this->photo}");
    }

    public function scopeForAdoption($query)
    {
        return $query->whereRegistrationStatus('approved')->whereDoesntHave('approvedAdoptionRequest');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function adoptionRequests()
    {
        return $this->hasMany(AdoptionRequest::class);
    }

    public function approvedAdoptionRequest()
    {
        return $this->hasOne(AdoptionRequest::class)->whereRequestStatus('approved');
    }

}
