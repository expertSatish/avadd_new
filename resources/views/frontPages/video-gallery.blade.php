@extends('front_layouts/layout')
@extends('front_layouts/header')
@section('contentSection')
<style>
    .video-container {
        position: relative;
        padding-bottom: 56.25%;
        padding-top: 30px;
        height: 0;
        overflow: hidden;
    }

    .video-container iframe,
    .video-container object,
    .video-container embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>

<!--============================== Content Start ==============================-->
<div class="content-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-heqading">
                    <h3 style="text-align: center;">Video Gallery</h3>
                </div>
                <div class="gallery-list-img os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.4s">
                    @foreach($videogallery as $data)
                    <a href="{{asset('assets/front/images/gallery-img1.jpeg')}}" class="gallery-list">
                    <div class="video-container">
                    <iframe width="100%" height="100%" src="{{ $data->video_link }}" frameborder="0" allowfullscreen></iframe>
            </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


@endsection