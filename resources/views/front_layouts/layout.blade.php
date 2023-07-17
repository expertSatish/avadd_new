<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="{{ asset('template/include/css/bootstrap.min.css ')}}" rel="stylesheet" type="text/css"> 
    <link href="{{ asset('template/include/css/style.css')}}" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/20dd01c86d.js" crossorigin="anonymous"></script> 
</head>
<body>
    <!--============================== Header Start ==============================-->
    @yield('header')
    <!--============================== Header End ==============================-->
   
    <!--============================== Main Start ==============================-->
<main id="main">

    <!--============================== Content Start ==============================-->

    @yield('contentSection')
    
    <!--============================== Content End ==============================-->

    <div class="icon-bg-box">
        <ul class="icon-bg-list">
            <li><a href="#!"><img src="{{asset('assets/front/images/facebook-img.avif')}}" alt=""></a></li>
            <li><a href="#!"><img src="{{asset('assets/front/images/linkdin-img.png')}}" alt=""></a></li>
            <li><a href="#!"><img src="{{asset('assets/front/images/instagram-icon.png')}}" alt=""></a></li>
            <li><a href="#!"><img src="{{asset('assets/front/images/whatsapp-icon.png')}}" alt=""></a></li>
            <li><a href="#!"><img src="{{asset('assets/front/images/phone-icon.jpg')}}" alt=""></a></li>
            <li><a href="#!"><img src="{{asset('assets/front/images/email-img.png')}}" alt=""></a></li>
        </ul>
    </div>

    <!--============================== Footer Start ==============================-->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="footer-link">
                        <li><a href="{{route('index')}}">Home |</a></li>
                        <li><a href="{{route('aboutCollege')}}">About Us |</a></li>
                        <li><a href="{{route('privacyPolicy')}}">Privacy policy |</a></li>
                        <li><a href="{{route('feedback')}}">Feedback |</a></li>
                        <li><a href="{{route('termCondition')}}">Use of terms |</a></li>
                        <li><a href="#!">Facility |</a></li>
                        <li><a href="{{route('placementCell')}}">Placement |</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bar">
            <div class="container">
                <div class="footer-bar1">
                    <p>2023 © Copyright by Avadh College Of Pharmacy</p>
                    <ul class="social-icon">
                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#!"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a href="#!"><i class="fas fa-phone-alt"></i></a></li>
                        <li><a href="#!"><i class="fas fa-envelope"></i></a></li>
                    </ul>
                </div>    
            </div>
        </div>
    </footer>
     <div class="admission-btn">
        <ul class="admission-btn-list">
            <li><a href="{{route('enquiry')}}" class="form-bt"><span><i class="fas fa-university"></i></span> Admission Enquiry Form</a></li>
            <li><a href="online_form.html" target="_blank" class="form-bt"><span><i class="fas fa-university"></i></span> Online Admission Form</a></li>
        </ul>
    </div>
    <!--============================== Footer End ==============================-->
    <script src="{{ asset('template/include/js/jquery.min.js')}}"></script>
    <script src="{{ asset('template/include/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/include/js/main.js ') }}"></script>
    <script src="{{ asset('template/include/js/theme_fornt_change.js ') }}"></script>

    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        function googleTranslateElementInit() {
           new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages : 'en,hi'}, 'google_translate_element');
        }
    </script> 
    <script src="{{ asset('template/include/js/custom.js ') }}"></script>
</body>

</html>