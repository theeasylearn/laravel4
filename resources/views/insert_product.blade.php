<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-1 mt-3">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white ">
                        <h2>Add new Product</h2>
                    </div>
                    <div class="card-body">
                        <form action="insert_product" method="post" enctype="multipart/form-data">
                            @csrf 

                            <div class="form-group">
                                <label for="categoryid">select category</label>
                                <select id="categoryid" class="form-control"  name="categoryid" required>
                                    <option value="">select</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input id="title" class="form-control" type="text" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input id="price" class="form-control" type="text" name="price" required>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input id="quantity" class="form-control" type="text" name="quantity" required>
                            </div>
                            <div class="form-group">
                                <label for="filphoto">Photo</label>
                             <input id="filphoto" class="form-control-file" type="file" name="filphoto" required accept="image/*" />
                            </div>
                            <div class="form-group">
                                <label for="detail">Detail</label>
                                <textarea id="detail" class="form-control" name="detail" >

                                </textarea>
                            </div>
                            <div class="form-group text-right">
                             <input class="btn btn-primary" type="submit" value="Save" /> 
                             <a class="btn btn-success" href="product"> View Products </a>
                            </div>
                        </form>
                        <div class="text-success border text-center p-3">
                        {{ Session::get("message") }}  
                        </div>
                    </div>  <!-- end of card body  -->
                </div>  <!-- end of card   -->
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>     