<?php

namespace App\Http\Controllers;
use App\Category;
use App\Halls;
class cartController extends Controller
{
      public function index()
    {
        $Categories = Category::all();
        $Halls=Halls::all();
        return view('Pages.page-404', compact( 'Categories', 'Halls'));
    }
}
