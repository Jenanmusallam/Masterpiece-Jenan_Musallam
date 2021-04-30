<?php

namespace App\Http\Controllers;

use App\Reviews;
use Illuminate\Http\Request;
class ReviewController extends Controller
{
    public function index()
    {
    }


    public function store(Request $request)
    {
        //Get customer and product id
        $customer_id = session('loginUser')['id'];
        $hull_id  = $request->id;
        $request->validate([
            'comment' => 'required',
        ]);
        $review = new Reviews();
        $review->customer_id = $customer_id;
        $review->hull_id  = $hull_id;
        $review->comment = $request->get('comment');
        $review->rate = $request->get('rate');
        $review->save();

        return redirect('/hull/' . $hull_id);
    }


}