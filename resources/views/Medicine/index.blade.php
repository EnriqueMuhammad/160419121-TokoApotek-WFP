<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
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
        @foreach($queryBuilder as $d)
        <tr>
          <td>{{$d->generic_name}}</td>
          <td>{{$d->form}}</td>
          <td>{{$d->restriction_formula}}</td>
          <td><img src="{{asset('assets/images/'.$d->image) }}"
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
          @foreach($data as $d)
          <div class="col-md-3"
          style="text-align:center;border:1px solid #999;margin:5px;
                  padding:5px;border-radius:10px"
          >
              <img src="{{asset('assets/images/'.$d->image) }}"
               height="160px" /><br>
               <b>{{$d->generic_name}}</b> <br>
                {{$d->form}}
          </div>
          @endforeach
        </div>
    </div>
    
  
  </div>
  
  </body>
  </html>
  