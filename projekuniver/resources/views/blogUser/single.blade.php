<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Artikel-{{$blog}}</title>
  </head>
  <body>
    <h1>Artikel Santri</h1>

    <img src="/img_artikel/{{$artikel->gambar_artikel}}" class="Responsive image">
    {{$artikel->nama_artikel}}
    {{$artikel->jenis_artikel}}
    {{$artikel->isi_artikel}}


  </body>
</html>
