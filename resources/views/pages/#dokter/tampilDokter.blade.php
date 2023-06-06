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
        <h3>Edit Data Dokter</h3>
    </div><!-- /.col -->
    <div class="row justify-content-center">
      <div class="col-8">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('updateDokter',$id_dokter) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">ID Dokter</label>
              <input type="text" name="id_dokter" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ={{ $data_dokter->$id_dokter }}>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Pasien</label>
                <div class="">
                  <select class="form-select" aria-label="Default select example" name="kode_pasien">
                    @foreach ($pasien as $data)
                        @if (old('kode_pasien') == $data->kode_pasien)
                            <option value="{{ $data->kode_pasien }}" selected>{{ $data->kode_pasien }}</option>
                        @else
                            <option value="{{ $data->kode_pasien }}">{{ $data->kode_pasien }}</option>
                        @endif
                    @endforeach
                  </select>
                </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Dokter</label>
              <input type="text" name="Nama_Dokter" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ={{ $data_dokter->Nama_Dokter }}>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Jadwal Dokter</label>
              <input type="text" name="Jadwal_Dokter" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ={{ $data_dokter->Jadwal_Dokter }}>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Spesialis</label>
                <input type="text" name="Spesialis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ={{ $data_dokter->Spesialis }}>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
      </div>
    </div>
</div>

@endsection