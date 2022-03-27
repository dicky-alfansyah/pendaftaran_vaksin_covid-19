@extends('layout/footer')
@extends('layout/form')
@extends('layout/main')



@section('title', 'Pendaftaran Vaksin Dosis Booster')


@section('container')
<div class="container">
    <div class="card border-success mb-3">
        <h4 class="card-header bg-success text-white text-center">Pendaftaran Vaksin Dosis Booster</h4>
        <div class="card-body">
            <form method="post" action="{{ url('/pendaftaran-vaksin/dosiske=3')}}">
                @csrf
                <div class="mb-3">
                    <label for="j_vaksin" class="form-label">Jenis vaksin yang cocok untuk anda?</label>
                    <select class="form-select border-success " id="j_vaksin" name="jenis_vaksin">
                        @foreach ($jv_form as $jv)
                        <option value="{{ $jv->nama_vaksin }}">{{ $jv->nama_vaksin}}</option>
                        @endforeach
                    </select>
                </div>
        </div>
    </div>

    @endsection
