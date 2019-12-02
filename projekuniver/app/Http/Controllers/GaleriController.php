<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Laravel\Galeri;
use Laravel\User;

class BlogController extends Controller
{
    public function index()
    {

      $galeris = Galeri::all();


      return view ('galeri/home')->with('galeris', $galeris);
    }


    public function dasboard()
    {
         $galeris = Galeri::all();


      return view ('galeri/dashoard')->with('galeris', $galeris);
    }



    public function show($id)
    {
      $unescape = '<script> alert("Assalamualaikum") </script>';
      $galeri = Galeri::find($id);

      if(!$galeri)

      dd('Halaman tidak ditemukan');

      return view ('galeri/single', ['galeri'=>$id, 'galeri'=>$galeri]);
    }



    public function create()
    {
      return view('galeri/create');
    }



    public function store(Request $req)
    {
      $galeri = new Galeri;
      $galeri->nama_galeri = $req->nama_galeri;
      $galeri->isi_galeri = $req->isi_galeri;
      $galeri->jenis_galeri = $req->jenis_galeri;
      $file    = $req->file('gambar_galeri');
      $ext     = $file->getClientOriginalExtension();
      $newName = rand(100000,1001238912).".".$ext;
      $file->move('img_galeri',$newName);
      $galeri->gambar_galeri = $newName;
      $galeri->save();


      return redirect('dashboard/galeri');
    }


    public function edit($id)
    {
      $galeri = Galeri::find($id);

      if (!$galeri)
      dd('Halaman tidak tersedia ');

      return view ('galeri/edit', ['galeri'=>$id, 'galeri'=>$galeri]);
    }


    public function update(Request $req, $id)
    {
      $galeri = Galeri::find($id);

      $galeri->update([
        'nama_galeri' => $req->nama_galeri,
        'isi_galeri' => $req->isi_galeri,
        'jenis_galeri' => $req->jenis_galeri,
        'gambar_galeri' => $req->gambar_galeri,
      ]);

      return redirect()->back();
    }


    public function destroy($id)
    {
       $galeri= Galeri::find($id);
       $galeri->delete();
       return redirect('dashboard/galeri');
    }
}
