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

  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand">MCC Comp</a>
      <button class="navbar-toggler" type="button">
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
  </nav>-->
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
          <a href="/dashboard" class="nav-link text-white" aria-current="page">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="/dashboard/profil"></use>
            </svg><i class="fa fa-dashboard"></i>
            Home
          </a>
        </li>
        <li>
          <a href="/dashboard/profil" class="nav-link active">
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

    @foreach($data as $m)
    <form action="/profil/update" method="POST">
      @csrf

      <!-- /.row -->
      <div class="container my-2 p-5">
        <div class="col-lg-12 center px-3 py-3 mx-auto ">
          <div class="panel panel-primary" style="height: 100vh;">
            <div class="panel-heading">
              Profil
            </div>
            <div class="panel-body">
              <div class="row">

                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Level</label><br>
                    <label></label>
                    {{ $m->level }}
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" placeholder="Nama" name="name" value=" {{ $m->name }}">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" placeholder="Alamat" name="alamat" rows="3" value=" {{ $m->email }}">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input class="form-control" placeholder="Alamat" name="alamat" rows="3" value=" {{ $m->alamat }}">
                  </div>
                  <div class="form-group input-group">
                    <span class="input-group-addon">+62</span>
                    <input type="text" class="form-control" placeholder="No Telepon" name="no" value="{{$m->no}}">
                  </div>

                  <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                </div>

                <div class="col-lg-6">
                  <div class="card" style="width: 40rem; height: 100%;">
                    <img src="/gambar/ava1-bg.jpg" class="card-img-top" alt="/dashboard">
                  </div>
                </div>


                <!-- /.col-lg-6 (nested) -->


              </div>
              <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
      </div>

      @endforeach
  </div>



</body>

</html>