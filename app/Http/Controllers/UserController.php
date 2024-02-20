<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $data = Car::all();

        return view('pages.user.index', compact('data'));
    }

    public function cars()
    {
        $data = Car::all();

        return view('pages.user.cars', compact('data'));
    }

    public function car($id)
    {
        $user_id = Auth::id();

        $data = [
            'user' => User::find($user_id),
            'car' => Car::findOrFail($id),
            'reservation' => Reservation::where([['user_id', $user_id], ['car_id', $id]])->orderBy('created_at', 'desc')->first()
        ];

        return view('pages.user.car', compact('data'));
    }

    public function reserve(Request $request, $id)
    {
        $user_id = Auth::id();

        $reservation = new Reservation();
        $car = Car::findOrFail($id);

        $reservation->user_id = $user_id;
        $reservation->car_id = $id;
        $reservation->start_date = $request->start_date;
        $reservation->end_date = $request->end_date;
        $reservation->proof_of_payment = $request->file('proof')->store('assets/payment', 'public');
        $reservation->payment_status = 'pending';
        $reservation->status = 'pending';

        $car->stock = $car->stock - 1;

        $reservation->save();
        $car->save();

        return redirect()->route('success');
    }

    public function contact()
    {
        return view('pages.user.contact');
    }

    public function success()
    {
        return view('pages.user.success');
    }

    public function transaction()
    {
        return view('pages.user.transaction');
    }
}
