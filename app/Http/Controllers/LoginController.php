<?php

namespace App\Http\Controllers;
use Auth;
use Hash;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{



    public function login(Request $request){

      $errors = new MessageBag; // initiate MessageBag
      /*
      Check if credentials match with the records in the database
      */
      
      if(Auth::attempt([
        'SSN' => $request->reg_no,
        'password' =>$request->password,
        'flag' => 1,
        'TITLE'=>"staff"
      ]))

      /*
      (Entered credentials are correct)
      Check the type of user so as to direct the user to the correct page
      */
      {
        //$user = User::where('SSN',$request->reg_no)->first();
          return redirect()->intended('first');
            //return view('index');
      }

     
      /*
      If credentials doesn't match
      */
       $errors = new MessageBag(['password' => ['Incorrect user name or password, Please try again']]); // if Auth::attempt fails (wrong credentials) create a new message bag instance.
       return redirect()->back()->withErrors($errors)->withInput(Input::except('password')); // redirect back to the login page, using ->withErrors($errors) you send the error created above;

    }
}
