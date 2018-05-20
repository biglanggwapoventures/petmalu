<?php

namespace App\Http\Controllers;

use App\AnimalAdoption;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome', [
            'items' => AnimalAdoption::eligible()->get(),
        ]);
    }
}
