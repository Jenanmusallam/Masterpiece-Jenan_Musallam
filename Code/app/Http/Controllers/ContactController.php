<?php

namespace App\Http\Controllers;
use App\Contact;
use App\Category;
use App\Halls;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function index()
    {   
        $Contact = Contact::all();
        return view('admin.contant',compact('Contact'));
    }

    public function contact(){
        $Categories = Category::all();
        $Halls=Halls::all();
       return view('Pages.Contact',compact('Categories','Halls'));
   }

//    public function create(){
//        return view('Pages.page-contact');
//    }

   public function store(Request $request){
      
       request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required | min:8 | max:50',
        ]);

       $contact = new Contact();
       $contact->contact_name  = $request->input('name');
       $contact->contact_email = $request->input('email');
       $contact->contact_message =$request->input('message');
       $contact->save();
       return back()->with('success', 'Message sent successfully!');
   }

}
