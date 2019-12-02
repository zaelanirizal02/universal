<!DOCTYPE html>
@extends('layouts.master')

@section('title', 'universal | home')

<div class="container"style="margin-left:100px; padding-top:100px">



  <div class="text"style="border-box">
    <h1>{{$santri->nama_santri}}</h1>
    <td>{{$santri->jk_santri}}</td>
    <td>{{$santri->angkatan_santri}}</td>
    <td>{{$santri->kota_santri}}</td>
  </div>
</div>





@section('content')
<div class="container">
  <h1 class="text-center">Data Santri</h1
  <hr>

  <a href="/santri/create" class="btn btn-info">Create</a>

  <table class="table table-striped table-bordered">
  <thead class="warning">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Angkatan</th>
      <th>Asal</th>
      <th>action</th>
    </tr>
  </thead>
  <tbody>
    {{!$no=1}}

    <tr>
      <td>{{$no++}}</td>
      <td>
        <a href="{{ route('link', $santri->id) }}">{{$santri->nama_santri}}</a>
      </td>
      <td>{{$santri->jk_santri}}</td>
      <td>{{$santri->angkatan_santri}}</td>
      <td>{{$santri->kota_santri}}</td>
      <td>
        <form style="float:left" action="/santri/{{$santri->id}}" method="post">
        <input class="btn btn-danger" type="submit" name="submit" value="delete">
        <input type="hidden" name="_method" value="DELETE">
        {{ csrf_field() }}

      </form>

      <span style="padding:5px">|</span>
      <a class="btn btn-success" href="{{route('ngedit', $santri->id)}}">EDIT</a>
      </td>


    </tr>

  
  </tbody>
  </table>
</div>




@endsection
