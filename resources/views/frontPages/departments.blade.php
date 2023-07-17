@extends('front_layouts/layout')
@extends('front_layouts/header')
@section('contentSection')
<!--============================== Content Start ==============================-->
<div class="content-container">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row align-items-center pb-md-4" style="border-bottom: 1px solid #16456e47;">
                    <div class="main-heading pb-4">
                        <h3 style="text-align: center;">Faculties of {{$department_name->department_name ?? ''}}:</h3>
                    </div>
                    @foreach($faculty as $key => $res)
                    @if($key % 2 == 0)
                    <div class="col-md-3">
                        <div class="faculty-img1">
                            <img src="{{ asset($res->faculty_image) }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="faculty-quote">
                            <h6>{{ $res->faculty_name }}</h6>
                            {!! htmlspecialchars_decode($res->description ?? '')!!}
                        </div>
                    </div>
                    @else
                    <hr class="mt-4">
                    <div class="row align-items-center reverse-content p-4">
                        <div class="col-md-9">
                            <div class="faculty-quote">
                                <h6>{{ $res->faculty_name }}</h6>
                                {!! htmlspecialchars_decode($res->description ?? '')!!}
                            </div>
                        </div>  
                        <div class="col-md-3">
                            <div class="faculty-img1">
                            <img src="{{ asset($res->faculty_image) }}" alt="">                      
                            </div>
                        </div>                          
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection