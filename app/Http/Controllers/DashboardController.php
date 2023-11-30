<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Car::query();

        // Filter berdasarkan brand
        if ($request->has('brand')) {
            $query->where('brand', 'like', '%' . $request->brand . '%');
        }

        // Filter berdasarkan model
        if ($request->has('model')) {
            $query->where('model', 'like', '%' . $request->model . '%');
        }

        // Filter berdasarkan plate_number
        if ($request->has('plate_number')) {
            $query->where('plate_number', 'like', '%' . $request->plate_number . '%');
        }

        $cars = $query->get();

        return view('dashboard.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'brand' => ['required'],
            'model' => ['required'],
            'plate_number' => ['required'],
            'quantity' => ['required', 'numeric'],
            'price' => ['required', 'numeric'],
            'image_url' => ['required']
        ]);

        $imagePath = $request->file('image_url')->store('cars', 'public');

        Car::create([
            'brand' => $request->brand,
            'model' => $request->model,
            'plate_number' => $request->plate_number,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'image_url' => $imagePath,
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Data mobil berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
