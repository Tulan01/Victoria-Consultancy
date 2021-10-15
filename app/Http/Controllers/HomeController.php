<?php

namespace App\Http\Controllers;
use Session;
use DB;
use Carbon\Carbon; 
use Validator;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index() {

      $data=DB::table('sliders')->get();
        session::put('active','1');
    	return view('welcome', compact('data'));
    }
    public function team() {
      $data=DB::table('teams')->get();

        session::put('active','4');
    	 return view ('user.team',compact('data'));
    }
      public function about() {
        session::put('active','2');
    	 return view ('user.about');
    }
      public function service() {
        session::put('active','3');
    	 return view ('user.service');
    }
    public function contact() {
        session::put('active','5');
         return view ('user.contact');
    }
    public function check() {
         session::put('admin','0');
        $data1=DB::table('countries')->get();
        $data2=DB::table('course_levels')->get();
        $data3=DB::table('courses')->get();
        session::put('active','6');
         return view ('user.eligibility',compact('data1','data2','data3'));
    }
}
