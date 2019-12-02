@extends('layouts.master')

@section('title', 'universal | home')




@section('content')
<div class="container" style="padding-top:100px">
<h1> Data UKS yang terdaftar</h1>

@foreach($ukss as $uks)
<br>

<li>
   <a href="{{ route('link', $uks->id) }}">{{$uks->nama_uks}}</a>
    
</li>
@endforeach
@endsection
</div>
