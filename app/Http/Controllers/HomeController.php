<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biens;

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
        $biens = Biens::latest()->get();  
        return view('home', ['biens' => $biens]);
    }
}
