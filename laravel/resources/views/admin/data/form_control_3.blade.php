@extends('layout/footer_admin')
@extends('layout/dashboard')
@section('title', 'Dashboard Admin')

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
                  <span class="text- center fs-6"><b>JENIS VAKSIN DOSIS BOOSTER</b></span>
                </div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <a href="{{ url('/dashboard/form-add-jv-vaksin=3')}}" type="button" class="btn btn-success btn-sm">
                    <i class="fa-solid fa-square-plus"></i>
                    Tambah Vaksin
                  </a><br><br>
                  @if (session('status'))
                  <div class="alert alert-success">
                    {{session('status')}}
                  </div>
                  @endif
                </div>

                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th class="text-center" style="width: 10px">No</th>
                      <th>Nama Vaksin</th>
                      <th class="text-center" colspan="2">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($jv_form as $jv)
                    <tr>
                      <td class="text-center" scope="row">{{$loop -> iteration}}</td>
                      <td>{{$jv->nama_vaksin}}</td>
                      <td style="width: 100px">
                        <form action="/dashboard/delete-vaksin-3-id={{$jv->id}}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button type="submit" class="btn btn-sm btn-danger">
                            <i class="fa-solid fa-trash-can"></i>
                            Delete
                          </button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div>
</div>
@endsection