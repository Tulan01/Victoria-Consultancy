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
                                                    <input class="form-control" type="file"  id="team_image" name="team_image">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Old Image</label>
                                                <div class="col-sm-10">
                                                    <img src="{{URL::to($data->team_image)}}" style="width: 80px; height: 50px;">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Insert Team Member Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text"  id="team_name" name="team_name" value="{{$data->team_name}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Insert Team Degisnation</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text"  id="team_designation" name="team_designation" value="{{$data->team_designation}}">
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Insert Facebook Link</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text"  id="team_designation" name="team_facebook" value="{{$data->team_facebook}}">
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Insert Twetter Link</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text"  id="team_twetter" name="team_twetter" value="{{$data->team_twetter}}">
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Insert Instagram Link</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text"  id="team_insta" name="team_insta" value="{{$data->team_insta}}">
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