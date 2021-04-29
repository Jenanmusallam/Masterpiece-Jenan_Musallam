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
        //  DB::table('booking_halls')
        //     ->select(
        //         'booking_halls.hall_id',
        //         'hall_singles.price',
        //         'hall_singles.discount',
        //         'hall_singles.name',
        //         'hall_singles.image'
        //     )
        //     ->where('booking_halls.hall_id', '=', $id)
        //     ->join('booking_halls', 'hall_singles.id', 'booking_halls.hall_id')
        //     ->get();
        return view('Pages.booking', compact('HallSingle', 'Halls', 'Categories', 'Booking'));
    }

    public function store(Request $request)
    {
        $arr = $request->session()->get('loginUser');
        $customer_id = $arr['id'];
        if ($request->phoneRequired) {
            request()->validate([
                'phone' => 'required',
            ]);
            $Customer = Customer::find($customer_id);
            $Customer->phone = $request->get('phone');
            $Customer->save();
        }
        request()->validate([
            'date' => 'required|exists:states',
            'from_time' => 'required|exists:states',
            'additional_info' => 'required',
            'total_price' => 'required',
            'hall_id' => 'required',
        ]);

        $var = new BookingHall;
        $var->date = $request->input('date');
        $var->from_time = $request->input('from_time');
        $var->additional_info = $request->input('additional_info');
        $var->total_price = $request->input('total_price');
        $var->hall_id = $request->input('hall_id');
        $var->customer_id = $customer_id;
        $var->save();

        // return back()->with('success', 'successfully.');
        $request->session()->forget('cart');
        return redirect("/");
    }
    public function changeStatus($id, $status)
    {
        $booking = BookingHall::find($id);
        $booking->statusPayment = $status;
        $booking->save();
        return back();
    }
    public function edit($id)
    {
        // $admin = Admin::find($id);
        // $halls = Halls::all();
        // return view('admin.editAdmin', compact('admin', 'halls'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'fullName' => 'required|min:4',
        //     'email' => 'required|email',
        //     'password' => 'required|min:6',
        //     'halls' => 'required',
        //     'role' => 'required',
        //     'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        // if (!empty(request()->image)) {
        //     $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        //     request()->image->move(public_path('images'), $imageName);
        // } else {
        //     $admin = Admin::find($id);
        //     $imageName = $admin->image;
        // }

        // $admin = Admin::find($id);
        // $admin->fullName = $request->get('fullName');
        // $admin->email = $request->get('email');
        // $admin->password = $request->get('password');
        // $admin->halls_id = $request->input('halls');
        // $admin->role = $request->input('role');
        // $admin->image = $imageName;
        // $admin->save();

        // return redirect('/admin')->with('success', 'Contact updated!');
    }

    public function destroy($id)
    {
        // $admin = Admin::find($id);
        // $admin->delete();
        // return back()->with('success', 'Admin deleted!');
    }
}
