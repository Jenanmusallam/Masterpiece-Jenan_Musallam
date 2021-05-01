<?php

namespace App\Http\Controllers;

use App\Category;
use App\HallSingle;
use App\Halls;
use App\Customer;
use App\BookingHall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookUserController extends Controller
{
    public function index($id)
    {
        $Categories = Category::all();
        $HallSingle = HallSingle::find($id);
        $Halls = Halls::all();
        $Booking = BookingHall::all();
        $customer = Customer::find($id);
        return view('Pages.booking', compact('HallSingle', 'Halls', 'Categories', 'Booking', 'customer'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $arr = $request->session()->get('loginUser');
        $customer_id = $arr['id'];
        request()->validate([
            'date' => 'required',
            'from_time' => 'required',
            'additional_info' => 'required',
            'total_price' => 'required',
            'statusPayment' => 'required',
            'hall_id' => 'required',
        ]);
        $var = new BookingHall;
        $var->date = $request->input('date');
        $var->from_time = $request->input('from_time');
        $var->additional_info = $request->input('additional_info');
        $var->total_price = $request->input('total_price');
        $var->hall_id = $request->input('hall_id');
        $var->statusPayment = $request->input('statusPayment');
        $var->customer_id = $customer_id;
        $var->save();
        return back()->with('success', 'successfully.');
        $request->session()->forget('checkout');
        return redirect("/");
    }
    public function changeStatus($id, $status)
    {
        $booking = BookingHall::find($id);
        $booking->statusPayment = $status;
        $booking->save();
        return back();
    }

    public function Checkout()
    {
        $id = session('loginUser')['id'];
        $customers = Customer::where('id', '=', $id)->get();
        $customer = $customers[0];
        return view('Pages.checkout', compact('', 'customer'));
    }
}
