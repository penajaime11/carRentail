<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return Car::with('brand')->get();
    }

    public function store(Request $request)
    {
        return Car::create($request->all());
    }

    public function show($id)
    {
        return Car::with('brand')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->update($request->all());
        return $car;
    }

    public function destroy($id)
    {
        Car::destroy($id);
        return response()->noContent();
    }

    // 🔥 punto 4
    public function updateStatus(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->status = $request->status;
        $car->save();

        return $car;
    }
}