<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LandingPageController extends Controller
{


    public function index(){
        return view('frontend.index');
    }

    public function about(){
        return view('frontend.about-us');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function store(Request $request){
        $request->validate([
           'name'=>'required',
           'email'=>'required |email',
           'message'=>'required'
        ]);
        $contact = Contact::create([
           'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message
        ]);
        Session::flash('msg', 'Thank you. You will be contacted him on a short period of time!');
        return redirect('/contact');

    }

    public function login(){
        return view('frontend.login');
    }
    public  function changeLanguage()
    {
        $currentLanguage = App::getLocale();
        $newLanguage = $currentLanguage == 'en' ? 'ar' : 'en';

        session()->put('user_language', $newLanguage);

        return back();
    }
    //
}
