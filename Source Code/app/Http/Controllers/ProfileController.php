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
        // $booking = BookingHall::where("customer_id", $id)->get();
        $booking = DB::table('booking_halls')
            ->select(
                'booking_halls.id',
                'booking_halls.statusPayment',
                'booking_halls.date',
                'booking_halls.from_time',
                'booking_halls.duration',
                'booking_halls.additional_info',
                'booking_halls.total_price',
                'hall_singles.id as hallId',
                'hall_singles.name',
                'hall_singles.image'
            )
            ->join("hall_singles", "booking_halls.hall_id", "hall_singles.id")
            ->where("customer_id", $id)
            ->get();
        return view('Pages.userProfile', compact('Categories', 'Halls', 'customer', 'booking'));
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
