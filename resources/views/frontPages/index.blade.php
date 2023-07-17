@extends('front_layouts/layout')
@extends('front_layouts/header')
@section('contentSection')
<div class="content-container p-0">
    <div class="container">
        <div class="row os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">
            <div class="col-md-8">
                <div class="hero-slider-wrapper">
                    <ul class="hero-slide-list hero_img_slide white-dots">
                        @foreach($banner as $res)
                        <li class="hero-slide-item">
                            <a href="#!" class="hero-slide-box">
                                <div class="hero-slide-img">
                                    <img src="{{asset($res->banner)}}" alt="">
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="link-list">
                    <div class="link-item">
                        <a href="{{route('freeEnglish')}}" class="link-box">Free English Speaking Classes</a>
                    </div>
                    <div class="link-item">
                        <a href="{{route('library')}}" class="link-box">Library</a>
                    </div>
                    <div class="link-item">
                        <a href="{{route('wiFacility')}}" class="link-box">Wi-Fi Campus</a>
                    </div>
                    <div class="link-item">
                        <a href="{{route('laboratories')}}" class="link-box">Laboratories</a>
                    </div>
                    <div class="link-item">
                        <a href="{{route('sportsFacility')}}" class="link-box"> Sports Facility</a>
                    </div>
                    <div class="link-item">
                        <a href="{{route('scholarshipFacility')}}" class="link-box">Scholarship Facility</a>
                    </div>
                    <div class="link-item">
                        <a href="{{route('busFacility')}}" class="link-box">Bus Facility </a>
                    </div>
                    <div class="link-item">
                        <a href="{{route('hostelFacility')}}" class="link-box">Hostel Facility</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============================== Content End ==============================-->

<!--============================== Content Start ==============================-->
<div class="content-container p-0">
    <div class="container">
        <div class="marque mt-2 mb-3">
            <marquee behavior="" direction="left" onmouseover="stop()" onmouseout="start()">
                <div class="marqu-d">
                    <a href="#!" class="mark-1"><img src="{{asset('assets/front/images/new-gif.jpg')}}" alt="">Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Nihil optio deserunt sapiente laudantium blanditiis vel impedit
                        eos. Maxime, laboriosam consequuntur consectetur asperiores aspernatur rem alias dolore, non
                        pariatur facere sunt?</a>
                </div>
            </marquee>
        </div>
    </div>
</div>
<!--============================== Content End ==============================-->
<!--============================== Content Start ==============================-->
<div class="content-container pt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="caaby-list">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    Pharmacy program
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="accordion" id="sub-accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="sub-headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#sub-collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne" style="font-size: 16px;">Diploma in
                                                    pharmacy</button>
                                            </h2>
                                            <div id="sub-collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="sub-headingOne" data-bs-parent="#sub-accordionExample">
                                                <div class="accordion-body">
                                                    <p>D.Pharm is a two-year diploma programme that prepares students
                                                        for careers in the pharmaceutical industry. D.Pharm is
                                                        appropriate for students interested in pursuing a long-term
                                                        career in the medical sector of pharmaceutical sciences,
                                                        beginning with entry-level positions. Currently, we are serving
                                                        60 seats of D. Pharm in our college but we tend to increase the
                                                        seats to 120 seats so that candidates who are looking for making
                                                        career in medical sector can live their dreams. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="sub-headingTwo" style="font-size: 16px;">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#sub-collapseTwo"
                                                    aria-expanded="false" aria-controls="sub-collapseTwo"
                                                    style="font-size: 16px;">
                                                    Bachelors in pharmacy
                                                </button>
                                            </h2>
                                            <div id="sub-collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="sub-headingTwo" data-bs-parent="#sub-accordionExample">
                                                <div class="accordion-body">
                                                    <p>Bachelor of Pharmacy or B.Pharm is a 4 years undergraduate degree
                                                        that teaches students about drug synthesis, dosage formulation,
                                                        analyzing the chemical nature and preclinical testing of new
                                                        drugs. Apart from the technical aspects of pharmacy, B Pharm
                                                        also talks about marketing of pharmaceutical products and
                                                        patenting of new drugs. Right now, we are serving 60 seats of
                                                        B.Pharm in our college but we tend to increase the seats to 100
                                                        seats so that much more students can get benefits and live up to
                                                        the name of being pharmacist.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-box mt-2">
                    <div class="servie-upper">
                        <img src="{{asset('assets/front/images/book-img.png')}}" alt="">
                        <h5>What's New</h5>
                    </div>
                    <div class="service-box1" style="height: 270px;">
                        <ul class="lower-srvice vrtcl-slider">
                            <li>
                                <p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Cum, odio.<a
                                        href="#!">Read More..</a></p>
                                <div class="bullet-img">
                                    <img src="{{asset('assets/front/images/bullet7.gif')}}" alt="">
                                </div>
                            </li>
                            <li>
                                <p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem facere quaerat
                                    quisquam?<a href="#!">Read More..</a></p>
                                <div class="bullet-img">
                                    <img src="{{asset('assets/front/images/bullet7.gif')}}" alt="">
                                </div>
                            </li>
                            <li>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci facilis
                                    necessitatibus tenetur quod nostrum autem.<a href="#!">Read More..</a></p>
                                <div class="bullet-img">
                                    <img src="{{asset('assets/front/images/bullet7.gif')}}" alt="">
                                </div>
                            </li>
                            <li>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci facilis
                                    necessitatibus tenetur quod nostrum autem.<a href="#!">Read More..</a></p>
                                <div class="bullet-img">
                                    <img src="{{asset('assets/front/images/bullet7.gif')}}" alt="">
                                </div>
                            </li>
                            <li>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci facilis
                                    necessitatibus tenetur quod nostrum autem.<a href="#!">Read More..</a></p>
                                <div class="bullet-img">
                                    <img src="{{asset('assets/front/images/bullet7.gif')}}" alt="">
                                </div>
                            </li>
                            <li>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci facilis
                                    necessitatibus tenetur quod nostrum autem.<a href="#!">Read More..</a></p>
                                <div class="bullet-img">
                                    <img src="{{asset('assets/front/images/bullet7.gif')}}" alt="">
                                </div>
                            </li>
                            <li>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci facilis
                                    necessitatibus tenetur quod nostrum autem.<a href="#!">Read More..</a></p>
                                <div class="bullet-img">
                                    <img src="{{asset('assets/front/images/bullet7.gif')}}" alt="">
                                </div>
                            </li>
                            <li>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci facilis
                                    necessitatibus tenetur quod nostrum autem.<a href="#!">Read More..</a></p>
                                <div class="bullet-img">
                                    <img src="{{asset('assets/front/images/bullet7.gif')}}" alt="">
                                </div>
                            </li>
                            <li>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci facilis
                                    necessitatibus tenetur quod nostrum autem.<a href="#!">Read More..</a></p>
                                <div class="bullet-img">
                                    <img src="{{asset('assets/front/images/bullet7.gif')}}" alt="">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="caaby-list">
                    <div class="accordion" id="accordionExample1">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    About us
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample1">
                                <div class="accordion-body pt-0">
                                    <p>Established in 2018, Avadh College of Pharmacy is on a mission to provide
                                        quality education in the field of pharmacy. As a part of Q F educational
                                        Society,
                                        we focus on providing a supportive, safe and accessible learning environment
                                        through state-of-the-art information technology and an experienced and
                                        accomplished pool of faculty members.
                                        Avadh college of Pharmacy is approved by Pharmacy Council of India (PCI),</p>
                                    <p>New Delhi affiliated to the Board of Technical Education (BTE), U.P. and Dr.
                                        A.P.J. Abdul Kalam Technical University (AKTU), Lucknow.</p>
                                    <p>The field of pharmacy is vast and full of opportunities for those who want to
                                        live their dreams. </p>
                                    <p>Currently, we are offering 2 courses, a Bachelors in Pharmacy and a Diploma in
                                        Pharmacy for those students interested in pursuing professional education in
                                        medicine and healthcare.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Vision, Mission & Objectives
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample1">
                                <div class="accordion-body pt-0">
                                    <strong>Vision:</strong>
                                    <p> Avadh College of Pharmacy provides best educational environment with dedicated
                                        faculty and deliver a dream to be among the best in the field of pharmaceutical
                                        sciences through high quality education & research, to create quality
                                        professionals for the various field of pharmacy like manufacturing, marketing,
                                        research and development, hospital,
                                        education, and other health care systems to serve the humanity and nation.</p>
                                    <strong>Mission:</strong>
                                    <p> To educate others throughout the world with each student's outstanding existence
                                        and make them intellectual role models.</p>
                                    <P> To foster in students a feeling of self-assurance, self-respect, andsteadfast
                                        dedication, as well as long-term wisdom and awareness.</P>
                                    <strong>Objectives:</strong>
                                    <p> To fully realize human potential and to incorporate moral principles into
                                        education and to instil in the younger generation a sense of independence and
                                        the realization of a higher self. </p>
                                    <p>To innovate education by reorganizing classes and implementingcutting-edge
                                        teaching and learning strategies that focus on comprehensive personality
                                        development.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                                    Campus rules
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample1">
                                <div class="accordion-body pt-0">
                                    <p> Any applicant admitted to the college must follow the college's rules and
                                        regulations, as well as any adjustments made to them from time to time. As a
                                        result, no action will be possible.</p>
                                    <p> Every student must carry/bear his/her identity card while being in the campus.
                                    </p>
                                    <p>ents should be regular and punctual in classes, extracurricular/cocurricular
                                        activities from the start to the end of the semester.</p>
                                    <p> When attending college, students must agree to the campus dress code</p>
                                    <p> Students are expected to behave in a responsible manner and maintain decorum in
                                        the college.</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="servie-upper" style="background: none; padding: 10px 0px;">
                    <h5>Approved By - PCI, AKTU, BTE</h5>
                </div>
                <ul class="college-related-list">
                    <li class="college-related-item">
                        <a href="#!" class="collage-related-img">
                            <img src="{{asset('assets/front/images/aktu-logo.png')}}" alt="">
                        </a>
                    </li>
                    <li class="college-related-item">
                        <a href="#!" class="collage-related-img">
                            <img src="{{asset('assets/front//images/pci-logo.png')}}" alt="">
                        </a>
                    </li>
                    <li class="college-related-item">
                        <a href="#!" class="collage-related-img">
                            <img src="{{asset('assets/front//images/bti-logo.jpg')}}" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--============================== Content End ==============================-->

<!--============================== Content Start ==============================-->
<div class="content-container pt-0">
    <div class="container">
        <ul class="btn-list">
            <li class="btn-item">
                <a href="#!" class="yojna-list" style="background: #8b6fa7;">Teacher Portal</a>
            </li>
            <li class="btn-item">
                <a href="#!" class="yojna-list" style="background: #07a1a7;">Student Portal</a>
            </li>
            <li class="btn-item">
                <a href="{{route('videoGallery')}}" class="yojna-list" style="background: #668c66;">Photo Gallery</a>
            </li>
            <li class="btn-item">
                <a href="{{route('antiragging')}}" class="yojna-list" style="background: #a46971;">Anti – Ragging Committee</a>
            </li>
            <li class="btn-item">
                <a href="{{ route('genderSensitization') }}" class="yojna-list" style="background: #b69c40;">Gender
                    Sensitization Committee</a>
            </li>
        </ul>
    </div>
</div>
@endsection