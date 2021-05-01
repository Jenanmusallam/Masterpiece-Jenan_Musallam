<?php

namespace App\Http\Controllers;

use App\Category;
use App\Halls;
use App\Customer;
use App\BookingHall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        $Categories = Category::all();
        $Halls = Halls::all();
        $id = session('loginUser')['id'];
        $customer = Customer::where('id', '=', $id)->get();
        //=======================
        $booking = DB::table('booking_halls')
            ->join('customers', 'booking_halls.customer_id', 'customers.id')
            ->join('hall_singles', 'booking_halls.hall_id', 'hall_singles.id')
            ->orderBy('booking_halls.id')
            ->get();
        $booking_array = [];

        $last_element = $booking->last();
        if ($last_element) {
            $collection = collect($booking);
            for ($i = 1; $i <= $last_element->order_id; $i++) {
                $temp = [];
                $GLOBALS['i'] = $i;
                $temp = $collection->filter(function ($value, $key) {
                    return $value->order_id ==
                        $GLOBALS['i'];
                });
                $booking_array[] = $temp;
            }
        }
        //========================
        $booking = BookingHall::where("customer_id", $id)->get();

        $bookingTable = [];
        foreach ($booking as $book) {
            $bookingTable[] = [
                "book" => $book,
            ];
        }
        return view('Pages.userProfile', compact('Categories', 'Halls', 'customer', 'bookingTable'));
    }

    public function update(Request $request)
    {
        $id = session('loginUser')['id'];
        $request->validate([
            'fullName' => 'required',
            'email' => 'required|email',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
        }
        $customer = Customer::find($id);
        $customer->fullName = $request->input('fullName');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');
        if (isset($imageName)) {
            $customer->image = $imageName;
        }
        $customer->save();
        return redirect('/userProfile');
    }
}
