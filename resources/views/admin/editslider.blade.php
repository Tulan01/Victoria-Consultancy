@extends('layout.admin.master')
@section('contact')
<div class="container">
<div class="col col-md-12">
  <div align="center"><h2>Edit Slider Images</h2>
 </div>

                    <div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                <form method="post"  action="{{route('change_slider')}}" enctype="multipart/form-data">
                                     @csrf 
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Choose new Image</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="file"  id="slider_image" name="slider_image">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Old Image</label>
                                                <div class="col-sm-10">
                                                    <img src="{{URL::to($data->slider_image)}}" style="width: 80px; height: 50px;">
                                                </div>
                                            </div>
                                            <input type="hidden" name="id" value="{{$data->id}}">

                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                    <input type="submit" name="" value="change" style="transform-style:bold; ">
                                                </div>
                                            </div>
                                            

                                </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



@endsection