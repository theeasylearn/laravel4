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
                        <h3>Category Management(Edit Existing Category) </h3>
                    </div>
                    <div class="card-body">
                        
                        <form action="/updatecategory" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Category Title</label>
                                <input id="title" class="form-control" type="text" name="title" required
                                value="{{$category->title}}" />
                            </div>
                            <div class="form-group">
                                <label for="categoryphoto">Category Photo</label>
                                <input id="categoryphoto" class="form-control" type="file" name="categoryphoto"  
                                accept="image/*">
                                <br>
                                <img src="/images/category/{{$category->photo}}" class='img-thumbnail myimage'  />
                            </div>
                            <b>Is this category live?</b>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="islive" value=1 required  {{$yes}} /> Yes
                                </label>
                                <label>
                                    <input type="radio" name="islive" value=0 required {{$no}} /> No
                                </label>
                            </div>
                            <div class="form-group">
                                <input id="btnsubmit" class="btn btn-primary btn-block btn-lg" type="submit" name="btnsubmit"  value="Save changes" />
                            </div>
                            <input type="hidden" name="categoryid" value="{{$category->id}}" />
                            <input type="hidden" name="oldphoto" value="{{$category->photo}}" />
                        </form>
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