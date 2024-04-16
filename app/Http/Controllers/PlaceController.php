<?php

namespace App\Http\Controllers;

use App\Models\place;
use App\Http\Requests\StoreplaceRequest;
use App\Http\Requests\UpdateplaceRequest;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
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
