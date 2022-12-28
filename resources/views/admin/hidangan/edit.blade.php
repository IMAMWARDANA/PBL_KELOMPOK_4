@extends('layouts.app')

@section('content')
<h1 class="sub-heading text-center mb-3 text-success"> Edit Menu </h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                <form action="/updatedata/{{ $menus->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Menu</label>
        <input type="text" name="nama_menu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $menus->nama_menu }}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Foto Menu</label>
            <input type="file" name="gambar" class="form-control" aria-label="file example" required>
                <img src="{{ asset('fotohidangan/'.$menus->gambar) }}" alt="" style="width: 60px;">
                     </div>
                     <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" id="exampleInputPassword1" value="{{ $menus->harga }}">
                </div>
                <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Stok</label>
            <input type="number" name="stok" class="form-control" id="exampleInputPassword1" value="{{ $menus->stok }}">
                </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" id="exampleInputPassword1" value="{{ $menus->keterangan }}">
                </div>
    <button type="submit" class="btn btn-primary">perbarui</button>
        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
