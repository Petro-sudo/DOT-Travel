<!DOCTYPE html>
<html>

<head>
    <title>Travel</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- !-- bootstrap -->

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

</head>

<body>
    <div class="d-flex justify-content-center">
        <img src="{{url('assets/img/logo.png')}}" width="100%">
    </div>

    <nav class="navbar navbar-light bg-light">
        <a href="{{route('dashboard')}}">BACK</a>
        <form class="form-inline">
            <a href="{{route('logout')}}"><b>Logout</b></a>
        </form>
    </nav>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div style="text-align: center;">Hi Admin {{$data->name}} {{$data->surname}}</div>
            <div class="card">
                <div class="card-header" style="text-align: center; font-weight:bold;">Create Bookings For A User
                </div>
                <div class="card-body">
                    <form action="{{route('travel-Order')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                            <span class="text-danger">@error('name'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="surname">Surname</label>
                            <input type="text" class="form-control" id="surname" placeholder="Enter surname"
                                name="surname">
                            <span class="text-danger">@error('surname'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="checkindate">Check-in Date</label>
                            <input type="date" class="form-control" id="checkindate" name="checkindate">
                            <span class="text-danger">@error('checkindate'){{$message}}@enderror</span>
                        </div>
                        <div class="col-sm- mb-3">
                            <div class="form-group">
                                <label for="checkoutdate">Check-out Date</label>
                                <input type="date" class="form-control" id="checkoutdate" name="checkoutdate">
                                <span class="text-danger">@error('checkoutdate'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <label for="ordernumber">Generate Order Number</label>
                                <input type="text" id="number-input" class="form-control" placeholder="Order Number"
                                    name="order_number">
                            </div>

                            <div class="col-sm-6 mb-3">
                                <br>
                                <button type="button" id="generate-btn" class="btn btn-primary">Generate
                                    Number</button>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="ordernumber" style="font-weight:bold ;">Reason For Travelling</label>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox" name="reason"
                                    value="Accomodation">
                                <label class="form-check-label" for="checkbox">Accomodation</label>
                            </div>

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox" name="reason"
                                    value="Car Hire">
                                <label class="form-check-label" for="checkbox">Car Hire</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox" name="reason"
                                    value="Flight">
                                <label class="form-check-label" for="checkbox">Flight</label>
                            </div>

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox" name="reason"
                                    value="Conference">
                                <label class="form-check-label" for="checkbox">Conference</label>

                            </div>

                            <div>
                                <span class="text-danger">@error('order_number'){{$message}}@enderror</span>
                            </div>

                            <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
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

        <script>
        // Event listener for the generate button
        document.getElementById('generate-btn').addEventListener('click', function() {
            var today = new Date();
            var date = today.getFullYear().toString() +
                (today.getMonth() + 1).toString().padStart(2, '0') +
                today.getDate().toString().padStart(2, '0');

            // Generate a random five-digit order number
            var randomNumber = Math.floor(Math.random() * (999 - 100 + 1)) + 100;

            var orderNumber = 'TOR' + date + randomNumber;

            document.getElementById('number-input').value = orderNumber;
        });
        </script>
</body>

</html>