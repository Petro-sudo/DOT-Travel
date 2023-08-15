<html lang="en">

<head>
    <title>Travel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<br><br>

<body>
    <div class="row justify-content-center mt-5">
        <a href="{{route('dashboard')}}">BACK</a>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center">
                    Edit Order
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('updateorders',['orders'=> $orders])}}">
                        @csrf
                        @method('put')
                        <div class="mb-3 row">
                            <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name" value="{{$orders->name}}">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="surname" class="col-md-4 col-form-label text-md-end text-start">Surname</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('surname') is-invalid @enderror"
                                    id="surname" name="surname" value="{{$orders->surname}}">
                                @if ($errors->has('surname'))
                                <span class="text-danger">{{ $errors->first('surname') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="checkindate" class="col-md-4 col-form-label text-md-end text-start">Check-in
                                Date
                            </label>
                            <div class="col-md-6">
                                <input type="date" class="form-control @error('checkindate') is-invalid @enderror"
                                    id="checkindate" name="checkindate" value="{{ $orders->checkindate }}">
                                @if ($errors->has('checkindate'))
                                <span class="text-danger">{{ $errors->first('checkindate') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="checkoutdate" class="col-md-4 col-form-label text-md-end text-start">Check-out
                                Date
                            </label>
                            <div class="col-md-6">
                                <input type="date" class="form-control @error('checkoutdate') is-invalid @enderror"
                                    id="checkoutdate" name="checkoutdate" value="{{ $orders->checkoutdate }}">
                                @if ($errors->has('checkoutdate'))
                                <span class="text-danger">{{ $errors->first('checkoutdate') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="order_number" class="col-md-4 col-form-label text-md-end text-start">Order
                                Number
                            </label>
                            <div class="col-md-6">
                                <label for="order_number" class="col-md-4 col-form-label text-md-end text-start">
                                    {{ $orders->order_number}}</label>
                            </div>
                        </div>
                        <div class="3 rmb-ow">
                            <label for="ordernumber">Reason For Travelling</label>
                            <div class="form-group form-check col-md-6 ">
                                <input type="checkbox" class="form-check-input" id="checkbox" name="reason"
                                    value="Accomodation">
                                <label class="form-check-label" for="checkbox">Accomodation</label>
                            </div>

                            <div class="form-group form-check col-md-6">
                                <input type="checkbox" class="form-check-input" id="checkbox" name="reason"
                                    value="Car Hire">
                                <label class="form-check-label" for="checkbox">Car Hire</label>
                            </div>
                            <div class="form-group form-check col-md-6">
                                <input type="checkbox" class="form-check-input" id="checkbox" name="reason"
                                    value="Flight">
                                <label class="form-check-label" for="checkbox">Flight</label>
                            </div>

                            <div class="form-group form-check col-md-6">
                                <input type="checkbox" class="form-check-input" id="checkbox" name="reason"
                                    value="Conference">
                                <label class="form-check-label" for="checkbox">Conference</label>

                            </div>
                        </div>
                        <div class="mb-3 row">
                            <input type="submit" class="col-md-3 offset-md-5 btn btn-primary"
                                style="background-color: #85603d;" value="Update" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>