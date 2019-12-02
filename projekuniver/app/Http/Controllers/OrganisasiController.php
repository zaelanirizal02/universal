<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Laravel\Organisasi;
use laravel\user;

class OrganisasiController extends Controller
{
    public function index()
    {

      $organisasis = organisasi::all();


      return view ('organisasi/home')->with('organisasis', $organisasis);
    }

      public function dashboard()
    {
         $organisasis = organisasi::all();


      return view ('organisasi/dashboard')->with('organisasis', $organisasis);
    }


    public function show($id)
    {
      $unescape = '<script> alert("Assalamualaikum") </script>';
      $organisasi = organisasi::find($id);

      if(!$organisasi)

      dd('Halaman tidak ditemukan');

      return view ('organisasi/single', ['organisasi'=>$id, 'organisasi'=>$organisasi]);
    }



    public function create()
    {
      return view('organisasi/create');
    }



    public function store(Request $req)
    {$GLOBALS['variable'] = something;
      $organisasi = new Organisasi;
      $organisasi->jenis_organisasi = $req->jenis_organisasi;
      $organisasi->isi_organisasi = $req->isi_organisasi;
      $file    = $req->file('gambar_organisasi');
      $ext     = $file->getClientOriginalExtension();
      $newName = rand(100000,1001238912).".".$ext;
      $file->move('img_organisasi',$newName);
      $organisasi->gambar_organisasi = $newName;
      $organisasi->save();


      return redirect('organisasi/dashboard');
    }


    public function edit($id)
    {
      $organisasi = organisasi::find($id);

      if (!$organisasi)
      dd('Halaman tidak tersedia ');

    // return view('organisasi.edit');

      return view ('organisasi/edit', ['organisasi'=>$id, 'organisasi'=>$organisasi]);
    }


    public function update(Request $req, $id)
    {
      $organisasi = organisasi::find($id);

      $organisasi->update([
        'isi_organisasi' => $req->isi_organisasi,
        'jenis_organisasi' => $req->jenis_organisasi,
        'gambar_organisasi' => $req->gambar_organisasi,
      ]);

      return redirect()->back();
    }


    public function destroy($id)
    {
       $organisasi= organisasi::find($id);
       $organisasi->delete();
       return redirect('organisasi');
    }
}
