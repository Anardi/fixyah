@extends('layout.admin')
@section('content')
<section class="content">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="container">
          <!--
           <div class="row g-3 align-items-center mt-2">
             <div class="col-auto">
               <label for="inputPassword6" class="col-form-label">Cari Nama Dokter</label>
             </div> 
               <div class="col-auto">
                  <input type="search" id="inputPassword6" class="form-control" aria-labelledby="passwordHelpInline">
               </div>
           </div>-->
             <div class="row">
              <a href ="/exportgurupdf" class="btn btn-outline-info mb-3">Export PDF</a>
                 <div class="col-lg-12">
                   <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">
                        Pemeriksaan Dokter
                      </h3>
                      <div class="card-tools">
                       <a href="{{ route('formPemeriksaan') }}" class="btn btn-outline-success btn-sm">Tambah Data Pemeriksaan</a> 
                         <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                           <i class="fas fa-minus"></i>
                         </button>
                     </div>
                    </div>
                     <div class="card-body">
                       <div class="box-body table-responsive no-padding">
                         <table id="example1" class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                <th scope="col">Nomer</th>
                                <th scope="col">Kode Pemeriksaan</th> 
                                <th scope="col">Tanggal Periksa</th>   
                                <th scope="col">Keluhan</th>   
                                <th scope="col">Keterangan</th>   
                                <th scope="col">Biaya pemeriksaan</th>   
                                <th scope="col">Aksi</th>   
                              </tr>
                           </thead>
                           <tbody>
                            @php
                            $no = 1;   
                            @endphp
                            @foreach ($pemeriksaan as $key)
                            <tr>
                              <th scope="row">{{ $no++ }}</th>
                              <td>{{ $key->id_kode_pemeriksaan }}</td>
                              <td>{{ $key->tgl_periksa }}</td>
                              <td>{{ $key->Keluhan }}</td>
                              <td>{{ $key->Keterangan }}</td>
                              <td>{{ $key->Biaya_pemeriksaan }}</td>
                              
                              <td>
                                  <a href="#" class="btn btn-info btn-sm mx-1" >
                                    <i class="fas fa-edit"></i>
                                  <a href="#" onclick="return confirm('Apakah Yakin Mau Dihapus?')" class="btn btn-danger btn-sm">
                                      <i class="fas fa-trash-alt"></i>
                              </td>
                            @endforeach
                             </tbody>
                           </table>
                       </div>
                     </div>
                   </div>
                 </div>
             </div>
         </div>
        <div class="row">
          <div class="col-sm-12">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>
</section>
@endsection