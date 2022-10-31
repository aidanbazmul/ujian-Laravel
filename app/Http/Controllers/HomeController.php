<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function store(Request $request)
    {
    $this->validate($request, [
    'name' => 'required|unique|max:255',
    'email' => 'required',
    'password' => 'required|unique|max:255',
    'password_confirmation' => 'required',
    ]);
    return view('auth.login');
    }
}
