<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\calendar;

class calendarsController extends Controller
{
    //

    public function index(){

    	 $timetab = calendar::select('Day')->where('Week','Wk1')->get();

    	//return $timetab;


    return view('calendar',['timetab'=> $timetab]);
    }

}
