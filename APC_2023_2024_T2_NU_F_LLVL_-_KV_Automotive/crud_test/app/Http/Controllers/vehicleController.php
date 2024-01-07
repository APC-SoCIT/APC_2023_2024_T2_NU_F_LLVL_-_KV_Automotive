<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehicle;

class vehicleController extends Controller
{
    public function index(){
        $vehicle = vehicle::all();
        return view('vehicle.index', ['vehicle' => $vehicle]);

    }

    public function create(){
        return view('vehicle.create');

    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'Fname' => 'required',
            'Mname' => 'required',
            'Lname' => 'required',
            'model' => 'required',
            'make' => 'required',
            'plate_no' => 'required',
            'chassis_no' => 'required',
            'engine_no' => 'required',
            'transmission' => 'required',
            'FuelType' => 'required',
            'vehicle_history' => 'required',
        ]);

       $newVehicle = vehicle::create($data);

        return redirect(route('vehicle.index'));
    }
    
    

    public function edit(Vehicle $vehicle){
        return view('vehicle.edit', ['vehicle' => $vehicle]);
    }

    public function update(Vehicle $vehicle, Request $request){
        $data = $request->validate([
            'Fname' => 'required',
            'Mname' => 'required',
            'Lname' => 'required',
            'model' => 'required',
            'make' => 'required',
            'plate_no' => 'required',
            'chassis_no' => 'required',
            'engine_no' => 'required',
            'transmission' => 'required',
            'FuelType' => 'required',
            'vehicle_history' => 'required',
        ]);

        $vehicle->update($data);

        return redirect(route('vehicle.index'))->with('success', 'vehicle Updated Successfully');

    }

    public function destroy(Vehicle $vehicle){
        $vehicle->delete();
        return redirect(route('vehicle.index'))->with('success', 'vehicle deleted Successfully');
    }
}

