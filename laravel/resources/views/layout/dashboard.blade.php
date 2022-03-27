<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">

    <title>@yield('title')</title>

  <link href="{{ asset('style/OverlayScrollbars.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style/adminlte.min.css') }}" rel="stylesheet">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
</style>

</head>

<body class="hold-transition sidebar-mini layout-fixed" oncontextmenu='return false;'>
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a type="button" class="btn btn-dark btn-sm" href="{{ url('/logout')}}">
          <i class="fa-solid fa-user-gear"></i>
          Logout
          </a>
        </li>
      </ul>
    </nav>

    <aside class="main-sidebar sidebar-light-success elevation-4">

      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="text-success">
            <i class="nav-icon fa-solid fa-hospital-user fa-3x"></i>
          </div>
          <div class="info">
            <span class="d-block text-xl"><b>Admin RS</b></span>
          </div>
        </div>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar">
            <li class="nav-item">
              <a href="{{ url('/dashboard')}}" class="nav-link bg-success">
              <i class="nav-icon fa-solid fa-layer-group"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ url('/dashboard/pendaftaran-vaksin-dosiske=1')}}" class="nav-link">
              <i class="nav-icon fa-solid fa-user-group"></i>
                <p>
                  Pendaftaran Vaksin 1
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ url('/dashboard/pendaftaran-vaksin-dosiske=2')}}" class="nav-link" >
              <i class="nav-icon fa-solid fa-user-group"></i>
                <p>
                  Pendaftaran Vaksin 2
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ url('/dashboard/pendaftaran-vaksin-dosiske=3')}}" class="nav-link" >
              <i class="nav-icon fa-solid fa-user-group"></i>
                <p>
                  Pendaftaran Vaksin 3
                </p>
              </a>
            </li>
            <li class="nav-item menu-open">
            <a  class="nav-link text-white bg-success">
            <i class="nav-icon fa-solid fa-gears"></i>
              <p>
                Form Control
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            </li>

              <li class="nav-item">
                <a href="{{ url('/dashboard/form-control-vaksin=1')}}" class="nav-link">
                <i class="nav-icon fa-solid fa-syringe"></i>
                  <p>Jenis Vaksin 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/dashboard/form-control-vaksin=2')}}" class="nav-link">
                <i class="nav-icon fa-solid fa-syringe"></i>
                  <p>Jenis Vaksin 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/dashboard/form-control-vaksin=3')}}" class="nav-link">
                <i class="nav-icon fa-solid fa-syringe"></i>
                  <p>Jenis Vaksin 3</p>
                </a>
              </li>
          <li class="nav-item menu-open">
            <a href="{{ url('/dashboard/data-pendaftar-vaksin')}}" class="nav-link text-white bg-success">
              <i class="nav-icon fas fa-file-lines"></i>
              <p>
                Data Vaksinasi
              </p>
            </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    @yield('dashboard')

  <script src="{{ asset('style/jquery.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
  <script src="{{ asset('style/adminlte.js') }}"></script>
  <script src="https://kit.fontawesome.com/0798228fed.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>