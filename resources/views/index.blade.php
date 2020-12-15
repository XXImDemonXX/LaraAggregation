<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('CSS/custome.css')}}">
    <script src="https://kit.fontawesome.com/aaf5cb503a.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products Manager</title>
</head>
<body>
    <div class="header"><h1>Header Section</h1></div>
    <div class="content"><h1>Content Section</h1>
        @if(Session::has('pinsert_message'))
             <span>{{Session::get('pinsert_message')}}</span>
        @endif
    <form method="POST" action="{{Route('insert.product')}}"> @csrf
    <div class="form-group">
        <label for="sel1">Select Products list:</label>
        <select name="pname" class="form-control" id="sel1">
            <option>--Select--</option>
            <option>NOKIA</option>
            <option>SAMSUNG</option>
            <option>REALME</option>
            <option>OPPO</option>
          </select>
      </div>
    <div class="form-group">
        <div class="form-group">
            <label for="sel1">Select Products Quentity:</label>
            <select name="pquentity" class="form-control" id="sel1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select>
        </div>
      <div class="form-group">
        <input name="pprice" type="text" class="form-control" id="usr" placeholder="Enter Product Price">
      </div>
      <button type="submit" class="btn btn-primary btn-block">Submit</button>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a class="fas fa-list-ol" href="{{Route('product.list')}}"></a>
</form>
    </div>
<div class="footer"><h1>Footer Section</h1></div>
</body>
</html>
