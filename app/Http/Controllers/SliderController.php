<?php

namespace App\Http\Controllers;
use Session;
use DB;
use Carbon\Carbon; 
use Validator;
use Illuminate\Http\Request;

class SliderController extends Controller
{

     public function AuthCheck () {

     $admin_id=Session::get('admin_id');

     if($admin_id){
      return;
     }else{
      return redirect()->route('viewlogin')->send();
     }


    }
     public function addslider() {
       $this->AuthCheck();
     	$data=DB::table('sliders')->get();
    	return view('admin.addslider',compact('data'));
    }

    public function storeslider (Request $request) {
  	  $data=array();
  	 //$data['slider_status']=$request->slider_status;
  	  $image=$request->file('slider_image');

  	    if($image){
        $image_name=hexdec(uniqid());
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext; 
        $upload_path='admin/slider/image/';
        $image_url=$upload_path.$image_full_name; 
        $success=$image->move($upload_path,$image_full_name);
        $data['slider_image']=$image_url;

        $data['created_at']=Carbon::now();
        $data['updated_at']=now();

        DB::table('sliders')->insert($data);
        
        $notification = array(
      	'message' => 'successfully dada inserted !', 
		'alert-type' => 'success'
		);
        return redirect()->route('addslider')->with($notification);
  	    }

  }

    public function delete_slider($id) {
       
         $value=DB::table('sliders')->where('id',$id)->first();
         $img=$value->slider_image;
         unlink($img);

         DB::table('sliders')->where('id',$id)->delete();
          //$data['success']='Data Deleted successfully!';
           $notification = array(
           	'message' => 'successfully dada deleted !', 
		    'alert-type' => 'success'
		);
        return redirect()->route('addslider')->with($notification);
  	    }
     
    public function edit_slider($id) {

        $data=DB::table('sliders')->where('id',$id)->first();

        return view('admin.editslider',compact('data'));
  	    }

     public function change_slider(Request $request) {

           $value=DB::table('sliders')->where('id',$request->id)->first();
           $img=$value->slider_image;
          unlink($img);


        $image=$request->file('slider_image');

        if($image){
        $image_name=hexdec(uniqid());
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext; 
        $upload_path='admin/slider/image/';
        $image_url=$upload_path.$image_full_name; 
        $success=$image->move($upload_path,$image_full_name);
        $data['slider_image']=$image_url;

        $data['created_at']=Carbon::now();
        $data['updated_at']=now();


         
          DB::table('sliders')->where('id',$request->id)->update($data);
           $notification = array(
             'message' => 'successfully updated deleted !', 
              'alert-type' => 'success'
            );
        return redirect()->route('addslider')->with($notification);
        }

      }


  

  }
