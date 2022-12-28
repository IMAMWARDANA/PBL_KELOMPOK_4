@extends('layouts.app')

@section('content')
<h3 class="sub-heading text-center mb-3 text-success"> Tambah Reservasi </h3>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                <form action="/insertreservasi" method="POST" enctype="multipart/form-data">
                    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Atas Nama</label>
    <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nomor Telpon</label>
    <input type="number" name="Nomor_Telpon" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jml Orang</label>
    <input type="number" name="Jml_Orang" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tanggal Datang</label>
    <input type="datetime-local" name="Tanggal" class="form-control" id="exampleInputPassword1">
  </div>
  <select class="form-select" name="status" aria-label="Default select example">
  <option value="TerKonfirmasi">TerKonfirmasi</option>
</select>
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>
</div>
  </div>
 </div>
</div>
</div>
@endsection
