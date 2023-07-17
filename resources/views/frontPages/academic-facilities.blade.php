@extends('front_layouts/layout')
@extends('front_layouts/header')
@section('contentSection')
 <!--============================== Content Start ==============================-->
 <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="main-heqading">
                        <h3>Acadmic Facility</h3>
                    </div>
                    <div class="about-content">
                        <p>Separate hostel facility is also available for both boys and girls with upmost facilities: </p>
                    </div>
                    <ul class="library-book-list">
                        <h6>Features: </h6>
                        <li>24-hour security, CCTV All entry and departure points are under surveillance.</li>
                        <li>Breakfast, Lunch, Evening Tea with Snacks, and Dinner are served four times every day.</li>
                        <li> Hot water supply</li>
                        <li> Cots (without mattresses), study tables, chairs, and wardrobe mattresses would be available from neighbouring vendors on a fee basis, or one might bring their own mattress.</li>
                        <li>There are triple occupancy rooms available. </li>
                        <li>Cricket, football, and hockey fields on one site.</li>
                        <li>The hostel buildings are fire-safe and well-equipped with fire-fighting systems such as fire hydrants, fire extinguishers, emergency lights, public announcement system, alarmed panic bar enabled emergency escape doors, and so forth. </li>
                    </ul>
                </div> 
                <div class="col-md-5">
                    <div class="faculty-img">
                    
                        <img src="{{asset('assets/front/images/library-img.jpeg')}}" alt="">                        
                    </div>
                </div>                           
            </div>
        </div>
    </div>
    @endsection