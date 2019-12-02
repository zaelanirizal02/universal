<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;

class DasboardController extends Controller
{
    <?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Laravel\Artikel;
use Laravel\User;

class BlogController extends Controller
{
    public function index()
    {

      $artikels = Artikel::all();


      return view ('dasboard/home')->with('artikels', $artikels);
    }

    public function show($id)
    {
      $unescape = '<script> alert("Assalamualaikum") </script>';
      $artikel = Artikel::find($id);

      if(!$artikel)

      dd('Halaman tidak ditemukan');

      return view ('dasboard/single', ['dasboard'=>$id, 'artikel'=>$artikel]);
    }



    public function create()
    {
      return view('dasboard/create');
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


      return redirect('dasboard');
    }


    public function edit($id)
    {
      $artikel = Artikel::find($id);

      if (!$artikel)
      dd('Halaman tidak tersedia ');

      return view ('dasboard/edit', ['dasboard'=>$id, 'artikel'=>$artikel]);
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
       return redirect('dasboard');
    }
}

}
