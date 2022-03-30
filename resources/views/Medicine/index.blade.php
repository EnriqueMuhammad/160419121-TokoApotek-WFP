@extends('layouts.template')
@section('content')
<table class="table">
  <h1>Daftar Obat</h1>
  <thead>
    <tr>
      <th>Nama</th>
      <th>Bentuk</th>
      <th>Formula</th>
      <th>Foto</th>
      <th>Harga</th>
    </tr>
  </thead>
  <tbody>
    @foreach($queryEloquent as $d)
    <tr>
      <td>{{$d->generic_name}}</td>
      <td>{{$d->form}}</td>
      <td>{{$d->restriction_formula}}</td>
      <td><img src="{{asset('images/'.$d->image) }}"
        height="100px" />
      </td>
      <td>{{$d->price}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

<div class="container">
  <h2>Daftar Obat</h2>
    <div class="row">
      @foreach($queryEloquent as $d)
      <div class="col-md-3"
      style="text-align:center;border:1px solid #999;margin:5px;
              padding:5px;border-radius:10px"
      >
          <img src="{{asset('images/'.$d->image) }}"
            height="160px" /><br>
            <b>{{$d->generic_name}}</b> <br>
            {{$d->form}}
      </div>
      @endforeach
    </div>
</div>
@endsection
