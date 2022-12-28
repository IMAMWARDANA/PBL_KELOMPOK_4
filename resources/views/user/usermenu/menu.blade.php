@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-5">
            <img src="{{ url('images/logo.PNG') }}" class="rounded mx-auto d-block" width="300" alt="">
        </div>
        <div class="container-fluid">
                            <form action="/usermenu" method="GET" class="d-flex" role="search">
                            <input class="form-control me-2" name="search" type="search" placeholder="Cari Menu" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg></button>
                            </form>
                            </div>
        @foreach($menus as $menu)
        <div class="col-md-3 mb-3">
            <div class="container-rounded mt-4 card rounded" style="width: 270px;" >
              <img src="{{ asset('fotohidangan/'.$menu->gambar) }}" class="card-img-top"  alt="..." width="265px" height="200px">
              <div class="card-body">
                <h4 class="card-title">{{ $menu->nama_menu }}</h4>
                <p class="card-text">
                    <strong>Harga :</strong> Rp. {{ number_format($menu->harga)}} <br>
                    <strong>Stok :</strong> {{ $menu->stok }} <br>
                    <hr>
                    <strong>Keterangan :</strong> <br>
                    {{ $menu->keterangan }}
                </p>
                <a href="{{ url('userpesan') }}/{{ $menu->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Pesan</a>
              </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
