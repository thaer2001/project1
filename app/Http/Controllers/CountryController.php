<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarResource;
use App\Http\Resources\CountryCollection;
use App\Http\Resources\CountryResource;
use App\Models\country;
use App\Http\Requests\StorecountryRequest;
use App\Http\Requests\UpdatecountryRequest;
use Illuminate\Support\Facades\Auth;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = country::all();
        
        return new CountryCollection($countries);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecountryRequest $request)
    {
        return new CountryResource(country::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(country $country)
    {
        return new CountryResource($country);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecountryRequest $request, country $country)
    {
        $country->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(country $country)
    {
        $country=country::where('id',auth::id())->delete();
        return response()->json(['access'=>true,'message'=>'country deleted successfully'],200);
    }
}
