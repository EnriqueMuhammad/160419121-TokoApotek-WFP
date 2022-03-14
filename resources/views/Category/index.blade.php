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
      <h1>Daftar Kategori</h1>
      <thead>
        <tr>
          <th>Nama</th>
          <th>Deskripsi</th>
          <th>Obat-Obat</th>
        </tr>
      </thead>
      <tbody>
        @foreach($queryBuilder as $d)
        <tr>
          <td>{{$d->name}}</td>
          <td>{{$d->description}}</td>
          <td>
            @foreach($d->medicines as $m)
                {{$m->generic_name}} ({{$m->form}})<br>
            @endforeach
        </td>

        </tr>
        @endforeach
      </tbody>
    </table>
  
  </div>
  
  </body>
  </html>
  