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
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3>Compose Mail</h3>
                    </div>
                    <div class="card-body">
                        <form action="sendmail" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="txtemail">To</label>
                                <input id="txtemail" class="form-control" type="email" name="txtemail" required>
                            </div>
                            <div class="form-group" id="txtsubject">Suject</label>
                                <input id="txtsubject" class="form-control" type="text" name="txtsubject">
                            </div>
                            <div class="form-group">
                                <label for="txtmessage">Message</label>
                                <textarea id="txtmessage" class="form-control" name="txtmessage" rows="10">

                                </textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Send Mail</button>
                            </div>
                            <div class="text-info text-center">
                            {{ Session::get("message") }}    
                            </div>    
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