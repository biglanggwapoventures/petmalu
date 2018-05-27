<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\User\AdoptionRequestController as UserAdoptionRequestController;
use App\Pet;

class AdoptionRequestController extends UserAdoptionRequestController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Pet::profile()
            ->forAdoption()
            ->has('adoptionRequests', '>=', 1)
            ->withCount('adoptionRequests')
            ->get();

        $this->viewData['resourceList'] = $result;

        return view(
            "{$this->viewBaseDir}.{$this->viewFiles['index']}",
            $this->viewData
        );
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
