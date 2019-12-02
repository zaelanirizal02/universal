<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Laravel\Uks;
use Laravel\User;

class UksController extends Controller
{
    public function index()
    {
      $uks = Uks::All();
      return view('uks/home')->with('ukss', $uks);
    }

    public function create()
    {
      return view('uks/create');
    }

    public function show($id)
    {
      $uks = Uks::find($id);

      if(!$uks)
      dd('Halaman tidak ditemukan');

      return view ('uks/single',['uks'=>$id,'uks'=>$uks]);
    }


    public function store(Request $req)
    {
      $uks = new Uks;
      $uks->nama_uks = $req->nama_uks;
      $uks->isi_uks = $req->isi_uks;
      $file = $req->file('gambar_uks');
      $ext = $file->getClientOriginalExtension();
      $newName = rand(100000,1001238912).".".$ext;
      $file->move('img_uks',$newName);
      $uks->gambar_uks = $newName;
      $uks->save();

      return redirect('/dashboard/uks');
    }

    public function edit($id)
    {
      $uks = Uks::find($id);

      if (!$uks)
      dd('Halaman tidak tersedia ');

      return view ('uks/edit', ['uks'=>$id, 'uks'=>$uks]);
    }


    public function update(Request $req, $id)
    {
      $uks = Uks::find($id);

      $uks->update([
        'nama_uks' => $req->nama_uks,
        'isi_uks' => $req->isi_uks,
        'gambar_uks' => $req->gambar_uks,
      ]);

      return redirect()->back();
    }


    public function destroy($id)
    {
       $uks= Uks::find($id);
       $uks->delete();
       return redirect('uks');
    }
}
