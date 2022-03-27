@extends('layout/footer_admin')
@extends('layout/dashboard')

@section('title', 'Dashboard Admin')

@section('dashboard')

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{$TampilData1}}</h3>
              <p>Pendaftaran Vaksin 1</p>
            </div>
            <div class="icon">
              <i class="ion fa-solid fa-table-list"></i>
            </div>
            <a href="{{ url('/dashboard/pendaftaran-vaksin-dosiske=1')}}" class="small-box-footer">Detail<i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{$TampilData2}}</h3>
              <p>Pendaftaran Vaksin 2</p>
            </div>
            <div class="icon">
              <i class="ion fa-solid fa-table-list"></i>
            </div>
            <a href="{{ url('/dashboard/pendaftaran-vaksin-dosiske=2')}}" class="small-box-footer">Detail<i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{$TampilData3}}</h3>
              <p>Pendaftaran Vaksin 3</p>
            </div>
            <div class="icon">
              <i class="ion fa-solid fa-table-list"></i>
            </div>
            <a href="{{ url('/dashboard/pendaftaran-vaksin-dosiske=3')}}" class="small-box-footer">Detail<i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{$TampilData4}}</h3>
              <p>Data Vaksinasi</p>
            </div>
            <div class="icon">
              <i class="ion fa-solid fa-table-list"></i>
            </div>
            <a href="{{ url('/dashboard/data-pendaftar-vaksin')}}" class="small-box-footer">Detail<i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection