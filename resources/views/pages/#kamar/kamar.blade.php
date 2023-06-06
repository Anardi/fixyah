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
                          Data Kamar
                        </h3>
                        <div class="card-tools">
                          <a href="{{ route('formKamar') }}" class="btn btn-outline-success btn-sm">Tambah Data Kamar</a> 
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
                                <th scope="col">Nomor</th>
                                <th scope="col">Kode Kamar</th> 
                                <th scope="col">Tarif Layanan</th>
                                <th scope="col">Fasilitas</th>   
                                <th scope="col">Aksi</th>  
                             </tr>
                           </thead>
                            <tbody>
                              @php
                              $no = 1;   
                              @endphp
                              @foreach ($kamar as $key)
                              <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $key->id_kode_kamar }}</td>
                                <td>{{ $key->Tarif_layanan }}</td>
                                <td>{{ $key->Fasilitas }}</td>
                                <td>
                                  <a href="{{ route('editKamar', $key->id_kode_kamar) }}" class="btn btn-info btn-sm mx-1" >
                                    <i class="fas fa-edit"></i>
                                  <a href="{{ route('deleteKamar', $key->id_kode_kamar) }}" onclick="return confirm('Apakah Yakin Mau Dihapus?')" class="btn btn-danger btn-sm">
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