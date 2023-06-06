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
        <h3>Menambahkan Data Kamar</h3>
    </div><!-- /.col -->
    <div class="row justify-content-center">
      <div class="col-8">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('postKamar ') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kode Kamar</label>
              <input type="text" name="id_kode_kamar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tarif Layanan</label>
              <input type="text" name="Tarif_layanan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Fasilitas</label>
              <input type="text" name="Fasilitas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
      </div>
    </div>
     
</div>

@endsection