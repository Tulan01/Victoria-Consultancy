<?php

namespace App\Http\Controllers;
use Session;
use DB;
use Carbon\Carbon; 
USE Validator;
use Illuminate\Http\Request;

session_start();

class UserController extends Controller
{
     public function AuthCheck () {

     $admin_id=Session::get('admin_id');

     if($admin_id){
      return;
     }else{
      return redirect()->route('viewlogin')->send();
     }


    }


    public function viewregister (){

    	return view ('admin.registration');
    }

    public function register(Request $request){


        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users',
        ]);


    	$data=array();
    	$data['name']=$request->name;
    	$data['email']=$request->email;
    	$data['password']=$request->password;

    	$approve=3311;

    	if($approve==$request->approve && $validator->passes()){
           DB::table('users')->insert($data);

            $notification = array(
      	    'message' => 'Registration Successfully!', 
		    'alert-type' => 'success'
	     	);

          return redirect()->route('viewlogin')->with($notification);

    	}

    	else{
    		 $notification = array(
      	    'message' => 'Registration Failed!', 
		    'alert-type' => 'error'
	     	);

           return redirect()->route('viewregister')->with($notification);

    	}
    }


     public function viewlogin(){

     	return view ('admin.login');
     }

    

    public function dologin(Request $request){
         	$admin_email=$request->email;
    	    $admin_password=$request->password;

    	$result=DB::table('users')
    	       ->where('email',$admin_email)
    	       ->where('password',$admin_password)
    	       ->first(); 


    	       if($result){
    	       	Session::put('admin_name',$result->name);
    	       	Session::put('admin_id',$result->id);

                $notification = array(
      	    		'message' => 'You are logged in!', 
		   			    'alert-type' => 'success'
	     		     );
    	       	return redirect()->route('admin')->with($notification);
    	       }else{
                 
    	       		$notification = array(
      	    		'message' => 'Email or Password Invalid!', 
		   			 'alert-type' => 'error'
	     		);
    	       		return Redirect()->back()->with($notification);
    	       }
    }

       public function logout (){

        Session::flush();
        return redirect()->route('viewlogin');
      }
  }
