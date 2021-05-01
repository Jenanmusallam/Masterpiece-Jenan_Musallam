<?php

namespace App\Http\Controllers;

use App\Image;
use App\HallSingle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImagesController extends Controller
{
    public function index()
    {
        $Image = DB::table('images')
            ->select('images.id', 'images.img_name', 'hall_singles.name AS hall_name')
            ->join("hall_singles", "images.hall_id", "hall_singles.id")
            ->get();
        $Hall = HallSingle::all();
        return view('admin.images', compact('Image', 'Hall'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|min:4',
            'hall' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default_product.jpg';
        }
        $images = new Image;
        $images->img_name = $request->input('name');
        $images->hall_id = $request->input('hall');
        $images->img = $imageName;
        $images->save();
        return back()->with('success', 'Image created successfully.');
    }

    public function edit($id)
    {
        $Images = Image::find($id);
        $Hall = HallSingle::all();

        return view('admin.editImage', compact('Images', 'Hall'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
           'name' => 'required|min:4',
           'hall' => 'required',
           'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default_product.jpg';
        }
        $images = Image::find($id);
        $images->img_name = $request->get('name');
        $images->hall_id = $request->get('hall');
        $images->img = $imageName;
        $images->save();
        return redirect('admin/images')->with('success', 'Image updated!');
    }

    public function destroy($id)
    {
        $Image = Image::find($id);
        $Image->delete();
        return back()->with('success', 'Image deleted!');
    }
}
