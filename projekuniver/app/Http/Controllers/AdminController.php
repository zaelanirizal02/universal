<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Laravel\Artikel;
use Laravel\Organisasi;
use Laravel\User;
use Laravel\Santri;
use Laravel\Uks;
use Laravel\Profile;
class AdminController extends Controller
{
    public function index()
    {
      $artikels = Artikel::all();
      $organisasis = Organisasi::all();

      return view ('admin.home', compact('artikels','organisasis'));
    }

    public function artikel()
    {

      $artikels = Artikel::all();

      return view ('blog.dashboard',['artikels'=>$artikels]);
    }

    public function organisasi()
    {

      $organisasis = Organisasi::all();

      return view ('admin.dashboard',['organisasis'=>$organisasis]);
    }

    public function santri()
    {
      $santris = Santri::all();
      return view ('santri.dashboard',['santris'=>$santris]);
    }

    public function uks()
    {
      $ukss = uks::all();
      return view ('admin.uks',['ukss'=>$ukss]);
    }

    public function profile()
    {
      $profiles = profile::all();
      return view ('admin.profile',['profiles'=>$profiles]);
    }


}
