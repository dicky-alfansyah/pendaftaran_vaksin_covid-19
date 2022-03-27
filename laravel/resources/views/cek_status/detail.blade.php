@extends('layout/footer')
@extends('layout/main')

<style class="text/css">
    .table-condensed {
        font-size: 11px;
    }
</style>

@section('title', 'Cek Jadwal Vaksin')

@section('container')
<div class="container">
    <div class="card border-success mb-3">
        <div class="card-header bg-success border-success text-white"><b></b></div>
        <div class="card-body text-center text-success">
            <h6 class="card-title">Isi form untuk melihat jadwal vaksin anda.</h6>
        </div>
    </div>
</div>

<div class="container">
    <div class="card border-success mb-3">
        <div class="card-body">

            <form method="post" action="{{ url('/pendaftaran-vaksin/cek-status-detail')}}">
                @method('get')
                @csrf
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="number" class="form-control border-success" id="nik" name="nik" value="{{request('nik')}}">
                </div>
                <div class="mb-3">
                    <label for="noHp" class="form-label ">No Hp Penerima Sertifikat Vaksin</label>
                    <input type="number" class="form-control border-success" id="noHp" name="no_hp" value="{{request('no_hp')}}">
                </div>
                <button type="submit" class="btn btn-success">Cek Jadwal</button>
            </form><br>

            @forelse ($data_pendaftaran_vaksin as $jv)
            <div class="card border-success mb-3">
                <div class="card-header bg-success border-success text-white"><b></b></div>
                <div class="card-body text-success">
                    <table class="table table-condensed table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nomor Registrasi</th>
                                <td>NR-AV-00{{$jv->id}}</td>
                            </tr>
                            <tr>
                                <th>Nik</th>
                                <td>{{$jv->nik}}</td>
                            </tr>
                            <tr>
                                <th>Nama Lengkap</th>
                                <td>{{$jv->nama_lengkap}}</td>
                            </tr>
                            <tr>
                                <th>No Hp Penerima Sertifikat Vaksin</th>
                                <td>{{$jv->no_hp}}</td>
                            </tr>
                            <tr>
                                <th>Dosis Vaksin</th>
                                <td>{{$jv->dosis_vaksin}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Vaksin</th>
                                <td>{{$jv->jenis_vaksin}}</td>
                            </tr>
                            <tr>
                                <th>Jadwal Vaksin Anda</th>
                                <td> {{Carbon\Carbon::parse($jv->jadwal_vaksin)->translatedFormat('l, d F Y') }}</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body alert-success">
                    <form action="/jadwal-vaksin/export-pdf-id={{$jv->id}}" method="post">
                        @method('get')
                        @csrf
                        <p class="card-title text-center"><b>Silahkan Download bukti jadwal vaksinasi anda untuk dibawa saat vaksin di RSUD Wilayah X mulai Pukul 08.00 WIB - Selesai
                        <button class="btn btn-sm btn-success">Download</button></b></p>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="card mb-3">
        <div class="card-body alert-danger text-danger text-center">
            <h4>Data tidak ditemukan.</h4>
            <h6>Silahkan cek secara berkala pada website ini pada jam 16.00 - 20.00 WIB untuk melihat jadwal vaksinasi anda, jika belum melakukan pendaftaran silahkan registrasi pada menu berikut
                <a href="{{url('/')}}" type="button" class="btn btn-sm btn-success">Registrasi</a>
            </h6>
        </div>
    </div>
</div>
@endforelse
</div>
</div>
</div>
</div><br>
@endsection