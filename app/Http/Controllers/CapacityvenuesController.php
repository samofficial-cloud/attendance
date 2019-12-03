<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\capacityvenue;

class CapacityvenuesController extends Controller
{
    //

   public function index(){
   	return view('venuecapacity');
   }
}
