<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\timetable;

class timetablesController extends Controller
{
    //
    public function index(){

    	
    	// $timetables = timetable::select('course')->where('time', '16:00-17:00')->where('day', 'Monday')->value('course');

    	//$timetabled = timetable::select('course')->where('venue', 'B106')->where('day','Monday')->get();
    	//$timetablee = timetable::where('venue', 'B106')->get();
    	//$timetablee = timetable::select('course','venue')->where('program', $_GET['rid'])->where('time','16:00-17:00')->where('day','Monday')->value('course');

    	// $timetab = timetable::select('time','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','17:00-18:00')->where('day','Monday')->get();

    		$timetab = timetable::select('course')->where('time','08:00-09:00')->where('venue','B302')->where('day','Monday')->get();

    	//return $timetab;


    	return view('room',['timetab'=> $timetab]);
    }
}

