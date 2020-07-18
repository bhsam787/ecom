<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="text-center pt-5">
        <a href="{{ route('product.create') }}" class="btn btn-success  ">Add product</a>

    </div>
    <table class="table table-bordered" border="1px">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        @foreach ($porducts as $key => $porduct)
        <tbody>
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $porduct->name }}</td>
                <td>{{ $porduct->price }}</td>
                <td> <img src="{{ asset('storage/'. $porduct->image) }}" alt="nai" width="200px"> </td>
                <td>{{ $porduct->description }}</td>
                <td>
                        <a href="{{ route('product.edit',$porduct->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                    <form class="" action="{{ route('product.destroy',$porduct->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                        <button type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    </form>

                </td>
            </tr>


        </tbody>
        @endforeach
    </table>
</body>

</html>
