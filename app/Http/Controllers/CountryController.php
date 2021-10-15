<?php

namespace App\Http\Controllers;
use Session;
use DB;
use Carbon\Carbon; 
use Validator;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    public function AuthCheck () {

     $admin_id=Session::get('admin_id');

     if($admin_id){
      return;
     }else{
      return redirect()->route('viewlogin')->send();
     }


    }

      public function addcountry() {
       $this->AuthCheck();

     	$data=DB::table('countries')->get();

     	
    	return view('admin.countryname',compact('data'));
    }

     public function storecountry (Request $request) {
  	  $data=array();
  	 //$data['slider_status']=$request->slider_status;
  	  $data['country_name']=$request->country_name;

        $data['created_at']=Carbon::now();
        $data['updated_at']=now();

        DB::table('countries')->insert($data);
        
        $notification = array(
      	'message' => 'successfully dada inserted !', 
		'alert-type' => 'success'
		);
        return redirect()->route('addcountry')->with($notification);
  	   

  }

  public function delete_country($id) {
      

         DB::table('countries')->where('id',$id)->delete();
          //$data['success']='Data Deleted successfully!';
           $notification = array(
           	'message' => 'successfully dada deleted !', 
		    'alert-type' => 'success'
		);
        return redirect()->route('addcountry')->with($notification);
  	    }
     
    public function edit_country($id) {

        $data=DB::table('countries')->where('id',$id)->first();

        return view('admin.editcountryname',compact('data'));
  	    }

     public function change_country(Request $request) {

         $data=array();
         $data['country_name']=$request->country_name;
        $data['created_at']=Carbon::now();
        $data['updated_at']=now();

   		 DB::table('countries')->where('id',$request->id)->update($data);
           $notification = array(
             'message' => 'successfully updated deleted !', 
              'alert-type' => 'success'
            );
        return redirect()->route('addcountry')->with($notification);
        

      }
}
