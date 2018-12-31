<?php

namespace App\Http\Controllers;

use App\Friend;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mail;
use App\Mail\verifyFriendEmail;
use Illuminate\Support\Facades\Redirect;

class FriendsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function invite(Request $request)
    {
        $this->validate($request, [
            'name' =>'required',
            'email' => 'required'
        ]);

        $user = Auth::user();
        $user_id = $user->id;

        $friend = new Friend;
        $friend->user_id = $user_id;
        $friend->name = $request->input('friend_name');
        $friend->last_name = $request->input('friend_last_name');
        $friend->email = $request->input('friend_email');
        $friend->verifyToken = Str::random(40);
        $friend->status = '0';
        $friend->save();

        $thisFriend = Friend::findOrFail($friend->id);
        $this->sendEmail($thisFriend);

        return redirect()->back()->with('message',"Stay tuned, Your request was sent successfully..!!");
    }

    public function sendInvitaionEmailDone($email,$verifyToken)
    {
        $friend = Friend::where(['email'=>$email, 'verifyToken'=>$verifyToken])->first();
        if($friend){
            Friend::where(['email'=>$email,'verifyToken'=>$verifyToken])->update(['status'=>'1','verifyToken'=>null]);
            return view('invitation-accepted')->with('friend',$friend);
        }
        else{
            return 'user not found';
        }
    }

    public function destroy($id)
    {
        $friend = Friend::find($id);
        // Check for correct user
        if(auth()->user()->id !==$friend->user_id){
            return redirect('/home')->with('status', 'Unauthorized Page');
        }        
        $friend->delete();
        return redirect('/home')->with('status', 'Friend Removed');
    }

    public function sendEmail($thisFriend)
    {
        Mail::to($thisFriend['email'])->send(new verifyFriendEmail($thisFriend));
    }
}
