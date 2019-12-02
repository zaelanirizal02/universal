@extends('layout_dashboard.admin')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Artikel</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Blank Page</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Title</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
      <div class="container"style="padding-top:100px">
        <h1 class="text-center">Daftar Artikel</h1
        <hr>

        <a href="/blog/create" class="btn btn-info">Create</a>

        <table class="table table-striped table-bordered">
        <thead class="warning">
          <tr>
            <th>Nama</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Gambar</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
          {{!$no=1}}
          @foreach($artikels as $artikel)
          <tr>
            <td>{{$no++}}</td>
            <td><a href="{{ route('link', $artikel->id) }}">{{$artikel->nama_artikel}}</a>
            </td>
            <td>{{$artikel->jenis_artikel}}</td>
            <td>{{$artikel->gambar_artikel}}</td>
             <td>
              <form style="float:left" action="/artikel/{{$artikel->id}}" method="post">
              <input class="btn btn-danger" type="submit" name="submit" value="delete">
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}

            </form>

            <span style="padding:5px">|</span>
            <a class="btn btn-success" href="{{ route('ngeditartikel', $artikel->id) }}">Edit</a>
            </td>


          </tr>

            @endforeach
        </tbody>
        </table>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Footer
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->

@endsection
