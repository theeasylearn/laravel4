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
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3>Category Management </h3>
                    </div>
                    <div class="card-body">
                        <form action="/createcategory" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Category Title</label>
                                <input id="title" class="form-control" type="text" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="categoryphoto">Category Photo</label>
                                <input id="categoryphoto" class="form-control" type="file" name="categoryphoto" required 
                                accept="image/*">
                            </div>
                            <b>Is this category live?</b>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="islive" value=1 required /> Yes
                                </label>
                                <label>
                                    <input type="radio" name="islive" value=0 required /> No
                                </label>
                            </div>
                            <div class="form-group">
                                <input id="btnsubmit" class="btn btn-primary btn-block btn-lg" type="submit" name="btnsubmit"  value="Add new category" />
                            </div>
                            <div class="text-info text-center">
                            {{ Session::get("message") }}    
                            </div>           
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Existing Categories</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover" width="100%">
                            <tr>
                                <th width='5%'>Sr No</th>
                                <th>Title</th>
                                <th>Photo</th>
                                <th>Is Live</th>
                                <th width='10%'>Edit</th>
                                <th width='10%'>Delete</th>
                            </tr>
                            @php 
                                $count = 1;
                            @endphp
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $count++}}</td>
                                    <td>{{ $category->title}}</td>
                                    <td>
                                    <img src='/images/category/{{$category->photo}}' class='img-thumbnail myimage'  />
                                    </td>
                                    <td>{{ $live[$category->islive]}}</td>
                                    <td><a href="/category/edit/{{$category->id}}">Edit</a></td>
                                    <td><a href="/category/delete/{{$category->id}}/{{$category->photo}}">Delete</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>