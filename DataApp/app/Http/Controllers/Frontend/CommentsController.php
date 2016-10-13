<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use Redirect;
use App\Http\Controllers\Controller;
use App\Model\Comment;

class CommentsController extends Controller{
    public function postComment(Request $request){
    	$comment = new Comment();
    	$comment->name = $request->name;
    	$comment->email = $request->email;
    	$comment->subject = $request->subject;
    	$comment->message = $request->message;
    	$comment->latitude = $request->latitude;
    	$comment->longitude = $request->longitude;
    	$comment->commentToken = strtoupper(md5($this->randomString(20).time()));
    	$comment->save();

    	if($comment->id >= 1){
    		return Redirect::to('/')->with('success-message', 'Thank you for your comment');
    	}else{
    		return Redirect::to('/')->with('error-message', 'Error processing comment. Please try again');
    	}
    }

    public function getAllComments(){
    	$comments = Comment::get();
    	echo bcrypt("benja");
    	//return $comments->toJson();
    }

    public function randomString($len){
    	$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmonpqrstuvwxyz";
    	$result = "";
	    $charArray = str_split($chars);
	    for($i = 0; $i < $len; $i++){
		    $randItem = array_rand($charArray);
		    $result .= "".$charArray[$randItem];
	    }
	    return $result;
    }
}
