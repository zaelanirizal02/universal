@extends('layouts.master')

@section('title', 'universal | home')




@section('content')
<div class="container" style="padding-top:100px">
<h1> Data Artikel yang terdaftar</h1>

@foreach($artikels as $artikel)
<br>

<li>
   <a href="{{ route('link', $artikel->id) }}">{{$artikel->nama_artikel}}</a>
     <form action="/blog/{{$artikel->id}}" method="post"><br>

     </form>
</li>
@endforeach
@endsection
</div>
