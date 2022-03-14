<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h2>Data Obat</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Data</th>
          <th>Hasil</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Generic Name </td>
          <td>{{$data->generic_name}}</td>
        </tr>
        <tr>
          <td>Form</td>
          <td>{{$data->form}}</td>
        </tr>
        <tr>
          <td>Formula</td>
          <td>{{$data->restriction_formula}}</td>
      </tr>
      <tr>
          <td>Category</td>
          <td>{{$data->category->name}}</td>
      </tr>
      <tr>
          <td>Harga</td>
          <td>{{$data->price}}</td>
      </tr>
      <tr>
          <td>Foto</td>
          <td>
            <img src="{{asset('assets/images/'.$data->image) }}"
              />
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  
</body>
</html>