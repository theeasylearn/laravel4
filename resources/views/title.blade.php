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
                <div class="card">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th width="10%">Sr No</th>
                            <th>Title</th>
                            
                        </tr>
                        @php 
                            $count=1
                        @endphp
                        @foreach($result as $title)
                        <tr>
                            <td>{{$count++}}</td>
                            <td>{{$title}}</td>  
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>