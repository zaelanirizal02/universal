@extends('layout_dashboard.admin')

@section('title', 'universal | home')


@section('content')
  <div class="container">
    <h1 class="display-4 text-center pt-4 font-weight-bold">DATA SANTRI</h1>
      <h3 class="lead text-center font-weight-bold pt-0">Pondok Pesantren Mahasiswa Universal</h3>
  </div>

<div class="container">

  <a href="/santri/create" class="btn btn-info">Create</a>
  <a href="/santri/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>

  {{-- notifikasi form validasi --}}
		@if ($errors->has('file'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('file') }}</strong>
		</span>
		@endif

		{{-- notifikasi sukses --}}
		@if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>{{ $sukses }}</strong>
		</div>
		@endif

		<button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
			IMPORT EXCEL
		</button>

		<!-- Import Excel -->
		<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/santri/import_excel" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						</div>
						<div class="modal-body">

							{{ csrf_field() }}

							<label>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Import</button>
						</div>
					</div>
				</form>
			</div>
		</div>





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
    @foreach($santris as $santri)
    <tr>
      <td>{{$no++}}</td>
      <td>{{$santri->nama_santri}}</td>
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
      <a class="btn btn-success" href="{{route('ngeditsantri', $santri->id)}}">EDIT</a>
      </td>


    </tr>

      @endforeach
  </tbody>
  </table>
</div>




@endsection
