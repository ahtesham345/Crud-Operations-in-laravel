<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud Operations</title>
    <style>
        .container {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Upadte Data
                            <a href="{{ url('/') }}"  class="btn btn-danger btn-sm float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <form action="{{url('/edit-data/'.$employee->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        @if (session('status'))
                            <h6 class="alert alert-success">{{session('status')}}</h6>
                        @endif
                        <div class="form-group mb-3">
                        <label for="">Name:</label>
                        <input type="text" name="name" class="form-control" id="" value="{{$employee->name}}">
                        </div>
                        <div class="form-group mb-3">
                        <label for="">Phone:</label>
                        <input type="text" name="phone" class="form-control" id="" value="{{$employee->phone}}">
                        </div>
                        <div class="form-group mb-3">
                        <label for="">Address:</label>
                        <input type="text" name="address" class="form-control" id="" value="{{$employee->address}}">
                        </div>
                        <div class="form-group mb-3">
                        <label for="">Image:</label>
                        <input type="file" name="image" class="form-control" id="">
                        <img src="{{asset('upload/employee/'.$employee->image)}}" width="50px" height="50px" alt="">
                        </div>
                        <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>

</html>

