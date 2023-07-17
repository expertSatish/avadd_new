@extends('front_layouts/layout')
@extends('front_layouts/header')
@section('contentSection')
 <!--============================== Content Start ==============================-->
 <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="main-heqading">
                        <h3>Indoor & outdoor sports facility</h3>
                    </div>
                    <div class="about-content">
                        <p>Indoor game facilities for Carrom, Table Tennis and Chess are available in the Common Room. Play areas and courts for outdoor sports such as badminton, volleyball, cricket and basketball and others.</p>
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