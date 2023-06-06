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
          <form action="{{ route('updateObat',$id_kode_obat) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kode Jadwal</label>
              <input type="text" name="id_kode_obat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ={{ $data_obat->id_kode_obat }}>
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
              <label for="exampleInputEmail1" class="form-label">Nama Obat</label>
              <input type="text" name="Nama_Obat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ={{ $data_obat->Nama_Obat }}>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Harga</label>
              <input type="text" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ={{ $data_obat->harga }}>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Stock Obat</label>
                <input type="text" name="stock" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ={{ $data_obat->stock }}>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ketarangan</label>
                <input type="text" name="Keterangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ={{ $data_obat->Keterangan }}>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
      </div>
    </div>
</div>

@endsection