<?php

namespace App\Http\Controllers;
use App\Category;
use App\Halls;

class AboutController extends Controller
{
      public function index()
    {
        $Categories = Category::all();
        $Halls=Halls::all();
        return view('Pages.about',compact('Categories','Halls'));
    }
}
