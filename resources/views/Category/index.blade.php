@extends('layouts.template')
@section('content')
<table class="table">
  <h1>Daftar Kategori</h1>
  <thead>
    <tr>
      <th>Nama</th>
      <th>Deskripsi</th>
      <th>Obat-Obat</th>
    </tr>
  </thead>
  <tbody>
    @foreach($queryEloquent as $d)
    <tr>
      <td>{{$d->name}}</td>
      <td>{{$d->description}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
