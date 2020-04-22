<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class configController extends Controller
{
    //


    public function changeConfiguration(Request $request){
        $minimum_percentage=DB::table('camis_configuration')->where('id', 1)->value('minimum_class_percentage');
        $academic_year=DB::table('camis_configuration')->where('id', 1)->value('current_academic_year');
        $semester=DB::table('camis_configuration')->where('id', 1)->value('current_semester');
        $title=DB::table('camis_configuration')->where('id', 1)->value('camis_title');
        $class_validity=DB::table('camis_configuration')->where('id', 1)->value('class_validity_duration');
        $test_validity=DB::table('camis_configuration')->where('id', 1)->value('test_validity_duration');
        $ue_validity=DB::table('camis_configuration')->where('id', 1)->value('ue_validity_duration');
        $test_allowance=DB::table('camis_configuration')->where('id', 1)->value('test_allowance_time');
        $class_allowance=DB::table('camis_configuration')->where('id', 1)->value('class_allowance_time');
        $ue_allowance=DB::table('camis_configuration')->where('id', 1)->value('ue_allowance_time');


return view('system_config')->with('minimum_percentage',$minimum_percentage)->with('class_validity',$class_validity)->with('test_validity',$test_validity)->with('ue_validity',$ue_validity)->with('academic_year',$academic_year)->with('semester',$semester)->with('title',$title)->with('class_allowance',$class_allowance)->with('test_allowance',$test_allowance)->with('ue_allowance',$ue_allowance);
    }


    public function changePercentage(Request $request){

//        $users = User::find(1);
//        $users->name = $request->get('name');
//        $users->email = $request->get('email');
//        $users->phone_number = $request->get('phoneNumber');
//        $users->save();
    $minimum_percentage=$request->minimum_percentage;


        DB::table('camis_configuration')
            ->where('id', 1)
            ->update(['minimum_class_percentage' => $minimum_percentage]);
        return redirect()->back()
            ->with('success', 'Minimum required percentage updated successfully');

//
//        return view('system_config');
    }


    public function changeScanningValidityPeriod(Request $request){

//        $users = User::find(1);
//        $users->name = $request->get('name');
//        $users->email = $request->get('email');
//        $users->phone_number = $request->get('phoneNumber');
//        $users->save();
        $class_validity=$request->class_validity;
        $test_validity=$request->test_validity;
        $ue_validity=$request->ue_validity;
        $ue_allowance=$request->ue_allowance;
        $class_allowance=$request->class_allowance;
        $test_allowance=$request->test_allowance;

        DB::update('EXEC updateTimeClass ?',[$class_allowance]);
        DB::update('EXEC updateTimeTest ?',[$test_allowance]);
        DB::update('EXEC updateTimeUe ?',[$ue_allowance]);



        DB::table('camis_configuration')
            ->where('id', 1)
            ->update(['test_validity_duration' => $test_validity]);


        DB::table('camis_configuration')
            ->where('id', 1)
            ->update(['ue_validity_duration' => $ue_validity]);


        DB::table('camis_configuration')
            ->where('id', 1)
            ->update(['class_validity_duration' => $class_validity]);


        DB::table('camis_configuration')
            ->where('id', 1)
            ->update(['test_allowance_time' => $test_allowance]);


        DB::table('camis_configuration')
            ->where('id', 1)
            ->update(['class_allowance_time' => $class_allowance]);

        DB::table('camis_configuration')
            ->where('id', 1)
            ->update(['ue_allowance_time' => $ue_allowance]);


        return redirect()->back()
            ->with('success', 'Settings updated successfully');

//
//        return view('system_config');
    }


    public function changeAcademicYear(Request $request){

//        $users = User::find(1);
//        $users->name = $request->get('name');
//        $users->email = $request->get('email');
//        $users->phone_number = $request->get('phoneNumber');
//        $users->save();
        $academic_year=$request->academic_year;
        $semester=$request->semester;



        DB::table('camis_configuration')
            ->where('id', 1)
            ->update(['current_semester' => $semester]);


        DB::table('camis_configuration')
            ->where('id', 1)
            ->update(['current_academic_year' => $academic_year]);



        return redirect()->back()
            ->with('success', 'Settings updated successfully');

//
//        return view('system_config');
    }




    public function changeTitle(Request $request){

//        $users = User::find(1);
//        $users->name = $request->get('name');
//        $users->email = $request->get('email');
//        $users->phone_number = $request->get('phoneNumber');
//        $users->save();
        $title=$request->title;


        DB::table('camis_configuration')
            ->where('id', 1)
            ->update(['camis_title' => $title]);


        return redirect()->back()
            ->with('success', 'System title updated successfully');

//
//        return view('system_config');
    }





}
