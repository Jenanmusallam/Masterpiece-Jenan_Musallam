<?php

namespace App\Http\Controllers;

use App\Customer;
use App\BookingHall;
use App\Category;
use App\Halls;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function index()
    {
        $Categories = Category::all();
        $Halls = Halls::all();
        $Booking = BookingHall::all();
        return view("admin.booking", compact("Booking", 'Categories', 'Halls'));
    }

    public function book($id)
    {

        // $this->validate(request(), [
        //     'date' => 'required',
        //     'time' => 'required'
        // ]);
        // $id->users()->attach(Auth::id(), ['date' => request()->date, "time" => request()->time]);
        // // session()->flash('message', 'Booked Successfully');
        // return redirect()->back()->with('message', 'Booked Successfully');
        $Categories = Category::all();
        $Halls = Halls::all();
        $Booking = BookingHall::all();

        return view("Pages.booking", compact("Booking", 'Categories', 'Halls'));
    }
    public function changeStatus($id, $status)
    {
        $booking = BookingHall::find($id);
        $booking->statusPayment = $status;
        $booking->save();
        return back();
    }

    // ==================
    public function store(Request $request)
    {
        $arr = $request->session()->get('loginUser');
        $customer_id = $arr['id'];
        // $totalPrice = 0;
        // $totalQty = 0;
        // $productsPrice = DB::table('products')
        //     ->select('price', 'discount')
        //     ->where('id', '=', $item["product"])
        //     ->get();
        // $totalPrice += ($productsPrice[0]->price - ($productsPrice[0]->price * $productsPrice[0]->discount / 100)) * $item["qty"];
        // $totalQty += $item["qty"];
        $booking = new BookingHall;
        $booking->customer_id = $customer_id;
        // $booking->total_quantity = $totalQty;
        // $booking->total_price = $totalPrice;
        // $booking->address = $request->address;
        $booking->save();
        $request->session()->forget('book');

        return redirect("/");
    }
}
