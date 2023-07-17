@extends('front_layouts/layout')
@extends('front_layouts/header')
@section('contentSection')

    <!--============================== Content Start ==============================-->
    <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-heqading">
                    <h3>About College</h3>
                    </div>
                    <div class="about-content">
                    {!! htmlspecialchars_decode($aboutCollege->description)!!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="collage-img">
                        <img src="{{asset($aboutCollege->about_image)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
