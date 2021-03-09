<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SendSuggest;

class SugestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sugestions = SendSuggest::latest()->paginate(20);
        return view ('sugestion', [
            'sugestions' => $sugestions
        ]);
    }

}
