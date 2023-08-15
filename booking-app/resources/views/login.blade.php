<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<!------ Include the above in your HEAD tag ---------->
<script></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('assets/css/registration.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<style>
.container {
    display: flex;
    justify-content: center;
    align-items: center;


}
</style>
<div class="d-flex justify-content-center">
    <img src="{{url('assets/img/logo.png')}}" width="100%">
</div>

<div class="container">

    <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
        <h4>Login</h4>
        <hr>

        <form action="{{route('login-user')}}" method="post">
            @if (Session::has('success'))

            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if (Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{old('email')}}">
                <span class="text-danger">@error('email') {{$message}} @enderror</span>
            </div>



            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Enter Password" name="password" value="">
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
            </div>
            <br>
            <div class="form-group">
                <button class="btn btn-block btn-primary" type="submit">Login</button>
                <div>
                    <a href="{{route('registration')}}">New User !! Register here</a>


        </form>