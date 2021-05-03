<?php

namespace App\Http\Controllers;

use App\Category;
use App\HallSingle;
use App\Halls;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowPublicController extends Controller
{
    public function index()
    {
        $Categories = Category::all();
        $Halls = Halls::all();
        $DiscountHalls = HallSingle::where('discount', '!=', '0')->get();
        $BestHalls = HallSingle::limit(3)->get();
        return view('Pages.index', compact('DiscountHalls', 'Categories', 'BestHalls', 'Halls'));
    }

    public function Categories()
    {
        $Categories = Category::select('id', 'name')->get();
        $Halls = DB::table('halls')
            ->select('halls.id', 'halls.name', 'halls.image', 'halls.numHulls', 'categories.name AS category_name')
            ->join("categories", "halls.category_id", "categories.id")
            ->paginate(10);
        $DiscountHalls = HallSingle::where('discount', '!=', '0')->get();
        return view('Pages.Category', compact('Halls', 'Categories', 'DiscountHalls'));
    }
    public function CategoriesID($id)
    {
        // $Halls = Halls::all();
        $Halls = DB::table('halls')
            ->select('halls.id', 'halls.name', 'halls.image', 'halls.numHulls', 'categories.name AS category_name')
            ->where('category_id', $id)
            ->join("categories", "halls.category_id", "categories.id")
            ->paginate(6);

        $Categories = Category::select('id', 'name')->get();
        $DiscountHalls = HallSingle::where('discount', '!=', '0')->paginate(5);
        return view('Pages.Category', compact('Halls', 'Categories', 'DiscountHalls'));
    }
    public function Halls()
    {
        $Categories = Category::all();
        $HallSingle = HallSingle::paginate(9);
        $Halls = Halls::select('id', 'name')->get();
        return view('Pages.HallsPage', compact('HallSingle', 'Categories', 'Halls'));
    }
    public function HallsID($id)
    {
        $Categories = Category::all();
        $HallSingle = HallSingle::where('halls_id', $id)->paginate(9);
        $Halls = Halls::select('id', 'name')->get();
        return view('Pages.HallsPage', compact('HallSingle', 'Categories', 'Halls'));
    }
    public function HallSingle($id)
    {
        $Categories = Category::all();
        $Halls = Halls::all();
        $HallSingle = DB::table('hall_singles')
            ->select('hall_singles.id', 'hall_singles.name', 'hall_singles.image', 'hall_singles.price', 'hall_singles.discount', 'hall_singles.video', 'hall_singles.style', 'hall_singles.description',  'hall_singles.is_available', 'halls.name AS halls_name', 'halls.id AS halls_id', 'halls.image AS halls_image', 'halls.location AS halls_location', 'categories.name AS category_name')
            ->where('hall_singles.id', $id)
            ->join("halls", "hall_singles.halls_id", "halls.id")
            ->join("categories", "halls.category_id", "categories.id")
            ->get();
        $HallSingle = $HallSingle[0];
        $reviews = DB::table('customers')
            ->select('reviews.comment', 'reviews.rate', 'customers.fullName', 'customers.image')
            ->where('reviews.hall_id', '=', $id)
            ->join('reviews', 'customers.id', 'reviews.customer_id')
            ->get();
        $halls_id = $HallSingle->halls_id;

        $relatedHallSingle = DB::table('hall_singles')
            ->where('halls_id', "=", $halls_id)
            ->where("id", "!=", $id)
            ->get();
        $averageRate = 0;
        if (count($reviews)) {

            $total = 0;

            foreach ($reviews as $review) {
                $total += $review->rate;
            }
            $averageRate = round($total / count($reviews));
        }
        return view('Pages.HallSinglePage', compact('HallSingle', 'Categories', 'reviews', "relatedHallSingle", "averageRate", "Halls"));
    }


    public function search(Request $request)
    {
        $search = $request->input('search');
        $Halls = Halls::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->paginate(4);
        $Categories = Category::select('id', 'name')->get();
        $DiscountHalls = HallSingle::where('discount', '!=', '0')->get();
        return view('Pages.Category', compact('Halls', 'Categories', 'DiscountHalls'));
    }
}
