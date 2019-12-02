@extends('layouts.master')

@section('title', 'Edit Profile')

@section('content')
<div class="jumbotron jumbotron-fluid" style="background-color:#d1d1d1">
  <div class="container">
    <h1 class="display-4 text-center pt-4 font-weight-bold">DATA PROFILE</h1>
      <h3 class="lead text-center font-weight-bold pt-0">Pondok Pesantren Mahasiswa Universal</h3>
  </div>
</div>

<h1 class="text-center">Edit Profile</h1>
<div class="container" style=" width: 900px; height:600px">
  <form action="/profile/{{$profile->id}}" method="post" style="padding:10px; border:1px solid black">
  <input type="hidden" name="_method" value="PUT">


  <div class="form-group row">
    <label for="nama_profile" class="col-sm-3 col-form-label">Nama Profile</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="nama_profile" id="nama_profile" value="{{$profile->nama_profile}}" >
    </div>
  </div>

  <div class="form-group row">
    <label for="isi_profile" class="col-sm-3 col-form-label">Deskripsi Profile</label>
      <div class="col-sm-9">
        <textarea class="form-control" name="isi_profile" id="isi_profile" rows="5">{{ $profile->isi_profile }}</textarea>
    </div>
  </div>

  <div class="form-group row mt-4">
     <label for="gambar_profile" class="col-sm-3 col-form-label">Upload Photo :</label>
     <div class="col-sm-9">
       <input type="file" class="form-control" name="gambar_profile" id="gambar_profile" style="width:300px;height:50px" value="">
  {{$profile->gambar_profile}}

     </div>
  </div>



 <button type="submit" class="btn btn-default" style="border:2px">SIMPAN</button>
{{ csrf_field() }}

</div>

   </form>

  @endsection
