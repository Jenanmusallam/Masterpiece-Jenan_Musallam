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
        // $Booking = BookingHall::all();
        $Booking = DB::table('booking_halls')
            ->select('booking_halls.id', 'booking_halls.date', 'booking_halls.from_time', 'booking_halls.total_price', 'booking_halls.statusPayment', 'customers.fullName', 'customers.phone', 'hall_singles.name')
            ->join("customers", "booking_halls.customer_id", "customers.id")
            ->join("hall_singles", "booking_halls.hall_id", "hall_singles.id")
            ->get();
        return view("admin.booking", compact("Booking", 'Categories', 'Halls'));
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
        $booking = new BookingHall;
        $booking->customer_id = $customer_id;
        $booking->save();
        $request->session()->forget('book');

        return redirect("/");
    }
}
