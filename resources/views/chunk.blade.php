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
            <div class="col-lg-12 mt-5">
                @php 
                    $count=1
                @endphp
                @foreach($result->chunk(5) as $RowSet)
                <div class="card m-3 shadow">
                    <div class="card-title bg-primary text-white">
                        <h3>Set No {{$count++}}</h3>
                    </div>
                    @foreach($RowSet as $row)
                        Title = {{$row->title }} <br/>
                        photo = {{$row->photo }} <br/>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>