<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Data Penjualan Hari Ini</h1>

<table id="customers">
<tr>
      <th scope="col">No</th>
      <th scope="col">Menu Id</th>
      <th scope="col">Pesanan Id</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Jumlah Harga</th>
      <th scope="col">Tanggal Pemesanan</th>
    </tr>
@php
    $no = 1;
    $jmlpesan = 0;
    $jmlhrg = 0;
    $total = 0;
    @endphp
@foreach ($data as $row)
  <tr>
  <td>{{ $no++ }}</td>
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
  </table>
  <table>
  <a type="button" class="btn btn-success text-dark">
<td colspan="2"><strong>Total :</strong></td>
<td> <strong>Rp. {{ number_format($total) }}</strong> </td></a>
</table>

</body>
</html>