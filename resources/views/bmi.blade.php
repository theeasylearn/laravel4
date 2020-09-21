<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        html, body {
            height: 100%;
        }
    </style>
</head>
<body>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-6 offset-3 my-auto">
                    <div class="card shadow">
                        <div class="card-header bg-primary text-white">
                        <h2>BMI Calculator</h2>
                        </div>
                        <div class="card-body">
                            <form action="bmipost" method=post>
                            @csrf
                            <div class="form-group">
                                <label for="">Enter your weight (kg) </label>
                                <input class="form-control" type="number"  name=txtweight required />
                            </div>
                            <div class="form-group">
                                <label for="">Enter height (foot) </label>
                                <input class="form-control" type="text" name=txtheight required />

                            </div>
                            <div class="form-grou">
                            <input class="btn btn-primary btn-block" type="submit" name=btnsubmit value="Calculate BMI" />
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        
        <script src="js/jquery.js" crossorigin="anonymous"></script>
        <script src="js/pooper.js"></script>
        <script src="js/bootstrap.js"></script>
</body>
</html>