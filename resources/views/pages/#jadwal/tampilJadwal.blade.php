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
          <form action="{{ route('updateJadwal',$id_kode_jadwal) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kode Jadwal</label>
              <input type="text" name="id_kode_jadwal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ={{ $data_jadwal->id_kode_jadwal }}>
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
              <label for="exampleInputEmail1" class="form-label">Hari</label>
              <input type="text" name="hari" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ={{ $data_jadwal->hari }}>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Jam Mulai</label>
              <input type="text" name="jam_mulai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ={{ $data_jadwal->jam_mulai }}>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jam Selesai</label>
                <input type="text" name="jam_selesai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ={{ $data_jadwal->jam_selesai }}>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
      </div>
    </div>
</div>

@endsection