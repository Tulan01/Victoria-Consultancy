<?php

namespace App\Http\Controllers;
use Session;
use DB;
use Carbon\Carbon; 
use Validator;

use Illuminate\Http\Request;

class CourseController extends Controller
{


    public function AuthCheck () {

     $admin_id=Session::get('admin_id');

     if($admin_id){
      return;
     }else{
      return redirect()->route('viewlogin')->send();
     }


    }
    
    public function addcourse() {
       $this->AuthCheck();
     	$data=DB::table('courses')->get();

     	
    	return view('admin.addcourse',compact('data'));
    }

     public function storecourse (Request $request) {
  	  $data=array();
  	 //$data['slider_status']=$request->slider_status;
  	  $data['course_name']=$request->course_name;

        $data['created_at']=Carbon::now();
        $data['updated_at']=now();

        DB::table('courses')->insert($data);
        
        $notification = array(
      	'message' => 'successfully dada inserted !', 
		'alert-type' => 'success'
		);
        return redirect()->route('addcourse')->with($notification);
  	   

  }

  public function delete_course($id) {
      

         DB::table('courses')->where('id',$id)->delete();
          //$data['success']='Data Deleted successfully!';
           $notification = array(
           	'message' => 'successfully dada deleted !', 
		    'alert-type' => 'success'
		);
        return redirect()->route('addcourse')->with($notification);
  	    }
     
    public function edit_course($id) {

        $data=DB::table('courses')->where('id',$id)->first();

        return view('admin.editcourse',compact('data'));
  	    }

     public function change_course(Request $request) {

         $data=array();
         $data['course_name']=$request->course_name;
        $data['created_at']=Carbon::now();
        $data['updated_at']=now();

   		 DB::table('courses')->where('id',$request->id)->update($data);
           $notification = array(
             'message' => 'successfully updated deleted !', 
              'alert-type' => 'success'
            );
        return redirect()->route('addcourse')->with($notification);
        

      }
}
