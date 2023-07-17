@extends('front_layouts/layout')
@extends('front_layouts/header')
@section('contentSection')

<!--============================== content Start ==============================-->
<div class="content-container">
    <div class="container">
        <div class="contact-list-item">
            <div class="contact-item">
                <div class="contact-icon-box">
                    <i class="fas fa-map-marker-alt"></i>
                    <h6>Address</h6>
                    <p>Nindoora Barabanki, Uttar Pradesh 225302</p>
                </div>
            </div>
            <div class="contact-item">
                <div class="contact-icon-box">
                    <i class="fas fa-phone"></i>
                    <h6>Phone</h6>
                    <a href="tel:+237 677912251">(+91-7080 308 091, 7080308039)<br></a>
                </div>
            </div>
            <div class="contact-item">
                <div class="contact-icon-box">
                    <i class="far fa-envelope"></i>
                    <h6>Email</h6>
                    <p>© avadhpharmacybarabanki@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============================== content End ==============================-->



<!--============================== content Start ==============================-->
<div class="content-container p-0">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="form-bg">
                    <h6>GET IN TOUCH</h6>
                    <div><h4 style="color:green;" id="alert_success"></h4></div>
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                    <div class="error" id="e_namee" style="color: red;"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email"  class="form-control" placeholder="Email">
                                    <div class="error" id="e_emaill" style="color: red;"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject"  placeholder="Subject">
                                    <div class="error" id="e_subject" style="color: red;"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" placeholder="Message"></textarea>
                                    <div class="error" id="e_message" style="color: red;"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-sub">
                                    <button type="submit" class="btn-submit">Send Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="world-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3551.3156161014163!2d81.05938751504922!3d27.114867283040994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399945cdb7b995c3%3A0x904458a1171a8357!2sAvadh%20College%20of%20Pharmacy%20Nindoora%20Barabanki!5e0!3m2!1sen!2sin!4v1686141749760!5m2!1sen!2sin"
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    


    $(document).ready(function() {
    $(document).on('submit', '#contactForm', function(e) {
        e.preventDefault();
        let formData = new FormData($('#contactForm')[0]);
        $.ajax({
            type: "POST",
            url: "contact-save",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.sts) {
                    $('.alert-success').hide();
                    $("#alert_success").html(response.msg);
                    $("#name").html('')
                    $("#email").html('')
                    $("#subject").html('')
                    $("#message").html('')
                    $("#e_namee").html('');
                    $("#e_emaill").html('');
                    $("#e_subject").html('');
                    $("#e_message").html('');
                    $('#contactForm').trigger("reset");
                } else {
                    var obj = response.msg;
                    if (("name" in obj) == 0) {
                        $("#e_namee").html('');
                    } else {
                        $("#e_namee").html(obj.name);
                    }
                    if (("email" in obj) == 0) {
                        $("#e_emaill").html('');
                    } else {
                        $("#e_emaill").html(obj.email);
                    }
                    if (("subject" in obj) == 0) {
                        $("#e_subject").html('');
                    } else {
                        $("#e_subject").html(obj.subject);
                    }
                    if (("message" in obj) == 0) {
                        $("#e_message").html('');
                    } else {
                        $("#e_message").html(obj.message);

                    }
                }
            }
        });
    });
});


    </script>


@endsection