<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admin Login Page</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="admin/assets/images/favicon.ico">

        <!-- App css -->
        <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/style.css" rel="stylesheet" type="text/css" />

        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"> 
          <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">

    </head>


    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    

                    <div class="p-3">
                        <h4 class="text-muted font-18 m-b-5 text-center">Welcome Back !</h4>
                        <p class="text-muted text-center">Sign in to continue now.</p>

                        <form class="form-horizontal m-t-30" method="POST" action="{{ route('dologin') }}">
                        @csrf

                            <div class="form-group">
                                <label for="Useremail">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter password">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-sm-6">
                                    
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                           
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p>Don't have an account ? <a href="{{URL::to('viewregister')}}" class="font-500 font-14 text-primary font-secondary"> Signup Now </a> </p>
               
            </div>

        </div>


        <!-- jQuery  -->
        <script src="admin/assets/js/jquery.min.js"></script>
        <script src="admin/assets/js/bootstrap.bundle.min.js"></script>
        <script src="admin/assets/js/modernizr.min.js"></script>
        <script src="admin/assets/js/waves.js"></script>
        <script src="admin/assets/js/jquery.slimscroll.js"></script>
        <script src="admin/assets/js/jquery.nicescroll.js"></script>
        <script src="admin/assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="admin/assets/js/app.js"></script>

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