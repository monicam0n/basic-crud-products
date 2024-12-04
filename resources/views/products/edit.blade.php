<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5 p-5">
        <h1>Edit a Product</h1>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                <div class="alert alert-danger">{{$error}}</div>
            </li>
            @endforeach
        </ul>
        @endif
        <form class="form" method="POST" action="{{route('product.update', ['product' => $product])}}">
            @csrf
            @method('PUT')
            <div class="md-3">
                <label class="form-label" for="">Name : </label>
                <input type="text" class="form-control" name="name" placeholder="Name" value="{{$product->name}}">
            </div>
            <div class="md-3">
                <label class="form-label" for="">Quantity : </label>
                <input type="text" class="form-control" name="qty" placeholder="Quantity" value="{{$product->qty}}">
            </div>
            <div class="md-3">
                <label class="form-label" for="">Price : </label>
                <input type="text" class="form-control" name="price" placeholder="Price" value="{{$product->price}}">
            </div>
            <div class="md-3">
                <label class="form-label" for="">Description : </label>
                <input type="text" class="form-control" name="description" placeholder="Description" value="{{$product->description}}">
            </div>
            <div>
                <input class="btn btn-success mt-3" type="submit" value="Update Product" />
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
