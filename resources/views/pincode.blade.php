<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Tutorials</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
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
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody id='pincode'>
                                @foreach($pincodes as $pincode)
                                <tr id='pincode-{{$pincode->id}}'>
                                    <td>{{$pincode->city}}</td>
                                    <td>{{$pincode->zipcode}}</td>
                                    <td><a data-id="{{$pincode->id}}" class='btn btn-warning edit' href='#'>Edit</a></td>
                                    <td><a data-id="{{$pincode->id}}" class='btn btn-danger delete' href='#'>Delete</a></td>
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
        <form action="" id="pincodeform" >
            <div class="form-group">
                <label for="city">City</label>
                <input id="city" class="form-control" type="text" name="city" required />
            </div>
            <div class="form-group">
                <label for="zipcode">Zipcode</label>
                <input id="zipcode" class="form-control" type="text" name="zipcode" required />
            </div>
            <input type="hidden" name="pincode_id" id="pincode_id" value="0" /> 
            @csrf
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnsave" value="add">Save</button>
      </div>
    </div>
      </div>
    </div>
    <!-- model dialog box -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script>
        $(document).ready(function(){
            $("#btnsave").click(function(e){
                var ajaxURL = "/pincode/create/";
                var type = "post";
                var state = $("#btnsave").val(); //
                if(state!="add")
                {
                    ajaxURL = "pincode/update/";
                }
                var formdata = {
                    city : $("#city").val(),
                    zipcode : $("#zipcode").val(),
                };
                var token = $("input[name='_token']").val();
                $.ajaxSetup({
                    headers:{
                        'x-csrf-token':token
                    }
                })
                e.preventDefault();
                $.ajax({
                    type: type,
                    data: formdata,
                    url: ajaxURL,
                    datatype: 'json',
                    success: function(data){
                        console.log(JSON.stringify(data)); 
                        var row = null;
                        if(state=="add")
                        {
                            row = "<tr id='pincode-" + data.id + "'>";   
                            row += "<td>" + data.city +"</td>";   
                            row += "<td>" + data.zipcode +"</td>";   
                            row += "<td><a data-id=" + data.id +  " href='#' class='btn btn-warning edit'>Edit</a></td>";   
                            row += "<td><a data-id=" + data.id + " href='#' class='btn btn-danger delete'>delete</a></td></tr>";   
                            $("#pincode").prepend(row);
                        }
                    },
                    
                    error: function(error){
                        console.log(JSON.stringify(data)); 
                    },
                });
                $("#pincodeform").trigger("reset"); //reset(clear) form
                $("#exampleModal").modal('hide'); // hide modal dialogbox
            });
            
            $("body").on("click",".delete",function(e){
                
            });
        });
    </script>
</body>
</html>