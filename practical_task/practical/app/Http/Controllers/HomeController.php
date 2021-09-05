<?php

namespace App\Http\Controllers;

use App\Models\Job;
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
        $jobs = Job::all();
        return view('home',compact('jobs'));
    }

    public function jobform()
    {
        return view('jobform');
    }
}
