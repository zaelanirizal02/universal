<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Laravel\Artikel;
use Laravel\User;

class BlogUserController extends Controller
{
    public function index()
    {
      $artikels = Artikel::all();

      return view ('blogUser/home')->with('artikels', $artikels);
    }

    public function show($id)
    {
      $unescape = '<script> alert("Assalamualaikum") </script>';
      $artikel = Artikel::find($id);

      if(!$artikel)

      dd('Halaman tidak ditemukan');

      return view ('blogUser/single', ['blog'=>$id, 'artikel'=>$artikel]);
    }



    public function create()
    {
      return view('blogUser/create');
    }



    public function store(Request $req)
    {
      $artikel = new Artikel;
      $artikel->nama_artikel = $req->nama_artikel;
      $artikel->isi_artikel = $req->isi_artikel;
      $artikel->jenis_artikel = $req->jenis_artikel;
      $file    = $req->file('gambar_artikel');
      $ext     = $file->getClientOriginalExtension();
      $newName = rand(100000,1001238912).".".$ext;
      $file->move('img_artikel',$newName);
      $artikel->gambar_artikel = $newName;
      $artikel->save();


      return redirect('blog');
    }


    public function edit($id)
    {
      $artikel = Artikel::find($id);

      if (!$artikel)
      dd('Halaman tidak tersedia ');

      return view ('blogUser/edit', ['blog'=>$id, 'artikel'=>$artikel]);
    }


    public function update(Request $req, $id)
    {
      $artikel = Artikel::find($id);

      $artikel->update([
        'nama_artikel' => $req->nama_artikel,
        'isi_artikel' => $req->isi_artikel,
        'jenis_artikel' => $req->jenis_artikel,
        'gambar_artikel' => $req->gambar_artikel,
      ]);

      return redirect()->back();
    }


    public function destroy($id)
    {
       $artikel= Artikel::find($id);
       $artikel->delete();
       return redirect('blog');
    }
}
