<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AnimalAdoption extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'animal_type', 'name', 'description', 'sex', 'area', 'area_longitude', 'area_latitude', 'vaccination_status', 'date_seized', 'photo',
    ];

    protected $casts = [
        'vaccination_status' => 'boolean',
    ];

    protected $appends = [
        'photo_filepath',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    /**
     * Returns the fields shown for the master list
     * @param  Builder $query
     * @return Builder
     */
    public function scopeFieldsForMasterList($query)
    {
        return $query;
    }

    public function getPhotoFilePathAttribute()
    {
        return asset("storage/{$this->photo}");
    }
}
