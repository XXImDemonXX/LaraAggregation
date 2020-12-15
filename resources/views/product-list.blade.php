<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('css/custome.css')}}">
    <script src="https://kit.fontawesome.com/aaf5cb503a.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <h1>Product List</h1>
        <div class="container">
        <table class="table table-borderless"> @csrf
          <thead>
             <span></span>
            <tr>
              <th>ID</th>
              <th>Product Name</th>
              <th>Quentity</th>
             <th>Price/(####)</th>
              <th>Total Amount</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($products as $product)
            <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->pName}}</td></td>
            <td>{{$product->pQuentity}}</td>
            <td>{{$product->pPrice}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</body>
</html>
