<!DOCTYPE html>
@extends('layouts.master')

@section('title', 'universal | home')

<div class="container"style="margin-left:100px; padding-top:100px">



  <div class="text"style="border-box">
    <h1>{{$uks->nama_uks}}</h1>
    <td>{{$uks->isi_uks}}</td>
  </div>
</div>





@section('content')
<div class="container">
  <h1 class="text-center">Data UKS</h1
  <hr>

  <a href="/uks/create" class="btn btn-info">Create</a>

  <table class="table table-striped table-bordered">
  <thead class="warning">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Deskripsi UKS</th>
    </tr>
  </thead>
  <tbody>
    {{!$no=1}}

    <tr>
      <td>{{$no++}}</td>
      <td>
        <a href="{{ route('link', $uks->id) }}">{{$uks->nama_uks}}</a>
      </td>
      <td>{{$uks->isi_uks}}</td>
      <td>
        <form style="float:left" action="/uks/{{$uks->id}}" method="post">
        <input class="btn btn-danger" type="submit" name="submit" value="delete">
        <input type="hidden" name="_method" value="DELETE">
        {{ csrf_field() }}

      </form>

      <span style="padding:5px">|</span>
      <a class="btn btn-success" href="{{route('ngedit', $uks->id)}}">EDIT</a>
      </td>


    </tr>


  </tbody>
  </table>
</div>




@endsection
