<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body,html {
            height:100%
        }
    </style>
</head>
<body>
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-4 my-auto offset-4">
                <div class="card shadow">
                    <div class="card-title bg-danger text-white p-3">
                        <h2>Login</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="txtemail">Email</label>
                            <input id="txtemail" class="form-control" type="email" name="txtemail" required />
                        </div>
                        <div class="form-group">
                            <label for="txtpassword">Password</label>
                            <input id="txtpassword" class="form-control" type="Password" name="txtpassword" required />
                        </div>
                        <div class="form-group text-right">
                               <input class="btn btn-danger btn-lg" type="submit" name="btnsubmit" value="Login In" />
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
</body>
</html>