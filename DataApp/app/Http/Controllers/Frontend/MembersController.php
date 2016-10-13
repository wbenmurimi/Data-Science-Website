<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Auth;
use Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Member;

class MembersController extends Controller{
    public function getMembers(){
        $profiles = Member::get();
        return view('members.members')->with('profiles', $profiles);
    }

    public function getMemberProfile(){
        return view('profile.profile');
    }

    public function postBio(Request $request){
    	$member = new Member();
    	$member->user_id = Auth::User()->id;
    	$member->year_group = "MSIT Class of 2018";
    	$member->profile = $request->profile;
    	$member->avatar = "bmbmbmbm";
    	$member->memberToken = strtoupper(md5($this->randomString(20).time()));
    	$member->save();

    	if ($member->id >= 1) {
    		return Redirect::to('/member-profile')->with('success-message', 'Profile updated successfully');
    	} else {
    		echo "Error";
    	}
    	
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
