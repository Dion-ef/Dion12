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
    <title>Profil</title>
</head>
<body class="">
<div id="app" class="d-flex">
<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 220px; height: 100vh">
    <a href="/dashboard" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="/dashboard"></use></svg>
      <span class="fs-4">Delta Comp</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/dashboard" class="nav-link text-white" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="/dashboard/profil"></use></svg><i class="fa fa-dashboard"></i>
          Home
        </a>
      </li>
      <li>
        <a href="/dashboard/profil" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="/dashboard/profil"></use></svg><i class="fa fa-user" aria-hidden="true"></i>
          Profil
        </a>
      </li>
      <li>
        <a href="/kategori/barang" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg><i class="fa fa-suitcase" aria-hidden="true"></i>
          Data Barang
        </a>
      </li>
      <li >
        <a href="/dashboard/kategori" class="nav-link active ">
          <svg class="bi me-2 " width="16" height="16"><use xlink:href="#grid"></use></svg><i class="fa fa-credit-card" aria-hidden="true"></i>
          Kategori
        </a>
 
      </li>
      <li>
        <a href="/transaksi" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg><i class="fa fa-random" aria-hidden="true"></i>
          Transaksi
        </a>
      </li>
      <li>
        <a href="/user" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg><i class="fa fa-power-off" aria-hidden="true"></i>
          Keluar
        </a>
      </li>
    </ul>
    <hr>

  </div>
  

  <form class="container pt-xl-4" action="/kategori/store" method="POST">
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">


            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label fw-bold">Nama Kategori</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" required="required">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><a href="/dashboard/kategori" class="btn btn-primary">Kembali</a></div>
            </div>
        </div>
    </form>
  </div>

    
    

</body>
</html>