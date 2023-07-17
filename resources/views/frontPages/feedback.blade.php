@extends('front_layouts/layout')
@extends('front_layouts/header')
@section('contentSection')
<!--============================== Content Start ==============================-->
<div class="content-container">
        <div class="container">
            <ul class="about-content  mb-3">
                <h5>Note: </h5>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing, elit.</li>
                <li>Lorem ipsum dolor sit, amet consectetur.</li>
                <li>Lorem ipsum, dolor sit amet.</li>
                <li>Lorem ipsum, dolor sit amet, consectetur adipisicing.</li>
                <li>Lorem ipsum dolor sit amet.</li>
            </ul> 
        </div>
    </div>
    
    <!--============================== Content Start ==============================-->
    <div class="content-container pt-0">
        <div class="container">
            <div class="main-heqading mb-4">
                <h5>Send us your feedback</h5>
            </div>
            <div class="row p-3" style="border: 1px solid #d7d4d4; border-radius: 10px; background: #f2f1f1;">
                <div class="col-md-4">
                    <div class="form_group1">
                        <label for="">Email:</label>
                        <input type="text" class="form-control" placeholder="Email:">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form_group1">
                        <label for="">Class and year or semester:</label>
                        <input type="text" class="form-control" placeholder="Class and year or semester">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form_group1">
                        <label for="">Enrollment Number:</label>
                        <input type="text" class="form-control" placeholder="Enrollment Number">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form_group1">
                        <label for="">Type:</label>
                        <input type="text" class="form-control" placeholder="Select Type">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form_group1">
                        <label for="">Subject:</label>
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form_group1">
                        <label for="">Paper Title:</label>
                        <input type="text" class="form-control" placeholder="Paper Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form_group1">
                        <label for="">Does the teacher have mastery over the course content?</label>
                        <select class="form-control" name="categery" id="categery">
                            <option value="Physically Handicapped">Select</option>
                            <option value="No">Poor</option>
                            <option value="Average">Average</option>
                            <option value="Good">Good</option>
                            <option value="Very Good">Very Good</option>
                            <option value="Excellent">Excellent</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form_group1">
                        <label for="">How well prepared was the teacher for each class?</label>
                        <select class="form-control" name="categery" id="categery">
                            <option value="Physically Handicapped">Select</option>
                            <option value="No">Poor</option>
                            <option value="Average">Average</option>
                            <option value="Good">Good</option>
                            <option value="Very Good">Very Good</option>
                            <option value="Excellent">Excellent</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form_group1">
                        <label for="">Was the teacher well aware of the recent research trends and identifies future research directions?</label>
                        <select class="form-control" name="categery" id="categery">
                            <option value="Physically Handicapped">Select</option>
                            <option value="No">Poor</option>
                            <option value="Average">Average</option>
                            <option value="Good">Good</option>
                            <option value="Very Good">Very Good</option>
                            <option value="Excellent">Excellent</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form_group1">
                        <label for="">Was the teacher used innovative approach and promote the interactive process in teaching?</label>
                        <select class="form-control" name="categery" id="categery">
                            <option value="Physically Handicapped">Select</option>
                            <option value="No">Poor</option>
                            <option value="Average">Average</option>
                            <option value="Good">Good</option>
                            <option value="Very Good">Very Good</option>
                            <option value="Excellent">Excellent</option>
                        </select>
                    </div>
                </div>        
                <div class="col-md-6">
                    <div class="form_group1">
                        <label for="">Overall, how you would rate the quality of instruction received in the course?</label>
                        <select class="form-control" name="categery" id="categery">
                            <option value="Physically Handicapped">Select</option>
                            <option value="No">Poor</option>
                            <option value="Average">Average</option>
                            <option value="Good">Good</option>
                            <option value="Very Good">Very Good</option>
                            <option value="Excellent">Excellent</option>
                        </select>
                    </div>
                </div>  
                <div class="col-md-6">
                    <div class="form_group1">
                        <label for="">Did the course enhance your interest and knowledge of subject?</label>
                        <select class="form-control" name="categery" id="categery">
                            <option value="Physically Handicapped">Select</option>
                            <option value="No">Poor</option>
                            <option value="Average">Average</option>
                            <option value="Good">Good</option>
                            <option value="Very Good">Very Good</option>
                            <option value="Excellent">Excellent</option>
                        </select>
                    </div>
                </div>  
                <div class="col-md-6">
                    <div class="form_group1">
                        <label for="">Was the teacher concerned and helpful regarding the progress of his students? </label>
                        <select class="form-control" name="categery" id="categery">
                            <option value="No">Poor</option>
                            <option value="Average">Average</option>
                            <option value="Good">Good</option>
                            <option value="Very Good">Very Good</option>
                            <option value="Excellent">Excellent</option>
                        </select>
                    </div>
                </div>      
                <div class="col-md-12">
                    <div class="form-gruop1">
                        <label for="Any other comment which you would like to mention (Please write in space provided here)."></label>
                        <textarea class="form-control" placeholder="Any other comment which you would like to mention (Please write in space provided here)."></textarea>
                    </div>
                </div>        
                <div class="col-md-12">
                    <div class="btn-sub">
                        <button type="submit" class="btn-submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Content End ==============================-->

    <!--============================== Content Start ==============================-->
    <div class="content-container partner-container pt-0">
        <div class="container">            
            <div class="main-heqading text-center">
                <h3>For Recruiters</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="partner-list _partner_slider pb-0">
                        <li class="partner-item">
                            <div class="partner-logo">
                                <div class="partner-logo-1">
                                    <img src="include/images/partner-logo.png" alt="">
                                </div>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-logo">
                                <div class="partner-logo-1">
                                    <img src="include/images/partner-logo1.png" alt="">
                                </div>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-logo">
                                <div class="partner-logo-1">
                                    <img src="include/images/partner-logo2.png" alt="">
                                </div>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-logo">
                                <div class="partner-logo-1">
                                    <img src="include/images/partner-logo3.png" alt="">
                                </div>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-logo">
                                <div class="partner-logo-1">
                                    <img src="include/images/partner-logo4.png" alt="">
                                </div>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-logo">
                                <div class="partner-logo-1">
                                    <img src="include/images/partner-logo5.png" alt="">
                                </div>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-logo">
                                <div class="partner-logo-1">
                                    <img src="include/images/partner-logo6.png" alt="">
                                </div>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-logo">
                                <div class="partner-logo-1">
                                    <img src="include/images/partner-logo7.png" alt="">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endsection