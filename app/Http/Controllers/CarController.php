<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Reservation;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'cars' => Car::all(),
            'reservations' => Reservation::where('status', '!=', 'completed')->get(),
        ];

        return view('pages.admin.dashboard', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $data['image'] = $request->file('image')->store('assets/car', 'public');

        Car::create($data);

        return redirect()->route('car.dashboard');
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
        $data = Car::findOrFail($id);

        return view('pages.admin.car.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $car = Car::findOrFail($id);

        $data = $request->all();

        if ($request->hasFile('image')) {
            unlink(storage_path('app/public/' . $car->image));
            $data['image'] = $request->file('image')->store('assets/car', 'public');
        } else {
            $data['image'] = $car->image;
        }

        $car->update($data);

        return redirect()->route('car.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Car::findOrFail($id);

        unlink(storage_path('app/public/' . $data->image));

        $data->delete();

        return redirect()->route('car.dashboard');
    }

    public function reservation($id, $trigger)
    {
        $reservation = Reservation::findOrFail($id);
        $car = Car::findOrFail($reservation->car_id);

        if ($trigger == 1) {
            $reservation->status = 'on_the_road';
        } else {
            $reservation->status = 'completed';

            $car->stock = $car->stock + 1;

            $car->save();
        }

        $reservation->save();

        return redirect()->route('car.dashboard');
    }

    public function reject($id)
    {
        $reservation = Reservation::findOrFail($id);
        $car = Car::findOrFail($reservation->car_id);

        $car->stock = $car->stock + 1;

        $reservation->delete();
        $car->save();

        return redirect()->route('car.dashboard');
    }
}
