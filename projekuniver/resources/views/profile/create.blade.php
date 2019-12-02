@extends('layouts.master')

@section('title', 'create profile')

@section('content')


<div class="" style="padding-top:100px">


<h1 class="text-center">BUAT PROFILE</h1>
<div class="container" style=" width: 500px; height:300px">
<form action="/profile" method="post" enctype="multipart/form-data" style="padding:10px; border:1px solid black">



    <div class="form-group">
    <label for="nama_profile">Nama profile :</label>
    <input type="text" class="form-control" name="nama_profile"id="nama_profile">
  </div>

    <div class="form-group">
    <label for="gambar_profile">Gambar profile :</label>
    <input type="file" class="form-control" name="gambar_profile"id="gambar_profile">
  </div>

    <div class="form-group">
    <label for="isi_profile">Isi profile :</label>
    <textarea name="isi_profile" rows="5" cols="45"></textarea>
  </div>

        <button type="submit" class="btn btn-primary" style="border: 2px">Create</button>
        {{ csrf_field() }}
    </form>
  </div>
  </div>

    @endsection
