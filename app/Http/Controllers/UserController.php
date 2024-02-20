<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

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
        $data = Car::findOrFail($id);

        return view('pages.user.car', compact('data'));
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
