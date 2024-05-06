<?php

namespace App\Http\Controllers;

use App\Http\Resources\CityCollection;
use App\Http\Resources\CityResource;
use App\Models\city;
use App\Http\Requests\StorecityRequest;
use App\Http\Requests\UpdatecityRequest;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = city::all();
        
        return new CityCollection($cities);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecityRequest $request)
    {
        return new CityResource(city::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(city $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(city $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecityRequest $request, city $city)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(city $city)
    {
        //
    }
}
