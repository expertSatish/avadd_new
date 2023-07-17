@extends('front_layouts/layout')
@extends('front_layouts/header')
@section('contentSection')

<!--============================== Content Start ==============================-->
<div class="content-container">
    <div class="container">
        <div class="main-heqading">
            <h3>Vision, Mission & Objectives</h3>
        </div>
        <div class="about-content">
            <p><strong>Vision:</strong><br>{!! htmlspecialchars_decode($data->vision)!!}</p>
            <p><strong>Mission:</strong><br> {!! htmlspecialchars_decode($data->mission)!!}</p>
            <p><strong>Objectives:</strong><br> {!! htmlspecialchars_decode($data->objective)!!}</p>
        </div>
    </div>
</div>

@endsection