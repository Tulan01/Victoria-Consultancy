<?php

namespace App\Http\Controllers;

use Session;
use DB;
use Carbon\Carbon; 
use Validator;
use Illuminate\Http\Request;

class TeamController extends Controller
{
	 public function AuthCheck () {

     $admin_id=Session::get('admin_id');

     if($admin_id){
      return;
     }else{
      return redirect()->route('viewlogin')->send();
     }


    }
     public function addteam() {
       $this->AuthCheck();
     	$data=DB::table('teams')->get();
    	return view('admin.addteam',compact('data'));
    }

     public function storeteam (Request $request) {
  	  $data=array();
  	 //$data['slider_status']=$request->slider_status;
  	  $image=$request->file('team_image');

  	    if($image){
        $image_name=hexdec(uniqid());
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext; 
        $upload_path='admin/team/image/';
        $image_url=$upload_path.$image_full_name; 
        $success=$image->move($upload_path,$image_full_name);
        $data['team_image']=$image_url;

        $data['team_name']=$request->team_name;
        $data['team_designation']=$request->team_designation;
        $data['team_facebook']=$request->team_facebook;
        $data['team_twetter']=$request->team_twetter;
        $data['team_insta']=$request->team_insta;

        $data['created_at']=Carbon::now();
        $data['updated_at']=now();

        DB::table('teams')->insert($data);
        
        $notification = array(
      	'message' => 'successfully dada inserted !', 
		'alert-type' => 'success'
		);
        return redirect()->route('addteam')->with($notification);
  	    }

  }

    public function delete_team($id) {
       
         $value=DB::table('teams')->where('id',$id)->first();
         $img=$value->team_image;
         unlink($img);

         DB::table('teams')->where('id',$id)->delete();
          //$data['success']='Data Deleted successfully!';
           $notification = array(
           	'message' => 'successfully dada deleted !', 
		    'alert-type' => 'success'
		);
        return redirect()->route('addteam')->with($notification);
  	    }
     
    public function edit_team($id) {

        $data=DB::table('teams')->where('id',$id)->first();

        return view('admin.editteam',compact('data'));
  	    }

     public function change_team(Request $request) {

           $value=DB::table('teams')->where('id',$request->id)->first();
           $img=$value->team_image;
          unlink($img);


        $image=$request->file('team_image');

        if($image){
        $image_name=hexdec(uniqid());
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext; 
        $upload_path='admin/team/image/';
        $image_url=$upload_path.$image_full_name; 
        $success=$image->move($upload_path,$image_full_name);
        $data['team_image']=$image_url;

         $data['team_name']=$request->team_name;
        $data['team_designation']=$request->team_designation;
        $data['team_facebook']=$request->team_facebook;
        $data['team_twetter']=$request->team_twetter;
        $data['team_insta']=$request->team_insta;

        $data['created_at']=Carbon::now();
        $data['updated_at']=now();


         
          DB::table('teams')->where('id',$request->id)->update($data);
           $notification = array(
             'message' => 'successfully updated deleted !', 
              'alert-type' => 'success'
            );
        return redirect()->route('addteam')->with($notification);
        }

      }

    
}
