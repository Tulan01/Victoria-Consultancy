<?php

namespace App\Http\Controllers;
use Session;
use DB;
use Carbon\Carbon; 
use Validator;

use Illuminate\Http\Request;

class CourseLevelController extends Controller
{


    public function AuthCheck () {

     $admin_id=Session::get('admin_id');

     if($admin_id){
      return;
     }else{
      return redirect()->route('viewlogin')->send();
     }


    }
      public function addcourselevel() {
       $this->AuthCheck();
     	$data=DB::table('course_levels')->get();

     	
    	return view('admin.addcourselevel',compact('data'));
    }

     public function storecourselevel (Request $request) {
  	  $data=array();
  	 //$data['slider_status']=$request->slider_status;
  	  $data['course_level_name']=$request->course_level_name;

        $data['created_at']=Carbon::now();
        $data['updated_at']=now();

        DB::table('course_levels')->insert($data);
        
        $notification = array(
      	'message' => 'successfully dada inserted !', 
		'alert-type' => 'success'
		);
        return redirect()->route('addcourselevel')->with($notification);
  	   

  }

  public function delete_course_level($id) {
      

         DB::table('course_levels')->where('id',$id)->delete();
          //$data['success']='Data Deleted successfully!';
           $notification = array(
           	'message' => 'successfully dada deleted !', 
		    'alert-type' => 'success'
		);
        return redirect()->route('addcourselevel')->with($notification);
  	    }
     
    public function edit_course_level($id) {

        $data=DB::table('course_levels')->where('id',$id)->first();

        return view('admin.editcourselevel',compact('data'));
  	    }

     public function change_course_level(Request $request) {

         $data=array();
         $data['course_level_name']=$request->course_level_name;
        $data['created_at']=Carbon::now();
        $data['updated_at']=now();

   		 DB::table('course_levels')->where('id',$request->id)->update($data);
           $notification = array(
             'message' => 'successfully updated deleted !', 
              'alert-type' => 'success'
            );
        return redirect()->route('addcourselevel')->with($notification);
        

      }
}
