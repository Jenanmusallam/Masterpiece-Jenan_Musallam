<?php

namespace App\Http\Controllers;
use App\Category;
use App\Halls;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $Categories = Category::all();
        $Halls=Halls::all();
        $categories = Category::all();
        return view('admin.category',compact('categories','Categories','Halls'));
    }

    public function store(Request $request)
    {

        request()->validate([
            'name' => 'required|min:4',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (!empty(request()->image)){
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        }
        else {
            $imageName= 'default_product.jpg';
        }
        $var = new Category;
        $var->name = $request->input('name');
        $var->image = $imageName;
        $var->save();
        return back()->with('success', 'Category created successfully.');
    }

   
    public function edit($id)
    {
         $category = Category::find($id);
       
        return view('admin.editCategory', compact('category'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => 'required|min:4',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (!empty(request()->image)){
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        }
        else {
            $imageName= 'default_product.jpg';
        }
        $category =  Category::find($id);
        $category->name = $request->get('name');
        $category->image = $imageName;
        $category->save();
        return redirect('category')->with('success', 'Category updated!');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return back()->with('success', 'Category deleted!');
    }
}
