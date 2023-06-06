@extends('Layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  {{-- <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6 justify-content-center">
                  <h1>Menambahkan Data Pasien</h1>
              </div><!-- /.col -->
          </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div> --}}
  <div class="container">
    <div class="text-center">
        <h3>Menambahkan Data Pasien</h3>
    </div><!-- /.col -->
    <div class="row justify-content-center">
      <div class="col-8">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('postPasien') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kode Pasien</label>
              <input type="text" name="id_kode_pasien" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Pasien</label>
              <input type="text" name="Nama_pasien" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Alamat Pasien</label>
              <input type="text" name="Alamat_Pasien" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Umur Pasien</label>
                <input type="text" name="Umur_pasien" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
              <input type="text" name="Jenis_kelamin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Golongan Darah</label>
              <input type="text" name="gol_darah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
      </div>
    </div>
     
</div>

@endsection