<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .nav {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .heading {}
    </style>


    <link rel="stylesheet" href=https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css>

</head>

<body>

    <div class="d-flex justify-content-center">
        <img src="{{url('assets/img/logo.png')}}" width="100%">
    </div>

    <nav class="navbar navbar-light bg-light">

    </nav>

    <div class="container">
        <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
            <h4>Registration</h4>
            <hr>
            <form action="{{route('registration-form')}}" method="post">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif

                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf
                <div class="form-group">
                    <label for="name">First Name</label>
                    <input type="text" class="form-control" placeholder="Enter Full Name" name="name" value="">
                    <span class="text-danger">@error('name') {{$message}} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="name">Surname</label>
                    <input type="text" class="form-control" placeholder="Enter Surname" name="surname" value="">
                    <span class="text-danger">@error('surname') {{$message}} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" placeholder="Enter Email" name="email" value="">
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password" name="password" value="">
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="confirm password">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password"
                        name="password_confirmation" value="">
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>
                <br>
                <div class="form-group">
                    <button class="btn btn-block btn-primary" type="submit">Register</button>
                    <div>
                        <a href="{{route('login')}}">Already Registered !! Login here</a>
            </form>
</body>

</html>