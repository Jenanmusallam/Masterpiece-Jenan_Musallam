<?php

namespace App\Http\Controllers;
use App\Category;
use App\Halls;
use App\HallSingle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HallController extends Controller
{
      public function index()
    {   $Categories = Category::all();
        $HallSingle = DB::table('hall_singles')
            ->select('hall_singles.id', 'hall_singles.name', 'hall_singles.image', 'hall_singles.style', 
            'hall_singles.video', 'hall_singles.price', 'hall_singles.discount', 
            'hall_singles.description', 'hall_singles.is_available', 'halls.name AS halls_name')
            ->join("halls", "hall_singles.halls_id", "halls.id")
            ->get();
        $Halls = Halls::all();
        return view('admin.hall', compact('HallSingle', 'Halls','Categories'));
    }
    public function create()
    {
        $Categories = Category::all();
        $Halls = Halls::all();
        return view('Pages.HallSinglePage', compact( 'Halls','Categories'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|min:4',
            'style' => 'required',
            'video' => 'required ',
            'price' => 'required | numeric | min:0 ',
            'discount' => 'required | numeric | min:0 | max:100',
            'description' => 'required',
            'is_available' => 'required',
            'halls_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default_product.jpg';
        }
        $halls = new HallSingle;
        $halls->name = $request->input('name');
        $halls->style = $request->input('style');
        $halls->video = $request->input('video');
        $halls->price = $request->input('price');
        $halls->discount = $request->input('discount');
        $halls->description = $request->input('description');
        $halls->is_available = $request->input('is_available');
        $halls->halls_id = $request->input('halls_id');
        $halls->image = $imageName;
        $halls->save();
        return back()->with('success', 'Hall created successfully.');
    }

    public function edit($id)
    {
        $hall = HallSingle::find($id);
        $Halls = Halls::all();

        return view('admin.editHallSingle', compact('hall', 'Halls'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => 'required|min:4',
            'style' => 'required',
            'video' => 'required ',
            'price' => 'required | numeric | min:0 | max:100',
            'discount' => 'required | numeric | min:0 | max:100',
            'description' => 'required',
            'is_available' => 'required',
            'halls_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default_product.jpg';
        }
        $halls = HallSingle::find($id);
        $halls->name = $request->get('name');
        $halls->style = $request->get('style');
        $halls->video = $request->get('video');
        $halls->price = $request->get('price');
        $halls->discount = $request->get('discount');
        $halls->description = $request->get('description');
        $halls->is_available = $request->get('is_available');
        $halls->halls_id = $request->get('halls_id');
        $halls->image = $imageName;
        $halls->save();
        return redirect('hall')->with('success', 'Hall updated!');
    }

    public function destroy($id)
    {
        $Halls = HallSingle::find($id);
        $Halls->delete();
        return back()->with('success', 'Hall deleted!');
    }
}
