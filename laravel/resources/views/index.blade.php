@extends('layout/footer')
@extends('layout/main')
@section('title', 'Pendaftaran Vaksin')

@section('container')
<div class="container text-center">
    <div class="card border-success border-2">
        <div class="card-header"></div>
        <div class="card-body">
        @foreach ($control_form as $c1)
            <a href="/pendaftaran-vaksin/{{$c1->url}}" class="btn btn-success btn-lg fs-5" style="width: 300px">Pendaftaran Vaksin Pertama</a>
            @endforeach
        </div>
        
    </div><br>

    <div class="card border-success  border-2">
        <div class="card-header"></div>
        <div class="card-body">
        @foreach ($control_form2  as $c2)
            <a href="/pendaftaran-vaksin/{{$c2->url}}" class="btn btn-success btn-lg fs-5 " style="width: 300px">Pendaftaran Vaksin Kedua</a>
        @endforeach
        </div>
    </div><br>

    <div class="card border-success  border-2">
        <div class="card-header"></div>
        <div class="card-body">
        @foreach ($control_form3  as $c3)
            <a href="/pendaftaran-vaksin/{{$c3->url}}" class="btn btn-success btn-lg fs-5" style="width: 300px">Pendaftaran Vaksin Booster</a>
        @endforeach
        </div>
    </div><br>

    <div class="card border-success  border-2">
        <div class="card-header"></div>
        <div class="card-body">
            <a href="{{ url('/pendaftaran-vaksin/cek-status')}}" class="btn btn-success btn-lg fs-5" style="width: 300px">Cek Jadwal Vaksin Saya</a>
        </div>
    </div><br>

    <div class="card border-success border-2">
        <div class="card-body"><br>
            <p><b>Layanan Keluhan Penggunaan Aplikasi kirim pesan Anda melalui email :</b>
                <span class="badge alert-success border-6 fs-6">rsudwilayah_X@gmail.com</span</p>
  </div>
</div>
</div><br>
@endsection
@section('footer')
@endsection