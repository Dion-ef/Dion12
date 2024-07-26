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
    <title>Transaksi</title>
</head>
<body class="">

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
</nav>-->
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
        <a href="/dashboard/kategori" class="nav-link text-white ">
          <svg class="bi me-2 " width="16" height="16"><use xlink:href="#grid"></use></svg><i class="fa fa-credit-card" aria-hidden="true"></i>
          Kategori
        </a>
 
      </li>
      <li>
        <a href="/transaksi" class="nav-link active">
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
  

  <div class=" container my-5 p-3 bg-body rounded shadow-sm">
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th class="col-md-1">No</th>
            <th class="col-md-1">Id Pembeli</th>
            <th class="col-md-2">Nama Pembeli</th>
            <th class="col-md-2">Email</th>
            <th class="col-md-1">Alamat</th>
            <th class="col-md-2">Nama Barang</th>
            <th class="col-md-2">Harga</th>
            <th class="col-md-3">Tanggal</th>
            <th class="col-md-1">Aksi</th>
           
      
            
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $item->users_id}}</td>
            <td>{{ $item->users_name}}</td>
            <td>{{ $item->email}}</td>
            <td>{{ $item->alamat}}</td>
            <td>{{ $item->barang->nama}}</td>
            <td>Rp. {{ number_format($item->barang->harga)}}</td>
            <td>{{ $item->tanggal}}</td>
            <td>
              <a href="/pesan/hapus/{{ $item->id }}" class="btn btn-danger btn-sm">Hapus</a>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>
</div>
  </div>


@include('sweetalert::alert')