<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarResource;
use App\Models\car;
use App\Http\Requests\StorecarRequest;
use App\Http\Requests\UpdatecarRequest;
use App\Http\Resources\CarCollection;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        
        return new CarCollection($cars);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecarRequest $request)
    {
        return new CarResource(car::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(car $car)
    {
        return new CarResource($car);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecarRequest $request, car $car)
    {
        $car->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(car $car)
    {
        $car=car::where('id',auth::id())->delete();
        return response()->json(['access'=>true,'message'=>'car deleted successfully'],200);
    }
}
