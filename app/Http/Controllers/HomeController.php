<?php

namespace App\Http\Controllers;

use App\Pet;

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
            'items' => Pet::forAdoption()->get(),
        ]);
    }
}
