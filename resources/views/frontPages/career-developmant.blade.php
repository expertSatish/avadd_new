@extends('front_layouts/layout')
@extends('front_layouts/header')
@section('contentSection')
<!--============================== Content Start ==============================-->
<div class="content-container">
    <div class="container">
        <div class="main-heqading">
            <h3>Career Development</h3>
            <h5>SOFT SKILLS:</h5>
            <p>ACOP often holds sessions on improving and honing the students' soft skills as well as their
                communication skills due to the importance of these abilities for success in the recruitment process.
                The members of the ACOP team regularly hold seminars to educate students on the value of employability
                skills and soft skills. These classes require attendance</p>
            <p>The emphasis is on developing professional abilities through the use of appropriate examples, frequent
                practice sessions, and constructive criticism. According to the constantly changing needs of the
                corporate world, the self-learning assignments given to participants substantially aid in the
                enhancement of effective soft skills.</p>
        </div>
        <ul class="about-content  mb-3">
            <h5>OBJECTIVES: </h5>
            <li>Behavioral Qualities</li>
            <li>Body Language: </li>
            <li>Preparing for GDs and Interviews</li>
            <li>Mock Interviews</li>
            <li>E-mail Writing</li>
            <li>Article Writing</li>
            <li>Data using Logical Analytical Reasoning</li>
        </ul>
        <ul class="about-content mb-3">
            <h5>LANGUAGE AND COMMUNICATION SKILLS</h5>
            <p>Your ability to articulate your ideas clearly and interact with others depends on your command of the
                English language and communication techniques. These abilities give the information you want to impart
                to the recipient shape and relevance. Students in all academic disciplines today need to have strong
                language and communication skills. ACOP offer English language and communication skills instruction to
                students, depending on the situation. Reading, writing, speaking, and listening abilities are taught to
                college students through a variety of workshops, lectures, and seminars.</p>
            <li>Language Use</li>
            <li>Body Language: </li>
            <li>Vocabulary, and Diction</li>
            <li>Reading Abilities</li>
            <li>Learning to Listen</li>
        </ul>
        <ul class="about-content">
            <h5>LANGUAGE AND COMMUNICATION SKILLS</h5>
            <p>Technology trend awareness as a skill refers to being mindful of the technology that is recently becoming
                popular and is readily accepted in the market or industry. We conduct various activities and events for
                students so that they would be well versed in handling various instruments and apparatus.</p>
            <p>We keep students in check in working and handling of various instruments like: UV Spectrometer, Tablet
                punching machine, Capsule filling machine, Multipurpose machine, Laminar Flow, BOD Incubator etc. </p>
        </ul>
    </div>
</div>

<!--============================== Content Start ==============================-->
<div class="content-container pt-0">
    <div class="container">
        <div class="main-heqading mb-3">
            <h5>Apply Now</h5>
            @if(session('success'))
            <h4 class="alert-text" style="color: green;">{{ session('success')}}</h4>
            @endif
            @if(session('failed'))
            <h4 class="alert-text">{{ session('failed')}}</h4>
            @endif
        </div>
        <form method="post" action="{{route('saveCareerForm')}}" enctype="multipart/form-data">
            @csrf
            <div class="row p-3" style="border: 1px solid #d7d4d4; border-radius: 10px;">
                <div class="col-md-3">
                    <div class="form_group1">
                        <label for="">First Name:</label>
                        <input type="text" class="form-control" name="f_name" value="{{old('f_name')}}"
                            placeholder="First Name:" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form_group1">
                        <label for="">Last Name:</label>
                        <input type="text" class="form-control" name="l_name" value="{{old('l_name')}}"
                            placeholder="Last Name:" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form_group1">
                        <label for="">Email:</label>
                        <input type="emial" class="form-control" name="email" value="{{old('email')}}"
                            placeholder="Email:" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form_group1">
                        <label for="">Contact:</label>
                        <input type="text" pattern="[6-9]{1}[0-9]{9}" value="{{old('contact')}}"
                            title="Phone number with 6-9 and remaing 9 digit with 0-9" name="contact" required
                            class="form-control" placeholder="Phone">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form_group1">
                        <label for="">DOB:</label>
                        <input type="date" class="form-control" name="dob" value="{{old('dob')}}"
                            placeholder="Enter DOB" required>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form_group1">
                        <label for="">Select Gender</label>
                        <select class="form-control" name="category" value="{{old('category')}}" id="categery" required>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form_group1">
                        <label for="">Experience (In Year):</label>
                        <select class="form-control" name="experience" value="{{old('experience')}}" required>
                            <option value="">Select Experience</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form_group1">
                        <label for="">Slect subject:</label>
                        <select class="form-control" name="subject_select" value="{{old('subject_select')}}"
                            id="categery" required>
                            <option value="">Select subject</option>
                            <option value="Math">Math</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form_group1">
                        <label for="">Current Organization:</label>
                        <input type="text" class="form-control" name="organization" value="{{old('organization')}}"
                            placeholder="Current Organization" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form_group1">
                        <label for="">Upload your resume:</label>
                        <input type="file" class="form-control" name="resume" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="btn-sub">
                        <button type="submit" class="btn-submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
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