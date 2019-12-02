@extends('layouts.master')

@section('title', 'create organisasi')

@section('content')


<div class="" style="padding-top:100px">


<h1 class="text-center">BUAT UKS</h1>
<div class="container" style=" width: 500px; height:300px">
<form action="/uks" method="post" enctype="multipart/form-data" style="padding:10px; border:1px solid black">



    <div class="form-group">
    <label for="nama_uks">Nama UKS :</label>
    <input type="text" class="form-control" name="nama_uks"id="nama_uks">
  </div>

    <div class="form-group">
    <label for="gambar_uks">Gambar UKS :</label>
    <input type="file" class="form-control" name="gambar_uks"id="gambar_uks">
  </div>

    <div class="form-group">
    <label for="isi_uks">Isi UKS :</label>
    <textarea name="isi_uks" rows="5" cols="45"></textarea>
  </div>

        <button type="submit" class="btn btn-primary" style="border: 2px">Create</button>
        {{ csrf_field() }}
    </form>
  </div>
  </div>

    @endsection
