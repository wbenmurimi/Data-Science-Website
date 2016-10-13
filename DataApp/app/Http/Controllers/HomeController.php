<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Comment;
use App\Model\Contact;

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
    public function index(){
        return view('home');
    }
    public function welcome(){
        $comments = Comment::paginate(4);
        return view('welcome')->with('comments', $comments);
    }
    public function aboutUs()
    {
        return view('about-us.about-us');
    }

    public function contactUs(){
        return view('contact us.contact-us');
    }

    public function postContactUs(Request $request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        if ($contact->id >= 1) {
            return back()->with('success-message', 'Thank you for contacting us');
        } else {
            return back()->with('error-message', 'Error sending message. Please try again');
        }
        
    }

    public function chat()
    {
        return view('chat.chat');
    }

    public function createComment (Request $request)
    {

        
    }

}
