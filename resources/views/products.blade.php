<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <style>
        .myimage 
        {
            height:150px !important;
            width:150px !important;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <p class=text-right>
                    <a href="insert_product" class="btn btn-primary">Add new Product</a>
                </p>
                <div class="card">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>Sr No</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Photo</th>
                            <th>Category</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                           <th></th>
                           <th></th>
                        </tr>
                        @php 
                            $count=1
                        @endphp
                        @foreach($result as $row)
                        <tr>
                            <td>{{$count++}}</td>
                            <td>{{$row['title']}}</td>
                            <td>{{$row['price']}}</td>
                            <td>
                                <img src="/images/product/{{$row['photo']}}" class='img-thumbnail myimage'  />
                            </td>
                            <td>{{$row['categorytitle']}}</td>
                            <td>{{$row['created_at']}}</td>
                            <td>{{$row['updated_at']}}</td>
                            <td>
                            <a href="" class='btn btn-warning'>Edit</a>
                            </td>
                            <td>
                            <a href="" class='btn btn-danger'>Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>