<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\User;


class usersystemController extends Controller
{
    //

    public function showPassword(){
      return view('ChangePassword');
}


public function changePassword(Request $request){

    if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
      // The passwords matches
      return redirect()->back()->with("error","Your current password does not match with the password you provided. Please try again.");
    }

    if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
      //Current password and new password are same
      return redirect()->back()->with("error","New Password cannot be the same as your current password. Please choose a different password.");
    }

    $validatedData = $request->validate([
      'current-password' => 'required',
      'new-password' => 'required|string|min:6|confirmed',
    ]);

    //Change Password
    $user = Auth::user();
    $user->password = bcrypt($request->get('new-password'));
    $user->save();

    return redirect()->back()->with("success","Password changed successfully !");

  }

    public function update(Request $request, $id)
    {

    $users = User::find($id);
    $users->name = $request->get('name');
    $users->email = $request->get('email');
    $users->phone_number = $request->get('phoneNumber');
    $users->save();
    return redirect()->back()
                    ->with('success', 'User profile updated successfully');
    }

    public function edit(){
    	$user = user::where('name',Auth::user()->name)->get();
    	return view('edit',['users'=>$user]);
    }
}
