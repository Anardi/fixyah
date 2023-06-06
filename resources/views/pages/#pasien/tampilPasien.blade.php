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
          <form action="{{ route('updatePasien',$id_kode_pasien) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kode Pasien</label>
              <input type="text" name="id_kode_pasien" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ={{ $data_pasien->id_kode_pasien }}>
            </div>
            {{-- <div class="mb-3">
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
            </div> --}}
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Pasien</label>
              <input type="text" name="Nama_pasien" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ={{ $data_pasien->Nama_pasien }}>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Alamat Pasien</label>
              <input type="text" name="Alamat_Pasien" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ={{ $data_pasien->Alamat_Pasien }}>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Umur Pasien</label>
                <input type="text" name="Umur_pasien" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ={{ $data_pasien->Umur_pasien }}>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                <input type="text" name="Jenis_kelamin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ={{ $data_pasien->Jenis_kelamin }}>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Golongan darah</label>
                <input type="text" name="gol_darah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ={{ $data_pasien->gol_darah }}>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
      </div>
    </div>
</div>

@endsection