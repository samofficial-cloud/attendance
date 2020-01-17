<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\courses;

class coursesController extends Controller
{
    //

    public function index(){
      return view('courses');
    }
}
