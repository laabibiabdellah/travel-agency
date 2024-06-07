<?php

namespace App\Http\Controllers;

use App\Models\HotelServices;
use Illuminate\Http\Request;

class HotelServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotelServices = HotelServices::all();
        return view('hotel.services', compact('hotelServices'));
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
    public function store(Request $request)
    {
        $formData = $request->validate([
            "service_name" => "required",
            "description" => "required",
            "price" => ["required", "numeric"],
            "hotel_id" => "required"
        ]);

        HotelServices::create($formData);

        return to_route('hotel.index')->with('success', 'Service Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(HotelServices $hotelServices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HotelServices $hotelServices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HotelServices $hotelServices)
    {
        $formData = $request->validate([
            "service_name" => "required",
            "description" => "required",
            "price" => ["required", "numeric"],
        ]);
        $hotelServices->update($formData);

        return to_route('hotel.index')->with('success', 'Service Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HotelServices $hotelServices)
    {
        //
    }
}
