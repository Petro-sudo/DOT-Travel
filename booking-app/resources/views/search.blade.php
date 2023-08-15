<title>Travel</title>
<!-- Include Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- Include Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('assets/css/registration.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<body>
    <div class="d-flex justify-content-center">
        <img src="{{url('assets/img/logo.png')}}" width="100%">
    </div>
    <a href="{{route('dashboard')}}" style="text-align: left;">BACK</a>

    <a href="logout" style="float:right;">Logout</a>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center;font-weight: bold;">Customers Bookings</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Order Number</th>
                                <th scope="col">Name</th>
                                <th scope="col">Surname</th>
                                <th scope="col">Check In Date</th>
                                <th scope="col">Check Out Date</th>
                                <th scope="col">Travel Reason</th>
                                <th>EDIT</th>


                            </tr>
                        </thead>
                        <div>
                            @if(session()->has('notfound'))
                            <label>
                                {{session('notfound')}}
                            </label>
                            @endif
                        </div>
                        <tbody>

                            @foreach ($orders as $order)
                            <tr>
                                <td class="text-center">{{$order->order_number}}</td>
                                <td class="text-center">{{$order->name}}</td>
                                <td class="text-center">{{$order->surname}}</td>
                                <td class="text-center">{{$order->checkindate}}</td>
                                <td class="text-center">{{$order->checkoutdate}}</td>
                                <td class="text-center">{{$order->reason}}</td>
                                <td>
                                    <a href="{{route('editorders',['orders'=> $order->id])}}">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </div>
            </div>
        </div>
</body>

</html>