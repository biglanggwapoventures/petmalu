<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\User\AdoptionRequestController as UserAdoptionRequestController;

class AdoptionRequestController extends UserAdoptionRequestController
{
    public function beforeIndex($query)
    {
        return $query->with(['pet.owner', 'requestor'])->latest();
    }

    public function beforeShow($data)
    {

    }
}
