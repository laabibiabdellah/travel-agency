<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::all();
        return view('admin.hotel.index', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formRequest = $request->validate([
            'hotel_name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'hotel_img' => ['image', 'mimes:png,jpg,svg'],
            'starts' => ['required', 'numeric'],
            'room_count' => ['required', 'numeric'],
            'city' => ['required', 'string'],
            'address' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'min_price' => ['required', 'numeric'],
        ]);
        if ($request->hasFile('hotel_img')) {
            $formRequest['hotel_img'] = $request->file('hotel_img')->store('imgs', 'public');
        }
        Hotel::create($formRequest);

        return to_route('admin-hotel.index')->with('success', 'Hotel Added successfully');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('admin.hotel.edit', compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hotel $hotel)
    {
        $formRequest = $request->validate([
            'hotel_name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'hotel_img' => ['image', 'mimes:png,jpg,svg'],
            'starts' => ['required', 'numeric'],
            'room_count' => ['required', 'numeric'],
            'city' => ['required', 'string'],
            'address' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'min_price' => ['required', 'numeric'],
        ]);
        if ($request->hasFile('hotel_img')) {
            $formRequest['hotel_img'] = $request->file('hotel_img')->store('imgs', 'public');
        }
        $hotel->update($formRequest);

        return to_route('admin-hotel.index')->with('success', 'Hotel Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hotel = Hotel::findOrFail($id);
        $hotel->delete();
        return to_route('admin-hotel.index')->with('success', 'Hotel Deleted successfully');
    }
}
