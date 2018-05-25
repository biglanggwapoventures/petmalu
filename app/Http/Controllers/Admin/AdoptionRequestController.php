<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\User\AdoptionRequestController as UserAdoptionRequestController;

class AdoptionRequestController extends UserAdoptionRequestController
{
    public function beforeIndex($query)
    {
        return $query->with(['pet.owner', 'requestor'])->latest();
    }

    public function updateActionValidator()
    {
        return [
            'request_status' => 'required|in:pending,approved,rejected',
        ];
    }

    public function beforeShow($data)
    {

    }
}
