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
                  <span class="text- center fs-6"><b>FORM PENDAFTARAN VAKSIN DOSIS BOOSTER</b></span>
                </div>
              </div>
              <div class="card-body">
              <div class="mb-3">
                  @foreach ($control_form3 as $c3)
                  <a href="/pendaftaran-vaksin/dosiske-3-active={{$c3->id='3'}}" type="button" class="btn btn-success btn-sm">
                    ON
                  </a>
                  <a href="/pendaftaran-vaksin/dosiske-3-disabled={{$c3->id='3'}}" type="button" class="btn btn-danger btn-sm">
                    OFF
                  </a>
                  <button type="button" class="btn alert-primary btn-sm" disabled>
                    Status Pendaftaran : {{$c3->status}}
                  </button>
                  @endforeach
                </div>
                <table class="table table-condensed table-responsive table-bordered table-hover text-nowrap">
                  <thead>
                    <tr>
                    <th class="text-center">No</th>
                    <th style="width: 100px">Nomor Registrasi</th>
                      <th style="width: 100px">Nik</th>
                      <th style="width: 250px">Nama Lengkap</th>
                      <th style="width: 160px">Jenis Vaksin</th>
                      <th style="width: 100px">Tanggal Lahir</th>
                      <th style="width: 140px">Nomor HP</th>
                      <th style="width: 140px">Alamat</th>
                      <th style="width: 240px" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data_pendaftaran_vaksin as $jv)
                    <tr>
                      <td class="text-center" scope="row">{{$loop -> iteration}}</td>
                      <td>NR-AV-00{{$jv->id}}</td>
                      <td>{{$jv->nik}}</td>
                      <td>{{$jv->nama_lengkap}}</td>
                      <td>{{$jv->jenis_vaksin}}</td>
                      <td>{{Carbon\Carbon::parse($jv->tanggal_lahir)->translatedFormat('d-m-Y') }}</td>
                      <td>{{$jv->no_hp}}</td>
                      <td>{{$jv->alamat}}</td>
                      <td class="text-center" style="width: 90px">
                        <a href="/dashboard/update-status-konfirmasi-vaksin3-id={{$jv->id}}" class="btn btn-sm btn-success">
                          <i class="fa-solid fa-circle-check"></i>
                          Konfirmasi
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
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