@extends('layout.admin.master')
@section('contact')

<style type="text/css">
  .modal-header{
     background: linear-gradient(60deg, #2E8B57, #0A1832);
  }
  .modal-title{
    color: white;
        text-align: center;
  }
</style>
         <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"> 
          <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
<div class="container">
<div class="col col-md-12">
  <div align="center"><h2>Student List</h2>
 </div>
     
      <hr>
          <div class="row justify-content-between align-items-center">
                         <div class="col-md-4 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0 position">
                            <div class="align-items-center m-4 d-inline-flex">
                                <a class="btn btn-primary form-control" href="" data-toggle="modal" data-target="#formModal" id="create_record">
                                     <i class="fa fa-plus">Add New Student</i>
                                </a>
                            </div>
                          </div>
                       
                          <div class="col-md-4 d-flex align-items-center justify-content-between justify-content-md-end mb-3 mb-md-0 position1">
                            <div class="align-items-center m-4 d-inline-flex">
                              <input type="search" name="search_datatable_input" id="search_datatable_input" class="form-control" placeholder="search">
                            </div>
                        </div>
               </div>

		<div class="table-responsive">
		     	<div class="col col-md-12">
		    <table id="Student" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
		    <thead>
		      <tr>
            <th>Serial</th>    
            <th>Name</th>
            <th>Number</th>
            <th>Email</th>
            <th>Date</th>
		    <th>Action</th>
		      </tr>
		    </thead>
		     <tbody id="newlog">
		     	 @foreach($data as $row)
		       <tr>
                  <td>{{$row->id}}</td>  
                   <td>{{$row->name}}</td>		           
                   <td>{{$row->mobile}}</td>               
                   <td>{{$row->email}}</td>		           
                   <td>{{$row->created_at}}</td>		           
		           <td>
		       <a class="btn btn-info" href="{{URL::to('view_student'.$row->id)}}" id="edit"><i class="fa fa-eye" ></i></a>
            <a class="btn btn-danger" href="{{URL::to('delete_student'.$row->id)}}" id="delete"><i class="fa fa-trash" ></i></a>
            <?php 
             if($row->status==0){
            ?>
		        <a class="btn btn-warning" href="{{URL::to('change_student_status'.$row->id)}}" id=""><i class="" >Due</i></a>
              <?php
               } else{
              ?>
              <a class="btn btn-success" href="{{URL::to('change_student_status'.$row->id)}}" id=""><i class="" >Done</i></a>
              <?php 
              }
            ?>
                  </td>
               </tr>
             @endforeach
		     </tbody>
		  </table>
		</div>
		</div>  
   <!--Insert Modal starts-->

       <div id="formModal" class="modal fade" role="dialog">
		 <div class="modal-dialog">
		  <div class="modal-content">
		   <div class="modal-header">
		   	<h4 class="modal-title color">Add New Information</h4>
		          <button type="button" class="close" data-dismiss="modal">&times;</button>    
		        </div>
		        <div class="modal-body">
		         <span id="form_result"></span>
		         <form method="post"  action="{{route('storestudent')}}" enctype="multipart/form-data">
		          @csrf 

                   <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Name</label>
                         <div class="col-sm-8">
                            <input type="text" name="name" id="name" required="" />
                          </div>
                     </div>

                     <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Email</label>
                         <div class="col-sm-8">
                            <input type="email" name="email" id="email" required="" />
                          </div>
                     </div>

                     <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Name</label>
                         <div class="col-sm-8">
                            <input type="text" name="mobile" id="mobile" required="" />
                          </div>
                     </div>

                     <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Current Country</label>
                         <div class="col-sm-8">
                            <select name="country_name" id="country_name">
                   			 @foreach($data1 as $row1)
                   			 <option value="{{$row1->country_name}}">{{$row1->country_name}}</option>
                   			 @endforeach
                   		  </select>
                          </div>
                     </div>
                     <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Course Level</label>
                         <div class="col-sm-8">
                            <select name="course_level_name" id="course_level_name">
                   			 @foreach($data2 as $row2)
                   			 <option value="{{$row2->course_level_name}}">{{$row2->course_level_name}}</option>
                   			 @endforeach
                   		  </select>
                          </div>
                     </div>

                      <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Course Name</label>
                         <div class="col-sm-8">
                            <select name="course_name" id="course_name">
                   			 @foreach($data3 as $row3)
                   			 <option value="{{$row3->course_name}}">{{$row3->course_name}}</option>
                   			 @endforeach
                   		  </select>
                          </div>
                     </div>
                     <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Current Course</label>
                         <div class="col-sm-8">
                            <input type="text" name="current_course" id="current_course" required="" />
                          </div>
                     </div>
                    
		           <br />
		           <div class="form-group" align="right">
		           <!-- <input type="hidden" name="action" id="action" /> -->
		            <input type="submit" name="action_button" id="action_button" class="btn btn-primary" value="Add" />
		            <input type="button" name="" id="" class="btn btn-secondary" data-dismiss="modal" value="Cancel" />
		           </div>
		         </form>
		        </div>
		     </div>
		</div>
		</div>
   <!--Insert Modal Ends-->



	</div>
</div>


<script type="text/javascript">
        
        $(document).ready(function(){
   var student = $('#student').DataTable({
                            sDom: 'lrtip',
                            "paging": false,
                             fixedHeader: true
                        });
    $('#student').on( 'keyup', function () {
    student.search( this.value ).draw();

       });
    });
   </script>    

  
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script>
  @if(Session::has('message'))
    var type="{{Session::get('alert-type','info')}}"

    switch(type){
      case 'info':
             toastr.info("{{ Session::get('message') }}");
             break;
          case 'success':
              toastr.success("{{ Session::get('message') }}");
              break;
          case 'warning':
              toastr.warning("{{ Session::get('message') }}");
              break;
          case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif

  console.log(type);
</script>

       <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>  

        
    <script>
   
           $(document).on("click","#delete",function(e){
                e.preventDefault();
                var link = $(this).attr("href");


                 swal({
                  title: 'Are you sure?',
                  text: 'You will not be able to recover this file!',
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!',
                  closeOnConfirm: false
                     },
                   function() {
                     /* swal(
                      'Deleted!',
                     'Your file has been deleted.',
                     'success'
                          );*/
                       window.location.href=link;
                            });

                     });
          </script>




@endsection