<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use Illuminate\Http\Request;

class PackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packs = Pack::all();
        return view('admin.pack.index', compact('packs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pack.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formRequest = $request->validate([
            'pack_title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'pack_img' => ['image', 'mimes:png,jpg,svg'],
            'price' => ['required', 'numeric'],
            'places_number' => ['required', 'numeric'],
            'starting_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
        ]);
        if ($request->hasFile('pack_img')) {
            $formRequest['pack_img'] = $request->file('pack_img')->store('imgs', 'public');
        }
        Pack::create($formRequest);

        return to_route('admin-pack.index')->with('success', 'Pack Added successfully');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pack = Pack::findOrFail($id);
        return view('admin.pack.edit', compact('pack'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pack $pack)
    {
        $formRequest = $request->validate([
            'pack_title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'pack_img' => ['image', 'mimes:png,jpg,svg'],
            'price' => ['required', 'numeric'],
            'places_number' => ['required', 'numeric'],
            'starting_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
        ]);
        if ($request->hasFile('pack_img')) {
            $formRequest['pack_img'] = $request->file('pack_img')->store('imgs', 'public');
        }
        $pack->update($formRequest);

        return to_route('admin-pack.index')->with('success', 'Pack Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pack = Pack::findOrFail($id);
        $pack->delete();
        return to_route('admin-pack.index')->with('success', 'Pack Deleted successfully');
    }
}
