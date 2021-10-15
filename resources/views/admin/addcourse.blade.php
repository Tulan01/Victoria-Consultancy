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
  <div align="center"><h2>Manage Course</h2>
 </div>
     
      <hr>
          <div class="row justify-content-between align-items-center">
                         <div class="col-md-4 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0 position">
                            <div class="align-items-center m-4 d-inline-flex">
                                <a class="btn btn-primary form-control" href="" data-toggle="modal" data-target="#formModal" id="create_record">
                                     <i class="fa fa-plus">Add Course</i>
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
		    <table id="course" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
		    <thead>
		      <tr>
            <th>Serial</th>    
           <th>Course Name</th>
		        <th>Action</th>
		      </tr>
		    </thead>
		     <tbody id="newlog">
		     	 @foreach($data as $row)
		       <tr>
                  <td>{{$row->id}}</td>  
                   <td>{{$row->course_name}}</td>		           
		           <td>
		       <a class="btn btn-info" href="{{URL::to('edit_course'.$row->id)}}" id="edit"><i class="fa fa-edit" ></i></a>
		        <a class="btn btn-danger" href="{{URL::to('delete_course'.$row->id)}}" id="delete"><i class="fa fa-trash" ></i></a>
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
		         <form method="post"  action="{{route('storecourse')}}" enctype="multipart/form-data">
		          @csrf 

                   <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Insert Data</label>
                         <div class="col-sm-8">
                            <input type="text" name="course_name" id="course_name" required="" />
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
   var course = $('#course').DataTable({
                            sDom: 'lrtip',
                            "paging": false,
                             fixedHeader: true
                        });
    $('#course').on( 'keyup', function () {
    course.search( this.value ).draw();

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