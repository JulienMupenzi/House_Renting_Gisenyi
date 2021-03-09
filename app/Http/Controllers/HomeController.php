<?php

namespace App\Http\Controllers;

use App\Property;
use App\Quarter;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $properties = Property::latest()->limit(6)->get();

        $quarters = Quarter::with('properties')->orderByRaw("RAND()")->take(15)->get();

        return view('welcome', compact('properties', 'quarters'));
    }
}
