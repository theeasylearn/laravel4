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
            <div class="col-lg-10 offset-1 mt-3">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                    @php 
                        $Label = "Add new Product";
                        $Action = "/insert_product";
                        $ButtonLabel = "Save";
                        $required = "required";
                        $Title = $Detail = $Price = $Photo = $Quantity = $CategoryId = $ProductId  = null;
                        if(isset($products)==true)
                        {
                            foreach($products as $product)
                            {

                            }
                            $Label = "Edit Product";
                            $Action = "/update_product";
                            $ButtonLabel = "Save Changes";
                            $Title = $product->title;
                            $Detail = $product->detail;
                            $Photo = $product->photo;
                            $Quantity = $product->quantity;
                            $Price = $product->price;
                            $CategoryId = $product->categoryid;
                            $ProductId = $product->id;
                            $required = null;
                
                        }    

                    @endphp
                        <h2>{{$Label}}</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{$Action}}" method="post" enctype="multipart/form-data">
                            @csrf 

                            <div class="form-group">
                                <label for="categoryid">select category</label>
                                <select id="categoryid" class="form-control"  name="categoryid" required>
                                    <option value="">select</option>
                                    @foreach($categories as $category)
                                        @if($CategoryId!=null && $category->id==$CategoryId)
                                            <option value="{{$category->id}}" selected='selected'>{{$category->title}}</option>
                                        @else 
                                            <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input id="title" class="form-control" type="text" name="title" required
                                value="{{$Title}}">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input id="price" class="form-control" type="text" name="price" required 
                                value="{{$Price}}">
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input id="quantity" class="form-control" type="text" name="quantity" required
                                value="{{$Quantity}}">
                            </div>
                            <div class="form-group">
                                <label for="filphoto">Photo</label>
                                <input id="filphoto" class="form-control-file" type="file" name="filphoto" {{$required}} accept="image/*" /> <br>
                                @if(isset($products)==true)
                                    <img src="/images/product/{{$Photo}}" class='img-thumbnail myimage'  />
                                    <input type="hidden" name="oldphoto" value="{{$Photo}}" />
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="detail">Detail</label>
                                <textarea id="detail" class="form-control" name="detail" > {{$Detail}}
                                </textarea>
                            </div>
                            <div class="form-group text-right">
                             <input class="btn btn-primary" type="submit" value="{{$ButtonLabel}}" /> 
                             <a class="btn btn-success" href="product"> View Products </a>
                            </div>
                            <input type="hidden" name="id" value={{$ProductId}}>
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