<!DOCTYPE html>
@extends('layouts.master')
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  font-size: 17px;
}

.container {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 70%;
  padding: 20px;
}
</style>


<div class="container"style="margin-left:100px; padding-top:100px">


  <img src="/img_artikel/{{$artikel->gambar_artikel}}" style="width:50%;height:400px">
  <div class="text"style="border-box">
    <h1>{{$artikel->nama_artikel}}</h1>
    <p>{{$artikel->isi_artikel}}</p>
  </div>
</div>
