<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assets = Asset::all();
        return view('assets.index', compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('assets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'serial_number' => 'required|string|unique:assets',
            'acquisition_date' => 'required|date',
            'acquisition_value' => 'required|numeric',
            'useful_life' => 'required|integer',
            'location' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'supplier' => 'required|string|max:255',
        ]);

        Asset::create($validated);
        return redirect()->route('assets.index')->with('success', 'Asset created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Asset $asset)
    {
        return view('assets.show', compact('asset'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asset $asset)
    {
        return view('assets.edit', compact('asset'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asset $asset)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'serial_number' => 'required|string|unique:assets,serial_number,' . $asset->id,
            'acquisition_date' => 'required|date',
            'acquisition_value' => 'required|numeric',
            'useful_life' => 'required|integer',
            'location' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'supplier' => 'required|string|max:255',
        ]);

        $asset->update($validated);
        return redirect()->route('assets.index')->with('success', 'Asset updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asset $asset)
    {
        $asset->delete();
        return redirect()->route('assets.index')->with('success', 'Asset deleted successfully.');
    }
}
