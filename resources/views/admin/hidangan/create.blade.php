@extends('layouts.app')

@section('content')
<h3 class="sub-heading text-center mb-3 text-success"> Tambah Menu </h3>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                <form action="/inserthidangan" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Menu</label>
        <input type="text" name="nama_menu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Foto Menu</label>
       <input type="file" name="gambar" class="form-control">
      </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">harga</label>
        <input type="number" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Stok</label>
        <input type="number" name="stok" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Keterangan</label>
     <input type="text" name="keterangan" class="form-control" id="exampleInputPassword1">
      </div>
     <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
   </div>
  </div>
 </div>
</div>
</div>
@endsection
