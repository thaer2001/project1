<?php

namespace App\Http\Controllers;

use App\Http\Resources\PlaceResource;
use App\Models\place;
use App\Http\Requests\StoreplaceRequest;
use App\Http\Requests\UpdateplaceRequest;
use App\Http\Resources\PlaceCollection;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $places = Place::all();
        
        return new PlaceCollection($places);
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
    public function store(StoreplaceRequest $request)
    {
        return new PlaceResource(place::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(place $place)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(place $place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateplaceRequest $request, place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(place $place)
    {
        //
    }
}
