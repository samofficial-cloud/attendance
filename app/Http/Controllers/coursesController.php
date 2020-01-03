<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\courses;

class coursesController extends Controller
{
    //

    public function index(){
    // 	$leagues = League::select('league_name')
    // ->join('countries', 'countries.country_id', '=', 'leagues.country_id')
    // ->where('countries.country_name', $country)
    // ->get();


    $courses=courses::select('courses.program','exams.course','exams.fromTime','exams.venue')
    	->join('exams','exams.course','=','courses.course')
    	->where('courses.program','ESC1')
    	->get();


    	return $courses;
    }
}
