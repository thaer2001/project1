<?php

namespace App\Http\Controllers;

use App\Http\Resources\HotelResource;
use App\Models\hotel;
use App\Http\Requests\StorehotelRequest;
use App\Http\Requests\UpdatehotelRequest;
use App\Http\Resources\HotelCollection;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::all();
        
        return new HotelCollection($hotels);
    }

 
    /**
     * Store a newly created resource in storage.
     */
    public function store(StorehotelRequest $request)
    {
        return new HotelResource(hotel::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatehotelRequest $request, hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hotel $hotel)
    {
        //
    }
}
