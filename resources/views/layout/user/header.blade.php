

<header id="header" class="fixed-top">

  
<div class="container d-flex">
      
    


        <div class="logo mr-auto">
        
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{route('home')}}"><img src="assets/img/logovc.png" alt="" class="img-fluid"></a>
      </div>
       
      
       

      <nav class="nav-menu d-none d-lg-block">
        <?php
           $ac=session::get('active');
          
         ?>
        <ul>
         <?php
           if ($ac==1){
          ?>
          <li class="active"><a href="{{route('home')}}">Home</a></li>
          <li class=""><a href="{{route('about')}}">About</a></li>
          <li><a href="{{route('service')}}">Services</a></li>
          <li><a href="{{route('team')}}">Team</a></li>
         <li class=""><a href="{{route('check')}}">Apply Now</a></li>
           <li><a href="{{route('contact')}}">Contact</a></li>
          <?php
            }
            else if($ac==2){
          ?>
          <li class=""><a href="{{route('home')}}">Home</a></li>
          <li class="active"><a href="{{route('about')}}">About</a></li>
          <li class=""><a href="{{route('service')}}">Services</a></li>
          <li><a href="{{route('team')}}">Team</a></li>
          <li class=""><a href="{{route('check')}}">Apply Now</a></li>
           <li class="active"><a href="{{route('contact')}}">Contact</a></li>
         <?php
          
            }
            else if($ac==3){
          ?>
          <li class=""><a href="{{route('home')}}">Home</a></li>
          <li class=""><a href="{{route('about')}}">About</a></li>
          <li class="active"><a href="{{route('service')}}">Services</a></li>
          <li class=""><a href="{{route('team')}}">Team</a></li>
          <li class=""><a href="{{route('check')}}">Apply Now</a></li>
           <li class=""><a href="{{route('contact')}}">Contact</a></li>
         <?php
          }
          
            else if($ac==4){
          ?>
          <li class=""><a href="{{route('home')}}">Home</a></li>
          <li class=""><a href="{{route('about')}}">About</a></li>
          <li><a href="{{route('service')}}">Services</a></li>
          <li class="active"><a href="{{route('team')}}">Team</a></li>
          <li class=""><a href="{{route('check')}}">Apply Now</a></li>
          <li class=""><a href="{{route('contact')}}">Contact</a></li>
           <?php
            }
               else if($ac==5){
          ?>
          <li class=""><a href="{{route('home')}}">Home</a></li>
          <li class=""><a href="{{route('about')}}">About</a></li>
          <li><a href="{{route('service')}}">Services</a></li>
          <li><a href="{{route('team')}}">Team</a></li>
          <li class=""><a href="{{route('check')}}">Apply Now</a></li>
          <li class="active"><a href="{{route('contact')}}">Contact</a></li>
         <?php
            }
            else if($ac==6){
          ?>
          <li class=""><a href="{{route('home')}}">Home</a></li>
          <li class=""><a href="{{route('about')}}">About</a></li>
          <li><a href="{{route('service')}}">Services</a></li>
          <li><a href="{{route('team')}}">Team</a></li>
          <li class="active"><a href="{{route('check')}}">Apply Now</a></li>
          <li class=""><a href="{{route('contact')}}">Contact</a></li>
        </ul>
        <?php
            }
          ?>
      </nav><!-- .nav-menu -->

    </div>
  </header>