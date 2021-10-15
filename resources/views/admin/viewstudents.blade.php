@extends('layout.admin.master')
@section('contact')
<div class="container">
<div class="col col-md-12">
  <div align="center"><h2>Student Details </h2>
 </div>

                    <div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                 
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                   <label for="example-text-input" class="col-sm-2 col-form-label">{{$data->name}}</label>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                   <label for="example-text-input" class="col-sm-2 col-form-label">{{$data->email}}</label>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Mobile</label>
                                                <div class="col-sm-10">
                                                   <label for="example-text-input" class="col-sm-2 col-form-label">{{$data->mobile}}</label>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Current Country</label>
                                                <div class="col-sm-10">
                                                   <label for="example-text-input" class="col-sm-2 col-form-label">{{$data->country_name}}</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Course Level</label>
                                                <div class="col-sm-10">
                                                   <label for="example-text-input" class="col-sm-2 col-form-label">{{$data->course_level_name}}</label>
                                                </div>
                                            </div>
                                              <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Course Name</label>
                                                <div class="col-sm-10">
                                                   <label for="example-text-input" class="col-sm-2 col-form-label">{{$data->course_name}}</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label"> Current Course Name</label>
                                                <div class="col-sm-10">
                                                   <label for="example-text-input" class="col-sm-2 col-form-label">{{$data->current_course}}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



@endsection