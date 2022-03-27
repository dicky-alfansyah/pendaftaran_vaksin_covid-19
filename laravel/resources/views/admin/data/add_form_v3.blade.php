@extends('layout/footer_admin')
@extends('layout/dashboard')
@section('title', 'Dashboard Admin')

@section('dashboard')
@include('sweetalert::alert')

<div class="content-wrapper">
    <div class="content-header">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-success card-outline">
                            <div class="card-header">
                                <div class="content-header">
                                    <span class="text- center fs-6"><b>TAMBAH DATA JENIS VAKSIN BOOSTER</b></span>
                                </div>
                            </div>

                            <form method="post" action="{{ url('/dashboard/form-control-vaksin=3')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="nik" class="form-label">Input Jenis Vaksin</label>
                                        <select class="form-select" id="nama_vaksin" name="pilih_vaksin" aria-required="true">
                                            <option selected></option>
                                            <option value="Astrazeneca">Astrazeneca</option>
                                            <option value="Moderna">Moderna</option>
                                            <option value="Sinovac / Coronavac">Sinovac / Coronavac</option>
                                            <option value="Pfizer">Pfizer</option>
                                        </select>
                                    </div>
                                    <div class="gap-2 d-md-flex justify-content-md-end">
                                        <a href="{{ url('/dashboard/form-control-vaksin=3')}}" class="btn btn-danger">Cancel</a>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection