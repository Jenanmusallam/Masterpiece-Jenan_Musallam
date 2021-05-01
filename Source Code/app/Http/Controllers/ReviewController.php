<?php

namespace App\Http\Controllers;

use App\igration;
use App\Reviews;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
    }


    public function store(Request $request)
    {
        $customer_id = session('loginUser')['id'];
        $hull_id  = $request->id;
        $request->validate([
            'comment' => 'required',
        ]);
        $review = new Reviews();
        $review->customer_id = $customer_id;
        $review->hall_id  = $hull_id;
        $review->comment = $request->get('comment');
        $review->rate = $request->get('rate');
        $review->save();
        return redirect('/HallSingle/' . $hull_id);
    }


    public function edit(igration $igration)
    {
        //
    }

    public function update(Request $request, igration $igration)
    {
        //
    }

    public function destroy(igration $igration)
    {
    }
}
