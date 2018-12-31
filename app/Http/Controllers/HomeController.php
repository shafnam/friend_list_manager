<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Friend;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $friends = Friend::where('user_id', auth()->user()->id)->orderBy('created_at','desc')->get();
        return view('home')->with('friends', $friends);
    }
}
