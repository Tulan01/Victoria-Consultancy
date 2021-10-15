<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>HishabRakho Register Page</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet" type="text/css" />

         <link href="{{asset('admin/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />

         <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"> 
          <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
        <!-- Basic Css files -->
        

    </head>


    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="" class="logo">Victoria Admin Page</a>
                    </h3>

                    <div class="p-3">
                        <h4 class="text-muted font-18 m-b-5 text-center">Admin Register</h4>
                        

                        <form class="form-horizontal m-t-30" action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required="">
                            </div>

                            <div class="form-group">
                                <label for="username">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required="">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required="">
                            </div>

                             <div class="form-group">
                                <label for="userpassword">Admin Approval Code</label>
                                <input type="password" class="form-control" name="approve" id="password-confirm" placeholder="Approval Code" required="">
                            </div>

                             

                            <div class="form-group row m-t-20">
                                <div class="col-12 text-left">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p>Already have an account ? <a class="font-500 font-14 text-primary font-secondary" href="{{route('viewlogin')}}"> Login </a> </p>
            </div>
        </div>


        <!-- jQuery  -->
        <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/modernizr.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/waves.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.scrollTo.min.js')}}"></script>
        


      

        <!-- Plugins js -->
        <script src="{{asset('admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/select2/js/select2.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}"></script>

        <!-- Plugins Init js -->
        <script src="{{asset('admin/assets/pages/form-advanced.js')}}"></script>

        <!-- App js -->
   
        <!-- App js -->
        <script src="{{asset('admin/assets/js/app.js')}}"></script>


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

    </body>
</html>