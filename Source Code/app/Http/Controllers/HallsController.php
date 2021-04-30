<?php

namespace App\Http\Controllers;

use App\Category;
use App\Halls;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HallsController extends Controller
{
     public function index()
    {
        $Halls = DB::table('halls')
            ->select('halls.id', 'halls.name', 'halls.image', 'halls.description', 'halls.location', 'halls.numHulls', 'categories.name AS category_name')
            ->join("categories", "halls.category_id", "categories.id")
            ->get();
        $Categories = Category::all();
        return view('admin.halls', compact('Halls', 'Categories'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|min:4',
            'location' => 'required',
            'numHulls' => 'required | numeric | min:0 | max:100',
            'description' => 'required',
            'category' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default_product.jpg';
        }
        $halls = new Halls;
        $halls->name = $request->input('name');
        $halls->location = $request->input('location');
        $halls->numHulls = $request->input('numHulls');
        $halls->description = $request->input('description');
        $halls->category_id = $request->input('category');
        $halls->image = $imageName;
        $halls->save();
        return back()->with('success', 'Halls created successfully.');
    }

    public function edit($id)
    {
        $halls = Halls::find($id);
        $categories = Category::all();

        return view('admin.editHalls', compact('halls', 'categories'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => 'required|min:4',
            'location' => 'required',
            'numHulls' => 'required | numeric | min:0 | max:100',
            'description' => 'required',
            'category' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default_product.jpg';
        }
        $halls = Halls::find($id);
        $halls->name = $request->get('name');
        $halls->location = $request->get('location');
        $halls->numHulls = $request->get('numHulls');
        $halls->description = $request->get('description');
        $halls->category_id = $request->get('category');
        $halls->image = $imageName;
        $halls->save();
        return redirect('halls')->with('success', 'Halls updated!');
    }

    public function destroy($id)
    {
        $Halls = Halls::find($id);
        $Halls->delete();

        return back()->with('success', 'Halls deleted!');
    }
}
