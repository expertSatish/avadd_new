@extends('front_layouts/layout')
@extends('front_layouts/header')
@section('contentSection')
  <!--============================== Content Start ==============================-->
   <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="main-heqading">
                        <h3>Bus Facility</h3>
                    </div>
                    <div class="about-content">
                        <p>College's bus facility serves staff and students to and from the college from all the city's neighbourhoods. </p>
                    </div>
                </div> 
                <div class="col-md-5">
                    <div class="faculty-img">
                        <img src="{{asset('assets/front/images/wi-fi-img.jpeg')}}" alt="">                        
                    </div>
                </div>                           
            </div>
        </div>
    </div>

    @endsection