<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/bootstrap1.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/plugins/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
  <title>Dashboard/Toko MCC</title>

</head>

<body class="bg-secondary">

  <div id="app" class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark sticky-top" style="width: 220px; height: 100vh">
      <a href="/dashboard" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
          <use xlink:href="/dashboard"></use>
        </svg>
        <span class="fs-4">Delta Comp</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="/dashboard" class="nav-link active" aria-current="page">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="/dashboard/profil"></use>
            </svg><i class="fa fa-dashboard"></i>
            Home
          </a>
        </li>
        <li>
          <a href="/dashboard/profil" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="/dashboard/profil"></use>
            </svg><i class="fa fa-user" aria-hidden="true"></i>
            Profil
          </a>
        </li>
        <li>
          <a href="/kategori/barang" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#table"></use>
            </svg><i class="fa fa-suitcase" aria-hidden="true"></i>
            Data Barang
          </a>
        </li>
        <li>
          <a href="/dashboard/kategori" class="nav-link text-white ">
            <svg class="bi me-2 " width="16" height="16">
              <use xlink:href="#grid"></use>
            </svg><i class="fa fa-credit-card" aria-hidden="true"></i>
            Kategori
          </a>

        </li>
        <li>
          <a href="/transaksi" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#people-circle"></use>
            </svg><i class="fa fa-random" aria-hidden="true"></i>
            Transaksi
          </a>
        </li>
        <li>
          <a href="/user" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#people-circle"></use>
            </svg><i class="fa fa-power-off" aria-hidden="true"></i>
            Keluar
          </a>
        </li>
      </ul>
      <hr>

    </div>


    <div class="pe-xl-3 pt-xl-4" style="width: 100%;">
    <div class="container">
        <h3>Dashboard</h3>
        <div class="card">
            <div class="card-header">
               <h5>Selamat Datang di Toko MCC Comp</h5>
            </div>
        </div>
    </div>
</div>
  </div>

  <!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand">MCC Comp</a>
      <button class="navbar-toggler" type="button" >
          <span class="navbar-toggler-icon"></span>
      </button>

  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class=" nav-link" href="/dashboard"><i class="fa fa-dashboard"></i> Dashboard </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/dashboard/profil"><i class="fa fa-user" aria-hidden="true"></i> Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/kategori/barang"><i class="fa fa-suitcase" aria-hidden="true"></i> Data Barang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/dashboard/kategori"><i class="fa fa-credit-card" aria-hidden="true"></i> Kategori</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/transaksi"><i class="fa fa-random" aria-hidden="true"></i> Transaksi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/user"><i class="fa fa-power-off" aria-hidden="true"></i> Keluar</a>
      </li>
    </ul>
    </div>
</nav> -->


  <script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
  <script src="{{asset('assets/js/plugins/dataTables/dataTables.bootstrap.js')}}"></script>
  <script src="{{asset('assets/js/plugins/dataTables/jquery.dataTables.js')}}"></script>
  <script src="{{asset('assets/js/sb-admin.jss')}}"></script>


  @include('sweetalert::alert')
</body>

</html>