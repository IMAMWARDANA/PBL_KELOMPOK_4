@extends('layouts.user')

@section('content')
<img src="{{ url('images/logo.PNG') }}" class="rounded mx-auto d-block" width="300" alt="">
<div class="container">
<a href="/usertambahreservasi" type="button" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-folder-plus" viewBox="0 0 20 18">
        <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z"/>
            <path d="M13.5 10a.5.5 0 0 1 .5.5V12h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V13h-1.5a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/>
                </svg>Buat Reservasi</a>
                <div class="container-fluid mt-2">
                            <form action="/userreservasi" method="GET" class="d-flex" role="search">
                            <input class="form-control me-2" name="search" type="search" placeholder="Cari Reservasi" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg></button>
                            </form>
                            </div>
</div>
<div class="container mt-2">
    <div class="row">
<table class="table table-striped table-hover">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Atas Nama</th>
      <th scope="col">Nomor Telpon</th>
      <th scope="col">Jml Orang</th>
      <th scope="col">Waktu Datang</th>
      <th scope="col">Dibuat</th>
      <th scope="col">status</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @php
    $no = 1;
    @endphp
    @foreach ($data as $row)
    <tr>
      <td>{{ $no++ }}</td>
      <td>{{ $row->name }}</td>
      <td>0{{ $row->Nomor_Telpon }}</td>
      <td>{{ $row->Jml_Orang }}</td>
      <td>{{ $row->Tanggal }}</td>
      <td>{{ $row->created_at }}</td>
      <td>{{ $row->status }}

      </td>
      <td>
    <a href="/userdeletereservasi/{{ $row->id }}" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection
