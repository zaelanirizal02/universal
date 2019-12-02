@extends('layouts.master')

@section('title', 'Edit Santri')

@section('content')
<div class="jumbotron jumbotron-fluid" style="background-color:#d1d1d1">
  <div class="container">
    <h1 class="display-4 text-center pt-4 font-weight-bold">DATA UNIT KEGIATAN SANTRI</h1>
      <h3 class="lead text-center font-weight-bold pt-0">Pondok Pesantren Mahasiswa Universal</h3>
  </div>
</div>

<h1 class="text-center">Edit UKS</h1>
<div class="container" style=" width: 900px; height:600px">
  <form action="/uks/{{$uks->id}}" method="post" style="padding:10px; border:1px solid black">
  <input type="hidden" name="_method" value="PUT">


  <div class="form-group row">
    <label for="nama_uks" class="col-sm-3 col-form-label">Nama UKS</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="nama_uks" id="nama_uks" value="{{$uks->nama_uks}}" >
    </div>
  </div>

  <div class="form-group row">
    <label for="isi_uks" class="col-sm-3 col-form-label">Deskripsi UKS</label>
      <div class="col-sm-9">
        <textarea class="form-control" name="isi_uks" id="isi_uks" rows="5">{{ $uks->isi_uks }}</textarea>
    </div>
  </div>

  <div class="form-group row mt-4">
     <label for="gambar_uks" class="col-sm-3 col-form-label">Upload Photo :</label>
     <div class="col-sm-9">
       <input type="file" class="form-control" name="gambar_uks" id="gambar_uks" style="width:300px;height:50px" value="">
  {{$uks->gambar_uks}}

     </div>
  </div>



 <button type="submit" class="btn btn-default" style="border:2px">SIMPAN</button>
{{ csrf_field() }}

</div>

   </form>

  @endsection
