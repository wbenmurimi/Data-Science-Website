<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function aboutUs()
    {
        return view('about-us.about-us');
    }

    public function contactUs()
    {
        return view('contact us.contact-us');
    }

    public function members()
    {
        return view('members.members');
    }
    public function chat()
    {
        return view('chat.chat');
    }

     public function memberProfile()
    {
        return view('profile.profile');
    }

    public function createComment (Request $request)
    {

        
    }

}
