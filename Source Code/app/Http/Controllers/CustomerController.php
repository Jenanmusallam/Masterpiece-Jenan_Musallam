<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
      public function index (){
        $Customers = Customer::all();
        return view('admin.customer',compact('Customers'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'fullName' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'phone'=>'required |numeric |min:10',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (!empty(request()->image)){
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        }
        else {
            $imageName= 'default.png';
        }


        $var = new Customer;
        $var->fullName = $request->input('fullName');
        $var->email = $request->input('email');
        $var->password = $request->input('password');
         $var->phone = $request->input('phone');
        $var->image = $imageName;

        $var->save();
        return back()->with('success', 'Customer created successfully.');
    }

    public function edit($id)
    {
        $Customer = Customer::find($id);
        return view('admin.editCustomer', compact('Customer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fullName' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'phone'=>'required |numeric |min:10',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty(request()->image)){
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        }
        else {
            $Customer = Customer::find($id);
            $imageName= $Customer-> image;
        }

        $Customer = Customer::find($id);
        $Customer->fullName =  $request->get('fullName');
        $Customer->email = $request->get('email');
        $Customer->password = $request->get('password');
        $Customer->phone = $request->get('phone');
        $Customer->image = $imageName;
        $Customer->save();
        return redirect('/admin/Customer')->with('success', 'Customer updated!');
    }

    public function destroy($id)
    {
        $Customer = Customer::find($id);
        $Customer->delete();
        return back()->with('success', 'Customer deleted!');
    }
}
