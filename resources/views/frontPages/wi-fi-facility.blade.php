@extends('front_layouts/layout')
@extends('front_layouts/header')
@section('contentSection')
 <!--============================== Content Start ==============================-->
 <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="main-heqading">
                        <h3>Wi-Fi Campus</h3>
                    </div>
                    <div class="about-content">
                        <p>Today internet is key point for success in race of life and the power of internet to support the academics and studies is well known. Following this, all the classes, library and other facilities are interconnected through the access point to wireless network. </p>
                        <p>The campus network provide service like email, internet and teaching software, video conferencing and printing facilities</p>
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