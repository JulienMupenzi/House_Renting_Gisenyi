<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quarter;

class QuarterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            
        $quarters = Quarter::orderBy('name', 'ASC')->get();

        $quarter = new Quarter;

        return view('admin.quarters', [
            'quarters' => $quarters,
            'quarter' => $quarter,
        ]);
    }

    public function edit(Quarter $quarter)
    {
        $quarters = Quarter::orderBy('name', 'ASC')->get();

        return view('admin.quarters', [
            'quarters' => $quarters,
            'quarter' => $quarter,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3'
        ]);

        $quarter = new Quarter;
        $quarter->name = $request->input('name');
        $quarter->save();

        flash('Successfully saved');

        return redirect()->back();
    }

    public function update(Quarter $quarter, Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3'
        ]);

        $quarter->name = $request->input('name');
        $quarter->save();

        flash('Successfully updated');

        return redirect(route('quarters.index'));
    }

    public function destroy(Quarter $quarter)
    {

        $quarter->delete();

        return redirect()->back();
    }
}
