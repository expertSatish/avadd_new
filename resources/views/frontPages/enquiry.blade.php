@extends('front_layouts/layout')
@extends('front_layouts/header')
@section('contentSection')

<!--============================== Content Start ==============================-->
<div class="content-container ">
    <div class="container">
        <div class="row align-items-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.3s">
            <div class="col-xl-12">
                <div class="contact-wrapper">
                    <div class="contact-left">
                        <div class="main-heqading">
                            <h4>Enquiry Form</h4>
                            @if(session('success'))
                                <h4 class="alert-text" style="color: green;">{{ session('success')}}</h4>
                            @endif
                            @if(session('failed'))
                                <h4 class="alert-text">{{ session('failed')}}</h4>
                            @endif
                        </div>
                        <div class="contact-form">
                            <form action="{{route('admissionEnquiry')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form_group1">
                                            <input type="text" name="name" value="{{old('name')}}" required
                                                class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form_group1">
                                            <input type="email" name="email" value="{{old('email')}}" required
                                                class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form_group1">
                                            <input type="text" pattern="[6-9]{1}[0-9]{9}" value="{{old('phone')}}"
                                                title="Phone number with 6-9 and remaing 9 digit with 0-9" name="phone"
                                                required class="form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form_group1">
                                            <select class="form-control" name="category" id="category">
                                                <option value="">Select</option>
                                                <option value="Diploma">Diploma</option>
                                                <option value="Integrated">Integrated</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form_group1">
                                            <select class="form-control" name="program" id="category">
                                                <option value="Gen">Select programme</option>
                                                <option value="Gen">Diploma</option>
                                                <option value="O.B.C">Integrated</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form_group1">
                                            <select name="state" class="form-control" required id="stateId">
                                                <option value="" selected>Select State</option>
                                                @foreach($states as $state)
                                                <option value="{{$state->id}}">{{$state->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form_group1">
                                            <select name="city" class="form-control" required id="cityId">
                                            </select>
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
                    <div class="contact-right">
                        <div class="main-heqading">
                            <h4 style="color: #fff;">Contact Information</h4>
                        </div>
                        <ul class="quick-contact">
                            <li>
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                <address class="mb-0">
                                    <a href="#!" target="_blank">Nindoora Barabanki, Uttar Pradesh 225302</a>
                                </address>
                            </li>
                            <li>
                                <span><i class="fas fa-phone-alt"></i></span>
                                <a href="tel:+237 677912251">(+91-7080 308 091, 7080308039)<br></a>
                            </li>
                            <li>
                                <span><i class="fas fa-envelope"></i></span>
                                <a href="">© avadhpharmacybarabanki@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById("stateId").addEventListener("change", function() {
    var stateId = this.value;
    var citySelect = document.getElementById("cityId");

    // Clear existing options
    citySelect.innerHTML = '<option value="" selected>Select City</option>';

    // Fetch cities based on the selected state
    fetch('/get-cities?stateId=' + stateId)
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            // Populate the city dropdown with the retrieved cities
            data.forEach(function(city) {
                var option = document.createElement("option");
                option.value = city.id;
                option.textContent = city.name;
                citySelect.appendChild(option);
            });
        })
        .catch(function(error) {
            console.log(error);
        });
});
</script>


@endsection