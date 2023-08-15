<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Orders;
//use Hash;
//use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class CustomAuthContoller extends Controller
{
    public function registration()
    {
        return view("registration");
    }


    public function login()
    {
        return view("login");
    }


    public function dashboard(Request $request)
    {
        return view("dashboard", [
            'orders' => Orders::all(),
        ]);
    }

    public function order()
    {
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('travel', compact('data'));
    }




    public function registrationForm(Request $request)
    {


        $validatedData = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required |email|unique:users',
            'password' => 'required|confirmed',

        ]);


        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        // Redirect the user to a success page or back to the form
        return redirect('login');


    }


    public function loginUser(Request $request)
    {

        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]
        );
        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');

            } else {
                return back()->with('fail', 'Password is Invalid');
            }
        } else {
            return back()->with('fail', 'This email is not registered');
        }

    }

    public function travelOrder(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'checkindate' => 'required',
            'checkoutdate' => 'required',
            'order_number' => 'required',
            'reason' => 'required',

        ]);
        $order = new Orders();
        $order->name = $request->name;
        $order->surname = $request->surname;
        $order->checkindate = $request->checkindate;
        $order->checkoutdate = $request->checkoutdate;
        $order->order_number = $request->order_number;
        $order->reason = $request->reason;
        $order->save();
        // Redirect the user to a success page or back to the form
        return redirect('dashboard');
    }

    public function logout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');
        }
    }

    //edit User
    public function edit(Orders $orders)
    {
        return view('editOrders', ['orders' => $orders]);
    }

    public function updateOrder(Orders $orders, Request $request)
    {
        $data = $request->validate([
            'name' => '',
            'surname' => '',
            'checkindate' => '',
            'checkoutdate' => '',
            'reason' => ''

        ]);
        $orders->update($data);
        return redirect(route('dashboard'));
        //->with('suceess','msg for success')

    }

    public function search()
    {
        $search_row = $_GET['search'];
        $orders = Orders::where('surname', 'LIKE', '%' . $search_row . '%')
            ->orWhere('name', 'LIKE', '%' . $search_row . '%')
            ->orWhere('order_number', 'LIKE', '%' . $search_row . '%')
            ->get();
        return view('search', compact('orders'));
    }
    //
}