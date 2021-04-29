<?php

namespace App\Http\Controllers;
use App\Category;
use App\Halls;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
     public function index()
    {
        $Categories = Category::all();
        $Halls=Halls::all();
        return view('Pages.index', compact('Categories','Halls'));
    }
}
