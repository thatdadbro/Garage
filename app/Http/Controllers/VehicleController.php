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
        return view('forms.add-vehicle');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'purchased' => 'required|date',
            'year' => 'required|integer',
            'make' => 'required',
            'model' => 'required',
            'transmission' => 'required',
            'color' => 'required',
        ]);

        $vehicle = new Vehicle();
        $vehicle->fill($request->all());
        $vehicle->user_id = auth()->id();
        $vehicle->save();

        return redirect()->route('vehicles.collection');
    }

    // public function edit(Request $request)
    // {
    //     $vehicle = Vehicle::find($request->id);
    //     return view('forms.edit-vehicle', ['vehicle' => $vehicle]);
    // }
}
