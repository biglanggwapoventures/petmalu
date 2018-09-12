<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\User\PetRegistrationController as UserPetRegistrationController;

class PetRegistrationController extends UserPetRegistrationController
{
    public function beforeIndex($query)
    {
        $registrationStatus = $this->request->registration_status;

        $query->when(in_array($registrationStatus, ['pending', 'approved', 'rejected']), function ($q) use ($registrationStatus) {
            $q->whereRegistrationStatus($registrationStatus);
        });

        $query->with('owner');
    }

    protected function validationArray()
    {
        $validationArray = parent::validationArray();

        unset($validationArray['reason'], $validationArray['service_type']);

        $validationArray['origin'] = 'nullable|string';
        $validationArray['origin_latitude'] = 'nullable|numeric';
        $validationArray['origin_longitude'] = 'nullable|numeric';
        $validationArray['registration_status'] = 'required|in:pending,approved,rejected';

        $validationArray['date_seized'] = 'nullable|required_if:registration_status,approved|date';
        $validationArray['cage_number'] = 'nullable|required_if:registration_status,approved|string|max:15';

        return $validationArray;
    }

    public function beforeEdit($model)
    {
        $model->load('approvedAdoptionRequest');
    }
}
