<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\User\PetRegistrationController as UserPetRegistrationController;

class PetRegistrationController extends UserPetRegistrationController
{
    public function beforeIndex($query)
    {

    }

    protected function validationArray()
    {
        $validationArray = parent::validationArray();
        $validationArray['origin'] = 'nullable|string';
        $validationArray['origin_latitude'] = 'nullable|numeric';
        $validationArray['origin_longitude'] = 'nullable|numeric';
        $validationArray['registration_status'] = 'required|in:pending,approved,rejected';
        return $validationArray;
    }
}
