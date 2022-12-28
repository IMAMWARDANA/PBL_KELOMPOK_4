@extends('layouts.app')

@section('content')
<img src="{{ url('images/logo.PNG') }}" class="rounded mx-auto d-block" width="300" alt="">
<br>
<div class="container">
<div class="navbar-nav">
    <div class="nav-item text-nowrap">
         <li class="nav-item dropdown">
            </li>
                </div>
            </div>
          <!-- Icon Cards-->
          <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-dark o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                  <i class="fas fa-fw fa-user"></i><span>Total Pesanan Hari Ini</span>
                  </div>
                  <div class="mr-5"> {{ $countPerHari }} Pesanan </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="/counth">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-dark o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                  <i class="fas fa-fw fa-user"></i><span>Total Pesanan Minggu Ini</span>
                  </div>
                  <div class="mr-5"> {{ $countPerMinggu }} Pesanan </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="/countm">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-dark o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                  <i class="fas fa-fw fa-user"></i><span>Total Pesanan Bulan Ini</span>
                  </div>
                  <div class="mr-5"> {{ $countPerBulan }} Pesanan </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="/countb">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-dark o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-user"></i><span>Total Pesanan Tahun Ini</span>
                  </div>
                  <div class="mr-5"> {{ $countPerTahun }} Pesanan </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="/countt">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-dark o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                  <i class="fas fa-fw fa-user"></i><span>Pesanan Reservasi</span>
                  </div>
                  <div class="mr-5"> {{ $reservasis }} Pesanan </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="/reservasi">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div> <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-dark o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-user"></i><span>Jumlah Menu</span>
                  </div>
                  <div class="mr-5"> {{ $menus }} Menu </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="/hidangan">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-dark o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                  <i class="fas fa-fw fa-user"></i><span>Admin</span>
                  </div>
                  <div class="mr-5"> {{ $admins }} Orang </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="/profile">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-dark o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                  <i class="fas fa-fw fa-user"></i><span>User</span>
                  </div>
                  <div class="mr-5"> {{ $users }} Orang </div>
                </div>
                <a class="card-footer text-white clearfix small z-1">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
            <div class=" card mb-4">
                 <div class="card-header">
                     <i class="fas fa-table me-1"></i>
                        Data Pelanggan Registrasi
                            </div>
                            <nav class="navbar bg-light">
                            <div class="container-fluid">
                            <form action="/dashboard" method="GET" class="d-flex" role="search">
                            <input class="form-control me-2" name="search" type="search" placeholder="Cari Nama" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                              </svg></button>
                            </form>
                            </div>
                            </nav>
                                 <div class="card-body">
                                    <table id="datatablesSimple">
                                <table class="table table-striped table-hover">
                            <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Hp</th>
                        <th scope="col">Dibuat</th>
                        </tr>
                            </thead>
                        <tbody class="table-group-divider">
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($data as $w)
                        <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $w->name }}</td>
                        <td>{{ $w->email }}</td>
                        <td>{{ $w->alamat }}</td>
                        <td>0{{ $w->nohp }}</td>
                        <td>{{ $w->created_at->diffForHumans() }}</td>
                        <td>
<a href="/deleteuser/{{ $w->id }}" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg></a>
    </td>
</tr>
@endforeach
    </tbody>
        </table>
                        <thead>
                    </thead>
                </table>
            </div>
        </main>
    </div>
</div>
</div>
@endsection
