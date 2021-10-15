@extends('layout.user.master')

@section('contend')

<br>
<br>
 

 <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Call Back Request</h2>
                <h5>We appreciate that you have provided us with personal information, we will never exchange your data with anyone else and this data will be used for Victoria Academic Consultancy purpose only. We intend to keep you informed about current and future study opportunities with the UK Universities using the contact details you provide here<h5>
              </div>
            </div>
          </div>
          <div class="row">

  <div class="col-md-8 col-sm-12 col-xs-12">
              <div class="form contact-form">
                <form method="post"  action="{{route('storestudent')}}" enctype="multipart/form-data">
		          @csrf 
                  <div class="form-group">
                    <label>Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" required="">
                  </div>
                  <label>Your Email</label>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" required="">
                  </div>
                  <div class="form-group">
                  	<label>Your Mobile</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" required="">
                  </div>
                   <div class="form-group">
                  	<label>Select your current Country</label>
                    <select class="form-control" name="country_name" id="country_name">
                    @foreach($data1 as $row1)
                    <option value="{{$row1->country_name}}">{{$row1->country_name}}</option>
                    @endforeach
                   </select>
                  </div>
                    <div class="form-group">
                  	<label>Select Interested Course Level</label>
                    <select class="form-control" name="course_level_name" id="course_level_name">
                    @foreach($data2 as $row2)
                    <option value="{{$row2->course_level_name}}">{{$row2->course_level_name}}</option>
                    @endforeach
                   </select>
                  </div>

                   <div class="form-group">
                  	<label>Select Interested Course </label>
                    <select class="form-control" name="course_name" id="course_name">
                    @foreach($data3 as $row3)
                    <option value="{{$row3->course_name}}">{{$row3->course_name}}</option>
                    @endforeach
                   </select>
                  </div>
                   <div class="form-group">
                  	<label>Write Your Current Course Name</label>
                    <input type="text" class="form-control" name="current_course" id="current_course" required="">
                  </div>
                 
                  <div class="text-center"><button type="submit">SUBMIT</button></div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
</div>

  
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

  
</script>



          
@endsection