<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body,html {
            height:100%
        }
        .has-danger {
            border:1px solid red;
        }
    </style>
</head>
<body>
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-6 offset-3 my-auto">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h2>File Example</h2>
                    </div>
                    <div class="card-body">
                        <div class="text-danger">
                            <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                            </ul>
                        </div>
                        <form action="/FilePost" method="post" novalidate 
                        enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="txtname">Text</label>
                                <input id="txtname" class="form-control" type="text" name="txtname" required />
                            </div>
                            <div class="form-group">
                                <label for="filphoto">Text</label>
                                <input id=filphoto" class="form-control-file" 
                                type="file" name="filphoto" required />
                                <div class="text-info">Maximum size 2 MB</div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Submit Form
                                </button>
                            </div>
                            <div class="form-group">
                            {{ isset($message) ? $message : "" }}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>