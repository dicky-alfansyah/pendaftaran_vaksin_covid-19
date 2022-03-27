@extends('layout/footer_admin')
@extends('layout/dashboard')
@section('title', 'Dashboard Admin')

<style class="text/css">
  .table-condensed {
    font-size: 11px;
  }
</style>


@section('dashboard')
<div class="content-wrapper">
  <div class="content-header">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-success card-outline">
              <div class="card-header">
                <div class="content-header text-center">
                  <span class="text- center fs-6"><b>DATA PENDAFTAR VAKSINASI</b></span>
                </div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <a href="{{('/dashboard/export-data')}}" type="button" class="btn btn-primary btn-sm">
                  <i class="nav-icon fa-solid fa-file-excel"></i>
                    Export
                  </a> 
                  <a href="{{url('/dashboard/delete-data-vaksin-status')}}" type="button" class="btn btn-danger btn-sm">
                  <i class="nav-icon fa-solid fa-trash-can"></i>
                    Clear Data
                  </a>      
                </div>
                <table class="table table-condensed table-responsive table-bordered table-hover text-nowrap">
                  <thead>
                    <tr>
                    <th class="text-center">No</th>
                      <th style="width: 100px">Nomor Registrasi</th>
                      <th style="width: 200px">Nama Lengkap</th>
                      <th style="width: 70px">Dosis Vaksin</th>
                      <th style="width: 100px">Jenis Vaksin</th>
                      <th style="width: 100px">Tanggal Lahir</th>
                      <th style="width: 100px">Nomor HP</th>
                      <th style="width: 330px">Alamat</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data_pendaftaran_vaksin as $jv)
                    <tr>
                      <td class="text-center" scope="row">{{$loop -> iteration}}</td>
                      <td>NR-AV-00{{$jv->id}}</td>
                      <td>{{$jv->nama_lengkap}}</td>
                      <td>{{$jv->dosis_vaksin}}</td>
                      <td>{{$jv->jenis_vaksin}}</td>
                      <td>{{Carbon\Carbon::parse($jv->tanggal_lahir)->translatedFormat('d-m-Y') }}</td>
                      <td>{{$jv->no_hp}}</td>
                      <td>{{$jv->alamat}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table><br>
                {{ $data_pendaftaran_vaksin->links() }}
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div>
</div>

@endsection