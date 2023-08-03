<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\shift;

class WorkerDashboardController extends Controller
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
        // return view('dashboard');
        $shifts = shift::all(); // Retrieve all records from the "shifts" table
        
    
        return view('dashboard', ['shifts' => $shifts]);
        
    }
    public function addShift(){
        return view('addShift');
    }
}
