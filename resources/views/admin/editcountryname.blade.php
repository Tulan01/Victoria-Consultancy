@extends('layout.admin.master')
@section('contact')
<div class="container">
<div class="col col-md-12">
  <div align="center"><h2>Edit Country Names</h2>
 </div>

                    <div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                <form method="post"  action="{{route('change_country')}}" enctype="multipart/form-data">
                                     @csrf 
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Insert country Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text"  id="country_name" name="country_name" value="{{$data->country_name}}">
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