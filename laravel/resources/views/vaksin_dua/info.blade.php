@extends('layout/main')

@section('title', 'Pendaftaran Berhasil')

@section('container')
<div class="container text-center ">
    <div class="card border-success border-3 mb-3">
        <div class="card-body alert-success">
            <h6 class="card-title">Pendaftaran vaksin dosis kedua anda berhasil, silahkan kembali ke halaman awal untuk
                mengecek jadwal vaksin anda.</h6>
            <div class="card-body">
                <a href="{{ url('/')}}" class="btn btn-success btn-lg fs-5 " style="width: 300px">Kembali</a>
            </div>
        </div>
    </div>
</div>
</div>


<footer class="fixed-bottom bg-dark">
    <div class="text-center p-3 text-white">
        © RSUD Wilayah X
    </div>
</footer>
@endsection
