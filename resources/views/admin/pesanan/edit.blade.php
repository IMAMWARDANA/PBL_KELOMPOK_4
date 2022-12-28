@extends('layouts.app')

@section('content')
<h1 class="sub-heading text-center mb-3 text-success"> Halaman Konfirmasi Pembayaran </h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                <form action="/updatedatapesan/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf

    <div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Status Pembayaran</label>
    <select class="form-select" name="status" required aria-label="select example">
      <option selected>{{ $data->status }}</option>
      <option value="1">1</option>
      <option value="2">2</option>

    </select>
</div>
    <button type="submit" class="btn btn-primary">perbarui</button>
        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
