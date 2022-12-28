@extends('layouts.app')

@section('content')
<h3 class="sub-heading text-center mb-3 text-success"> Pembayaran </h3>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
                <div class="card-body">
                <div class="input-group mb-3">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Id Reservasi</label>
  <input type="number" name="id" class="form-control" id="exampleFormControlInput1" placeholder="nama lengkap" value="{{ $data->id }}">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Atas Nama</label>
  <input type="name" name="Atas_Nama" class="form-control" id="exampleFormControlInput1" placeholder="nama lengkap" value="{{ $data->Atas_Nama }}">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">No Tlp</label>
  <input type="number" name="Nomor_Telpon" class="form-control" id="exampleFormControlInput1" placeholder="nomor whatsapp" value="{{ $data->Nomor_Telpon }}">
</div>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Makanan</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>  <div class="col-auto">
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Makanan</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>  <div class="col-auto">
<div class="input-group mb-3">
  <span class="input-group-text">Rp</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
  <span class="input-group-text">.00</span>
</div>

    <a href="/transaksi" class="btn btn-primary mb-3">Bayar</a>
  </div>
        </div>
            </div>
                </div>
                    </div>
                        </div>
@endsection
