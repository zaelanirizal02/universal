<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Artikel;

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
      $artikels = Artikel::all();

      return view ('home')->with('artikels', $artikels);
    }
}
