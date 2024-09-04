<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        $collection = Vehicle::getCollection();
        return view('vehicles', ['collection' => $collection]);
    }

    public function add()
    {
        return view('add-vehicle');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'purchased_at' => 'required|date',
            'year' => 'required|integer',
            'make' => 'required',
            'model' => 'required',
            'transmission' => 'required',
            'color' => 'required',
        ]);

        $vehicle = Vehicle::create($request->all());

        if ($request->hasFile('image')) {
            $vehicle->uploadImage($request->file('image'));
        }

        return redirect()->route('vehicles.collection');
    }

    public function edit(Request $request)
    {
        $vehicle = Vehicle::find($request->input('id'));
        return view('edit-vehicle', ['vehicle' => $vehicle, 'id' => $request->input('id')]);
    }

    public function browse()
    {
        $vehicles = Vehicle::all();
        return view('browse-vehicles', ['vehicles' => $vehicles]);
    }
}
