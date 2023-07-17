@extends('front_layouts/layout')
@extends('front_layouts/header')
@section('contentSection')
<!--============================== Content Start ==============================-->
<div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="main-heqading">
                        <h3>{{$service_data->title}}</h3>
                    </div>
                    <div class="about-content">
                        {!! $service_data->description !!}
                    </div>
                </div> 
                <div class="col-md-5">
                    <div class="faculty-img">
                    <img src="{{asset($service_data->image)}}" alt="">
                    </div>
                </div>                           
            </div>
        </div>
    </div>
    @endsection