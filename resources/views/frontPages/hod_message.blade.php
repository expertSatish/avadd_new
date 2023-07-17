@extends('front_layouts/layout')
@extends('front_layouts/header')
@section('contentSection')

    <!--============================== Content Start ==============================-->
    <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="main-heqading">
                        <h3>From HOD’s pen </h3>
                    </div>
                    <div class="about-content">
                        <strong>Dear Scholars, </strong>
                        {!! htmlspecialchars_decode($data->description)!!}
                    </div>
                </div> 
                <div class="col-md-5">
                    <div class="faculty-img">
                    <img src="{{asset($data->hod_image)}}" alt="">
                       
                        <div class="faculty-name">
                            <h6>{{$data->name}}</h6>
                        </div>
                    </div>
                </div>                           
            </div>
        </div>
    </div>
    <!--============================== Content End ==============================-->

    @endsection
