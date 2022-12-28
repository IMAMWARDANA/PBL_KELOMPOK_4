@extends('layouts.app')

@section('content')
<img src="{{ url('images/logo.PNG') }}" class="rounded mx-auto d-block" width="300" alt="">
<br>
<div class="container">
</div>
<div class="container">
<div class="container-fluid mt-2">
                            <form action="/pesanan" method="GET" class="d-flex" role="search">
                            <input class="form-control me-2" name="search" type="search" placeholder="Cari Pesanan" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg></button>
                            </form>
                            </div>
    <div class="row mt-2">
<table class="table table-striped table-hover">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">User Id</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Status</th>
      <th scope="col">jumlah_harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @php
    $no = 1;
    @endphp
    @foreach ($data as $index => $row)
    <tr>
      <td>{{ $row->id }}</td>
      <td>{{ $row->user_id }}</td>
      <td>{{ $row->tanggal }}</td>
      <td>{{ $row->status }}</td>
      <td>{{ $row->jumlah_harga }}</td>

      <td>
      <a href="/updatepesanan/{{ $row->id }}" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg></a>
            <a href="{{ url('history') }}/{{ $row->id }}" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg></i> Detail</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection
