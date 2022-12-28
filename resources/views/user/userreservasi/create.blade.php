@extends('layouts.user')

@section('content')
<h3 class="sub-heading text-center mb-3 text-success"> Tambah Reservasi </h3>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                <form action="/userinsertreservasi" method="POST" enctype="multipart/form-data">
                    @csrf
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
<div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="status" value="Menunggu Konfirmasi" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Cek Konfirmasi
      </label>
    </div>
    </div>
    <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="name" value="{{Auth::user()->name}}" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Cek User
      </label>
    </div>
  <button type="submit" class="btn btn-primary mt-2">Tambah</button>
</form>
</div>
  </div>
 </div>
</div>
</div>
@endsection
