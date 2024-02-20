<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.user.index');
    }

    public function cars()
    {
        return view('pages.user.cars');
    }

    public function car()
    {
        return view('pages.user.car');
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
