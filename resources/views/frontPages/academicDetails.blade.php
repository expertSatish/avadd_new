@extends('front_layouts/layout')
@extends('front_layouts/header')
@section('contentSection')
 <!--============================== Content Start ==============================-->
 <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @foreach($academic  as $data)
                    <div class="about-content">
                        <p>{!! $data->description !!}</p>
                    </div>
                @endforeach
                   
                    
                </div>                           
            </div>
        </div>
       
    </div>
    @endsection