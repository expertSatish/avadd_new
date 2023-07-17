@extends('front_layouts/layout')
@extends('front_layouts/header')
@section('contentSection')
 <!--============================== Content Start ==============================-->
 <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="main-heqading">
                        <h3>Laboratories</h3>
                    </div>
                    <div class="about-content">
                        <p>The Institute is having well equipped laboratories as per PCI norms to conduct pharmacy programme. Besides being fitted with fans, tubelights, hanging lights, blackboards, taps, sinks, exhausts, ovens, burners and fireextinguishers, they are also equipped with instruments and gadgets necessary to perform the experiments as per the curriculum.In addition, Communication /Language lab are also available for personality development programme.</p>
                        <p>The students are divided into batches for better management. If a student has missed a particular experiment due to her absence from college, he/she is encouraged to join a different group to make up for the practical class he/she has missed. Sometimes, separate practical classes are taken for such students 
                       later. Practical and revision tests are taken regularly. Models and utility charts are used in the teaching process. All necessary equipments are systematically arranged for the students.</p>
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