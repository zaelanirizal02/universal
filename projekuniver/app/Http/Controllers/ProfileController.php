<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Laravel\Profile;
use Laravel\User;

class ProfileController extends Controller
{
    public function index()
    {
      $profles = Profile::All();
      return view('profile/home')->with('profiles', $profiles);
    }

    public function create()
    {
      return view('profile/create');
    }

    public function show($id)
    {
      $profile = Profile::find($id);

      if(!$profile)
      dd('Halaman tidak ditemukan');

      return view ('profile/single',['profile'=>$id,'profile'=>$profile]);
    }


    public function store(Request $req)
    {
      $profile = new Profile;
      $profile->nama_profile = $req->nama_profile;
      $profile->isi_profile = $req->isi_profile;
      $file = $req->file('gambar_profile');
      $ext = $file->getClientOriginalExtension();
      $newName = rand(100000,1001238912).".".$ext;
      $file->move('img_profile',$newName);
      $profile->gambar_profile = $newName;
      $profile->save();

      return redirect('profile');
    }

    public function edit($id)
    {
      $profile = Profile::find($id);

      if (!$profile)
      dd('Halaman tidak tersedia ');

      return view ('profile/edit', ['profile'=>$id, 'profile'=>$profile]);
    }


    public function update(Request $req, $id)
    {
      $profile = Profile::find($id);

      $profile->update([
        'nama_profile' => $req->nama_profile,
        'isi_profile' => $req->isi_profile,
        'gambar_profile' => $req->gambar_profile,
      ]);

      return redirect()->back();
    }


    public function destroy($id)
    {
       $profile= Profile::find($id);
       $profile->delete();
       return redirect('profile');
    }
}
