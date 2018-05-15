<?php

namespace App\Http\Controllers\Admin;

use App\AnimalAdoption;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class AnimalAdoptionController extends BaseController
{
    protected $resourceModel;
    protected $request;

    public function __construct(AnimalAdoption $model, Request $request)
    {
        parent::__construct();
        $this->resourceModel = $model;
        $this->request = $request;
        $this->validationRules = [
            'store' => [
                'animal_type' => 'required|string|in:feline,canine,others',
                'name' => 'required|string|max:200',
                'description' => 'required|string',
                'sex' => 'required|in:male,female',
                'area' => 'required|string',
                'area_longitude' => 'required|numeric',
                'area_latitude' => 'required|numeric',
                'vaccination_status' => 'boolean',
                'date_seized' => 'required|date',
                'photo' => 'image|required',
            ],
            'update' => [

            ],
        ];
    }

    public function afterStore($resource)
    {
        $resource->photo = $this->request->file('photo')->store(
            "photos/adoption/{$resource->id}", 'public'
        );

        $resource->save();
    }
}
