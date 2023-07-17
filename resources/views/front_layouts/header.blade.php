@section('header')
@php use App\Models\Department;
@endphp
<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-content">
                <div class="top-bar-left">
                    <p><i class="fas fa-phone-alt"></i> Toll Free Number<a href="tel:+91-7080 308 091"> (+91-7080 308 091, 7080308039)</a></p>
                </div>
                <div class="top-bar-right">
                    <div class="font_change">
                        <a href="javascript:void(0);" title="Decrease font size" onclick="set_font_size('decrease')">A-</a> <a href="javascript:void(0);" title="Reset font size" onclick="set_font_size('')">A </a> <a href="javascript:void(0);" title="Increase font size" onclick="set_font_size('increase')">A+</a>
                    </div>
                    <div class="change-lang">
                        <div id="google_translate_element"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="middle-header-bg">
            <div class="middle-haeder">
                <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('assets/front/images/logo.png')}}" alt="" /><span>Avadh College Of Pharmacy
                        <span>Nindura Barabanki, India</span></span></a>
                <div class="logo-code">
                    <ul class="code-list">
                        <li>
                            <p>B.Pharm (College code 1086)</p>
                        </li>
                        <li>
                            <p>D.Pharm (College code 2772)</p>
                        </li>
                    </ul>
                    <div class="azadi-logo">
                        <img src="{{asset('assets/front/images/75-logo.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="marque">
                <marquee behavior="" direction="left" onmouseover="stop()" onmouseout="start()">
                    <div class="marqu-d">
                        <a href="#!" class="mark-1"><img src="{{asset('assets/front/images/new-gif.jpg')}}" alt="">Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Consequatur assumenda, deleniti porro illum dicta adipisci vel minus ipsum, excepturi voluptatum, aut illo, numquam. Eligendi nam ab, aliquam porro velit, voluptatem.</a>
                    </div>
                </marquee>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <div class="nav-inside d-flex align-items-center justify-content-between">
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNav">
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-inside ml-auto">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="{{route('index')}}"><i class="fas fa-home"></i></a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#!" id="about" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
                                <ul class="dropdown-menu scrollbar-thumb" aria-labelledby="about">
                                    <li><a class="dropdown-item" href="{{route('aboutCollege')}}">About College</a></li>
                                    <li><a class="dropdown-item" href="{{route('visionMission')}}">Vision & Mission</a></li>
                                    <li><a class="dropdown-item" href="{{route('managerMessage')}}">Manager Message</a></li>
                                    <li><a class="dropdown-item" href="{{route('directorMessage')}}">Director Message</a></li>
                                    <li><a class="dropdown-item" href="{{route('hodMessage')}}">HOD Message</a></li>
                                    <li><a class="dropdown-item" href="{{route('advisorMessage')}}">Advisor Message </a></li>
                                    <li><a class="dropdown-item" href="{{route('whyUs')}}">Why Us</a></li>
                                    <li><a class="dropdown-item" href="#!">College Heiglights</a></li>
                                    <li><a class="dropdown-item" href="#!">Governing Body</a></li>
                                    <li><a class="dropdown-item" href="#!">Board Of member</a></li>
                                </ul>
                            </li>
                            <?php
                            $getAcademic = \App\Models\Academic::getAcademic();
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#!" id="about" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academics</a>
                                <ul class="dropdown-menu" aria-labelledby="about">
                                    @foreach ($getAcademic as $academic)
                                    <li><a class="dropdown-item" href="{{ url('academic/'.$academic->slug) }}">{{ $academic->academic_name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="https://www.google.co.in/" id="about" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admission</a>
                                <ul class="dropdown-menu" aria-labelledby="about">
                                    <li><a class="dropdown-item" href="#!">Admission Procedure</a></li>
                                    <li><a class="dropdown-item" href="#!">Download Admission Form</a></li>
                                    <li><a class="dropdown-item" href="#!">Value Addition</a></li>
                                    <li><a class="dropdown-item" href="#!">Campus Tour</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#!" id="about" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Placement</a>
                                <ul class="dropdown-menu" aria-labelledby="about">
                                    <li><a class="dropdown-item" href="{{route('placementCell')}}">Placement Cell</a></li>
                                    <li><a class="dropdown-item" href="{{route('careerDevelopmant')}}">Career Development</a></li>
                                    <li><a class="dropdown-item" href="{{route('forRecruiters')}}">For Recruiters</a></li>
                                    <li><a class="dropdown-item" href="{{route('placementInternship')}}">Placement & Internship</a></li>
                                </ul>
                            </li>
                            <?php
                            $StudentService = \App\Models\StudentService::getSeviceData();
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#!" id="about" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Student Service</a>
                                <ul class="dropdown-menu" aria-labelledby="about">
                                @foreach ($StudentService as $data)
                                    <li><a class="dropdown-item" href="{{ url('student-service/'.$data->slug) }}">{{ $data->title }}</a></li>
                                    @endforeach
                                   
                                </ul>
                            </li>
                            <?php
                            $departments = \App\Models\Department::getDepartmentData();
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#!" id="about" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Faculty</a>
                                <ul class="dropdown-menu" aria-labelledby="about">
                                    @foreach ($departments as $department)
                                    <li><a class="dropdown-item" href="{{ url('faculty/'.$department->slug) }}">{{ $department->name }}</a></li>
                                    @endforeach
                                    
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#!" id="about" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Event</a>
                                <ul class="dropdown-menu" aria-labelledby="about">
                                    <li><a class="dropdown-item" href="{{route('annual-day')}}">Annual Day</a></li>
                                    <li><a class="dropdown-item" href="{{route('sports-day')}}">Sports Day</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#!" id="about" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery</a>
                                <ul class="dropdown-menu" aria-labelledby="about">
                                    <li><a class="dropdown-item" href="{{route('imageGallery')}}">Image Gallery</a></li>
                                    <li><a class="dropdown-item" href="{{route('videoGallery')}}">Video Gallery</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{route('faq')}}">FAQ's</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
@endsection