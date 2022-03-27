@extends('layout/footer')
@extends('layout/main')

@section('title', 'Cek Jadwal Vaksin')

@section('container')
<div class="container">
<div class="card border-success mb-3" >
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
    <input type="number" class="form-control border-success" id="nik" name="nik" value="{{ old('nik') }}">
  </div>
  <div class="mb-3">
    <label for="noHp" class="form-label ">No Hp Penerima Sertifikat Vaksin</label>
    <input type="number" class="form-control border-success " id="noHp" name="no_hp" value="{{ old('no_hp') }}">
  </div>
  <button type="submit" class="btn btn-success">Cek Jadwal</button>
</form>
        </div>
        <br>
    </div>
    <br>
</div>
<br>     
</div>
@endsection
