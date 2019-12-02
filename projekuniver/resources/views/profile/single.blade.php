<!DOCTYPE html>
@extends('layouts.master')

@section('title', 'universal | home')

<div class="container"style="margin-left:100px; padding-top:100px">



  <div class="text"style="border-box">
    <h1>{{$profile->nama_profile}}</h1>
    <td>{{$profile->isi_profile}}</td>
  </div>
</div>





@section('content')
<div class="container">
  <h1 class="text-center">Data Profile</h1
  <hr>

  <a href="/profile/create" class="btn btn-info">Create</a>

  <table class="table table-striped table-bordered">
  <thead class="warning">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Deskripsi Profile</th>
    </tr>
  </thead>
  <tbody>
    {{!$no=1}}

    <tr>
      <td>{{$no++}}</td>
      <td>
        <a href="{{ route('link', $profile->id) }}">{{$profile->nama_profile}}</a>
      </td>
      <td>{{$profile->isi_profile}}</td>
      <td>
        <form style="float:left" action="/profile/{{$profile->id}}" method="post">
        <input class="btn btn-danger" type="submit" name="submit" value="delete">
        <input type="hidden" name="_method" value="DELETE">
        {{ csrf_field() }}

      </form>

      <span style="padding:5px">|</span>
      <a class="btn btn-success" href="{{route('ngedit', $profile->id)}}">EDIT</a>
      </td>


    </tr>


  </tbody>
  </table>
</div>




@endsection
