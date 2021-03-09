<?php

namespace App\Http\Controllers;

use App\Property;
use App\Quarter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $user = $request->user();

        $properties = Property::latest();

        if ($user->isSpecial()) {
            $properties = $properties->where('user_id', $user->id);
        }
        $properties = $properties->paginate(12);

        $action = $request->input('action');

        if ($action && $action === 'print') {

            return view('admin.properties-print', [
                'properties' => $properties
            ]);
        }

        return view('admin.properties.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.properties.add');
    }

    public function show(Property $property)
    {
        return view('property', [
            'property' => $property,
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
            'ground_size' => 'required',
            'price' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'garages' => 'required',
            'image' => 'required',
            'address' => 'required',
            'quarter_id' => 'required',
        ], [
            'quarter_id.required' => 'You need to select a quarter'
        ]);

        $property = new Property;
        $property->ground_size = $request->input('ground_size');
        $property->price = $request->input('price');
        $property->bedrooms = $request->input('bedrooms');
        $property->bathrooms = $request->input('bathrooms');
        $property->garages = $request->input('garages');
        $property->address = $request->input('address');
        $property->description = $request->input('description');

        if ($request->hasFile('image')) {
            if (!is_null($property->image)) {
                $fullPath = 'public' . DIRECTORY_SEPARATOR . $property->image;

                Storage::delete($fullPath);
            }
            $path = $request->file('image')->store('properties', 'public');

            $property->image = $path;
        }
        if ($request->hasFile('files')) {
            $paths = [];
            foreach ($request->file('files') as $file) {
                $paths[] = $file->store('properties', 'public');
            }

            $property->images = implode(",", $paths);
        }

        $property->quarter_id = $request->input('quarter_id');
        $property->user_id = $request->user()->id;

        $property->save();

        flash('Successfully saved');

        return redirect(route('properties.index'));
    }

    public function edit(Property $property)
    {
        return view('admin.properties.edit', [
            'property' => $property,
        ]);
    }


    public function destroy(Property $property)
    {

        $property->delete();

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Property $property, Request $request)
    {
        $this->validate($request, [
            'ground_size' => 'required',
            'price' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'garages' => 'required',
            'image' => 'required',
            'address' => 'required',
            'quarter_id' => 'required',
        ], [
            'quarter_id.required' => 'You need to select a quarter'
        ]);

        $property->ground_size = $request->input('ground_size');
        $property->price = $request->input('price');
        $property->bedrooms = $request->input('bedrooms');
        $property->bathrooms = $request->input('bathrooms');
        $property->garages = $request->input('garages');
        $property->address = $request->input('address');
        $property->description = $request->input('description');

        if ($request->hasFile('image')) {
            if (!is_null($property->image)) {
                $fullPath = 'public' . DIRECTORY_SEPARATOR . $property->image;

                Storage::delete($fullPath);
            }
            $path = $request->file('image')->store('properties', 'public');

            $property->image = $path;
        }
        if ($request->hasFile('files')) {
            $paths = [];
            foreach ($request->file('files') as $file) {
                $paths[] = $file->store('properties', 'public');
            }

            $property->images = implode(",", $paths);
        }

        $property->quarter_id = $request->input('quarter_id');
        $property->user_id = $request->user()->id;

        $property->save();

        flash('Successfully updated');

        return redirect(route('quarters.index'));
    }

    public function showByQuarter(Quarter $quarter)
    {
        $properties = Property::where('quarter_id', $quarter->id)->paginate(12);

        return view('properties', [
            'properties' => $properties,
            'quarter' => $quarter,
        ]);
    }
}
