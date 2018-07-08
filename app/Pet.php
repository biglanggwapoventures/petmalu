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

    protected $hidden = [
        'updated_at',
    ];

    protected $fillable = [
        'reason',
        'origin',
        'origin_latitude',
        'origin_longitude',
        'date_seized',
        'cage_number',
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
        return $query->latest();
    }

    public function getPhotoFilepathAttribute()
    {
        return asset("storage/{$this->photo}");
    }

    public function scopeForAdoption($query)
    {
        return $query->whereRegistrationStatus('approved')
            ->whereDoesntHave('approvedAdoptionRequest');
    }

    public function scopeAdopted($query)
    {
        return $query->whereHas('approvedAdoptionRequest')
            ->with([
                'owner:id,name',
                'approvedAdoptionRequest:id,pet_id,user_id,adoption_purpose,adopted_at,proof_of_adoption',
                'approvedAdoptionRequest.requestor:id,name',
            ]);
    }

    public function loadAdoptionDetails()
    {
        return $this->load([
            'owner',
            'approvedAdoptionRequest',
            'approvedAdoptionRequest.requestor',
        ]);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function adoptionRequests()
    {
        return $this->hasMany(AdoptionRequest::class)->orderBy('created_at');
    }

    public function approvedAdoptionRequest()
    {
        return $this->hasOne(AdoptionRequest::class)->whereRequestStatus('approved');
    }

    public function scopeWithAdoptionRequests($query)
    {
        return $query->whereHas('adoptionRequests')->with('adoptionRequests');
    }

    public function scopeProfile($query)
    {
        $query->select('id', 'pet_name', 'breed', 'species', 'origin', 'origin_latitude', 'origin_longitude', 'ownership', 'habitat', 'color', 'photo', 'created_by');
    }

    public function isAdopted()
    {
        if ($this->relationLoaded('approvedAdoptionRequest')) {
            return (bool) $this->approvedAdoptionRequest;
        }

        return $this->approvedAdoptionRequest()->exists();
    }

}
