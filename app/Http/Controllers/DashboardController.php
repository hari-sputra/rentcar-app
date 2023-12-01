<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        $cars = $query->paginate(10);

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
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::findOrFail($id);
        return view('dashboard.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $car = Car::findOrFail($id);
        if ($car) {
            $request->validate([
                'brand' => ['required'],
                'model' => ['required'],
                'plate_number' => ['required'],
                'quantity' => ['required', 'numeric'],
                'price' => ['required', 'numeric'],
            ]);

            $image = null;
            if ($request->file('image_url')) {
                Storage::disk('public')->delete($car->image_url);
                $image = $request->file('image_url')->store('cars', 'public');
            } else {
                $image = $request->input('current_image');
            }

            $car->update([
                'brand' => $request->brand,
                'model' => $request->model,
                'plate_number' => $request->plate_number,
                'quantity' => $request->quantity,
                'price' => $request->price,
                'image_url' => $image,
            ]);
        }

        return redirect()->route('dashboard.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::findOrFail($id);
        if ($car) {
            Storage::disk('public')->delete($car->image_url);
            $car->delete();
        }

        return redirect()->route('dashboard.index');
    }
}
