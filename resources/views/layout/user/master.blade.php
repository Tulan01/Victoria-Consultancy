<!DOCTYPE html>
<html lang="en">

<head>

  @include('layout.user.css')
 
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <!-- ======= Header ======= -->
 
      @include('layout.user.header')
  
  

  <!-- ======= Slider Section ======= -->
     
     
   
  @yield('contend')

  <!-- ======= Footer ======= -->
  <footer>
   @include('layout.user.footer')
     
  </footer><!-- End  Footer -->
       
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
   @include('layout.user.js')
  

</body>

</html>