<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\calendar;
use App\Notifications\ApprovalStatus;
use App\User;

class calendarsController extends Controller
{
    //

    public function index(){

    	// $timetab = calendar::select('Day')->where('Week','Wk1')->get();

         // $Cweek = calendar::select('Week')->where('Date',date('d'))->where('Month',date('m'))->where('Year',date('Y'))->Value('Week');
        $Cweek = calendar::select('Week')->where('Date','2')->where('Month','12')->where('Year','2019')->Value('Week');
        $date=date('d');

    	return $date;


   // return view('calendar',['timetab'=> $timetab]);
    }


    // public function email(){
    // 	 $user=User::first();
    
    //   $user ->notify(new ApprovalStatus);
    //  return 'Done';

    // }

}
