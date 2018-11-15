<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pet;

class AdoptedPetsMapController extends Controller
{
    public function __invoke(Request $request)
    {
        $result = Pet::profile()->whereHas('approvedAdoptionRequest')->get();


        $data = $result->map(function ($item) {
            return $item->only([
                'pet_name',
                'breed',
                'species',
                'origin_latitude',
                'origin_longitude',
                'origin',
                'photo_filepath'
            ]);
        });

        return view('admin.pet-map', compact('data'));
    }
}
