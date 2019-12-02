@extends('layouts.master')

@section('title', 'create organisasi')

@section('content')


<div class="" style="padding-top:100px">


<h1 class="text-center">BUAT ORGANISASI</h1>
<div class="container" style=" width: 500px; height:300px">
<form action="/organisasi" method="post" enctype="multipart/form-data" style="padding:10px; border:1px solid black">



    <div class="form-group">
    <label for="jenis_organisasi">Jenis organisasi :</label>
    <input type="text" class="form-control" name="jenis_organisasi"id="jenis_organisasi">
  </div>

    <div class="form-group">
    <label for="gambar_organisasi">Gambar organisasi :</label>
    <input type="file" class="form-control" name="gambar_organisasi"id="gambar_organisasi">
  </div>

    <div class="form-group">
    <label for="isi_organisasi">Isi organisasi :</label>
    <textarea name="isi_organisasi" rows="5" cols="45"></textarea>
  </div>

        <button type="submit" class="btn btn-primary" style="border: 2px">Create</button>
        {{ csrf_field() }}
    </form>
  </div>
  </div>

    @endsection
