@extends('layouts.app')

@section('content')
<img src="{{ url('images/logo.PNG') }}" class="rounded mx-auto d-block" width="300" alt="">
<div class="container">
<a href="/dlh" type="button" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
</svg>Download Laporan Harian (PDF)</a>
</div>
<div class="container mt-2">
    <div class="row">
<table class="table table-striped table-hover">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Menu Id</th>
      <th scope="col">Pesanan Id</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Jumlah Harga</th>
      <th scope="col">Tanggal Pemesanan</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @php
    $no = 1;
    $jmlpesan = 0;
    $jmlhrg = 0;
    $total = 0;
    @endphp
    @foreach ($data as $row)
    <tr>
      <td>{{ $no++}}</td>
      <td>{{ $row->menu_id }}</td>
      <td>{{ $row->pesanan_id }}</td>
      <td>{{ $row->jumlah }}</td>
      <td>{{ $row->jumlah_harga }}</td>
      <td>{{ $row->updated_at }}</td>
    </tr>
    @php
    $jmlpesan += $row->jumlah;
    $jmlhrg += $row->jumlah_harga;
    $total += ($row->jumlah_harga)
    @endphp
    @endforeach
  </tbody>
</table>
<a type="button" class="btn btn-success text-dark">
<td colspan="2"><strong>Total :</strong></td>
<td> <strong>Rp. {{ number_format($total) }}</strong> </td></a>
</div>
</div>
@endsection