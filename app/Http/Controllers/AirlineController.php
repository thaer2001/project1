<?php

namespace App\Http\Controllers;

use App\Http\Resources\AirlineResource;
use App\Http\Resources\AirlineCollection;
use Illuminate\Http\Request;
use App\Models\airline;
use App\Http\Requests\StoreairlineRequest;
use App\Http\Requests\UpdateairlineRequest;
use Illuminate\Support\Facades\Auth;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $airlines = Airline::all();


    return new AirlineCollection($airlines);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreairlineRequest $request)
    {
        return new AirlineResource(airline::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(airline $airline)
    {
        return new AirlineResource($airline);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateairlineRequest $request, airline $airline)
    {
        $airline->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(airline $airline)
    {
        $airline=airline::where('id',auth::id())->delete();
        return response()->json(['access'=>true,'message'=>'airline deleted successfully']);
    }
}
