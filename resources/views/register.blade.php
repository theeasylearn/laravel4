<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register with us </title>
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
                    <div class="card-title bg-primary text-white p-3 ">
                        <h2>Register with us </h2>
                    </div>
                    <div class="card-body">
                        <form action="registerpost" method="post" >
                            @csrf
                            <div class="form-group">
                                <label for="txtemail">Email</label>
                                <input id="txtemail" 
                                class="form-control {{$errors->has('txtemail') ? 'has-danger' : '' }}" 
                                type="email" name="txtemail" required 
                                value="{{old('txtemail')}}" />
                                <div class='text-danger'>
                                    {{$errors->has('txtemail') ? $errors->first('txtemail') : "" }}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="txtpassword">Password</label>
                                <input id="txtpassword" 
                                class="form-control {{ $errors->has('txtpassword') ? 'has-danger' : '' }}" type="password" name="txtpassword" required />
                                <div class='text-danger'>
                                    {{$errors->has('txtpassword') ? $errors->first('txtpassword') : "" }}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="txtpassword2">Confirm Password</label>
                                <input id="txtpassword2" class="form-control {{$errors->has('txtpassword2') ? 'has-danger' : '' }}" type="password" name="txtpassword2" required />
                                <div class='text-danger'>
                                    {{$errors->has('txtpassword2') ? $errors->first('txtpassword2') : "" }}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="txtmobile">Mobile</label>
                                <input id="txtmobile" class="form-control {{$errors->has('txtmobile') ? 'has-danger' : '' }}" type="text" name="txtmobile" required
                                value="{{old('txtmobile')}}" />
                                <div class='text-danger' >
                                    {{$errors->has('txtmobile') ? $errors->first('txtmobile') : "" }}
                                </div>
                            </div>
                            .<div class="form-group">
                                <label for="txtdob">Date Of Birth</label>
                                <input id="txtdob" name="txtdob" 
                                class="form-control {{$errors->has('txtdob') ? 'has-danger' : '' }}"" type="date" required value="{{old('txtdob')}}" />
                                <div class='text-danger'>
                                    {{$errors->has('txtdob') ? $errors->first('txtdob') : "" }}
                                </div>
                            </div>
                           <div class="form-group text-right">
                               <input class="btn btn-primary btn-lg" type="submit" name="btnsubmit" value="Lets Join" />
                           </div>
                        </form>
                        <div class=text-danger>
                            <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}} </li>
                            @endforeach
                            </ul>
                        </div>
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