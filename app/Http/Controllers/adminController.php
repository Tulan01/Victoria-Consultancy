<?php

namespace App\Http\Controllers;
use Session;
use DB;
use Carbon\Carbon; 
use Validator;
use Illuminate\Http\Request;

class adminController extends Controller
{

	public function AuthCheck () {

     $admin_id=Session::get('admin_id');

     if($admin_id){
     	return;
     }else{
     	return redirect()->route('viewlogin')->send();
     }


    }
    public function admin() {
    	
        $this->AuthCheck();

        session::put('admin','1');
    	$data1=DB::table('countries')->get();
        $data2=DB::table('course_levels')->get();
        $data3=DB::table('courses')->get();
        $data=DB::table('students')->get();


    	return view('admin.adminhome',compact('data','data1','data2','data3'));
    }

    
}
