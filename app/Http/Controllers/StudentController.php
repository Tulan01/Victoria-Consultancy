<?php


namespace App\Http\Controllers;
use Session;
use DB;
use Carbon\Carbon; 
USE Validator;
use Illuminate\Http\Request;
session_start();

class StudentController extends Controller
{
    public function storestudent (Request $request){

       // echo "$request->course_name";
        $a=session::get('admin');

        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:students',
            'mobile' => 'required|unique:students|numeric',
        ]);
     if ($validator->passes()){
    	$data=array();
    	$data['name']=$request->name;
    	$data['email']=$request->email;
    	$data['mobile']=$request->mobile;
    	$data['country_name']=$request->country_name;
    	$data['course_level_name']=$request->course_level_name;
    	$data['course_name']=$request->course_name;
      $data['current_course']=$request->current_course;
    	$data['status']=0;
    	$data['created_at']=Carbon::now();
      $data['updated_at']=now();

        DB::table('students')->insert($data);
        $notification = array(
      	'message' => 'Submitted Successfully!', 
		    'alert-type' => 'success'
	     	);

        if($a==1){
           
            return redirect()->route('admin')->with($notification);
        }
            return redirect()->route('check')->with($notification);
       }
       
       $notification = array(
        'message' => 'Your information Already Stored or incorrect mobile number!', 
        'alert-type' => 'error'
        );

       if($a==1){
           
            return redirect()->route('admin')->with($notification);
        }
       return redirect()->route('check')->with($notification);

    }

     public function delete_student($id) {
      

         DB::table('students')->where('id',$id)->delete();
          //$data['success']='Data Deleted successfully!';
           $notification = array(
            'message' => 'successfully dada deleted !', 
            'alert-type' => 'success'
           );
        return redirect()->route('admin')->with($notification);
        }
     
    public function view_student($id) {

        $data=DB::table('students')->where('id',$id)->first();

        return view('admin.viewstudentS',compact('data'));
        }

     public function change_student_status($id){
       $data = DB::table('students')->where('id',$id)->first();

       if($data->status==0){
        DB::table('students')->where('id',$id)
                          ->update(['status'=>1]);
        }
        else{
         DB::table('students')->where('id',$id)
                          ->update(['status'=>0]);
        }

        $notification = array(
            'message' => 'successfully data updated !', 
            'alert-type' => 'success'
           );
        return redirect()->route('admin')->with($notification);
     }
}
