@extends('layout.user.master')

@section('contend')



 <div id="team" class="our-team-area area-padding">
     <br><br>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Our special Team</h2>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- End column -->
          @foreach($data as $row)
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                
                  <img src="{{URL::to($row->team_image)}}" alt="">
              
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="{{$row->team_facebook}}">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="{{$row->team_twetter}}">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="{{$row->team_insta}}">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>{{$row->team_name}}</h4>
                <p>{{$row->team_designation}}</p>
              </div>
            </div>
          </div>
          @endforeach
          <!-- End column -->
         
          <!-- End column -->
        </div>
      </div>
    </div><!-- End Team Section -->

@endsection