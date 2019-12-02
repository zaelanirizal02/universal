@extends('layouts.master')

@section('title', 'universal | home')


<div class="container" style="padding-top:100px">

@section('content')
<div class="container">
  <center><h1 style="text-center">Artikel yang terdaftar</h1></center>



@foreach($artikels as $artikel)

<!-- <li>
   <a href="{{ route('link', $artikel->id) }}">{{$artikel->nama_artikel}}</a>
     <form action="/blog/{{$artikel->id}}" method="post"><br>
       <input type="submit" name="submit" value="delete">
       {{ csrf_field() }}
       <input type="hidden" name="_method" value="DELETE">
     </form>
</li> -->



   <a href="{{ route('linkartikel', $artikel->id) }}" style="width:300px; height: 300px;border:1px solid black;float:left;margin:20px">

     <img src="img_artikel/{{$artikel->gambar_artikel}}" alt="Snow" style="width:100%; height:100%">
     <div class=""style="margin">
       {{$artikel->nama_artikel}}
     </div>


   </a>


@endforeach



@endsection
</div>
</div>
