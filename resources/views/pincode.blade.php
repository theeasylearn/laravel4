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
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <h3>Pincodes</h3>
                    </div>
                    <div class="card-body">
                        <p class='m-1 text-right'>
                            <button type=button class='btn btn-primary'
                            data-toggle="modal" data-target="#exampleModal">Add pincode</button>
                        </p>
                        <table class="table table-bordered table-striped m-1" width='100%'>
                            <thead>
                                <tr>
                                    <th>City</th>
                                    <th>Zipcode</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pincodes as $pincode)
                                <tr>
                                    <td>{{$pincode->city}}</td>
                                    <td>{{$pincode->zipcode}}</td>
                                    <td>{{$pincode->created_at}}</td>
                                    <td>{{$pincode->modified_at}}</td>
                                    <td><a href="{{$pincode->id}}" class='btn btn-warning'>Edit</a></td>
                                    <td><a href="{{$pincode->id}}" class='btn btn-danger'>Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- model dialog box -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel">Add new pincode</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="form-group">
                <label for="city">City</label>
                <input id="city" class="form-control" type="city" name="city" required />
            </div>
            <div class="form-group">
                <label for="zipcode">Zipcode</label>
                <input id="zipcode" class="form-control" type="text" name="zipcode" required />
            </div>
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save </button>
      </div>
    </div>
      </div>
    </div>
    <!-- model dialog box -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>