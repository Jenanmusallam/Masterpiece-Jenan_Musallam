<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Halls;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
      public function index()
    {
          $admins = DB::table('admins')
            ->select('admins.id', 'admins.fullName', 'admins.role', 'admins.email', 'admins.password', 'admins.image', 'halls.name AS halls_name')
            ->join("halls", "admins.halls_id", "halls.id")
            ->get();
          $halls = Halls::all();
        return view('admin.index', compact('admins','halls'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'fullName' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'role'=>'required',
            'halls'=>'required',
        ]);

        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default.png';
        }

        $var = new Admin;
        $var->fullName = $request->input('fullName');
        $var->email = $request->input('email');
        $var->password = $request->input('password');
        $var->role = $request->input('role');
        $var->halls_id=$request->input('halls');
        $var->image = $imageName;

        $var->save();
        return back()->with('success', 'Admin created successfully.');
    }

    public function edit($id)
    {
        $admin = Admin::find($id);
        $halls = Halls::all();
        return view('admin.editAdmin', compact('admin','halls'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fullName' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'halls'=>'required',
            'role'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $admin = Admin::find($id);
            $imageName = $admin->image;
        }

        $admin = Admin::find($id);
        $admin->fullName = $request->get('fullName');
        $admin->email = $request->get('email');
        $admin->password = $request->get('password');
        $admin->halls_id=$request->input('halls');
        $admin->role=$request->input('role');
        $admin->image = $imageName;
        $admin->save();

        return redirect('/admin')->with('success', 'Contact updated!');
    }

    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return back()->with('success', 'Admin deleted!');
    }
}
