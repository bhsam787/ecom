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
        <h2>Product Registration Form</h2>
        <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter product name" name="name" value="{{ $product->name }}">
            </div>
            <div class="form-group">
                <label for="price">Product Price:</label>
                <input type="number" class="form-control" id="price" placeholder="Enter product price" name="price" value="{{ $product->price }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Product Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" >{{ $product->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

</body>

</html>
