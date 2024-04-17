@extends('fe.layouts.default')

@section('content')

<section class="section main-banner" id="top" data-section="section1">
    <img class="hero-img" src="{{ asset('images/contact-us.jpeg')}}" alt="">
    <!-- <video autoplay muted loop id="bg-video">
        <source src="assets/images/course-video.mp4" type="video/mp4" />
    </video> -->

    <div class="hero-overlay header-text">
        <div class="caption">
            <h6>Goldenway Educational Services</h6>
            <h2><em>CONTACT</em> US</h2>
            <div class="main-button">
                <div><a href="{{ route('home') }}">Home</a></div>
            </div>
        </div>
    </div>
</section>


<section class="section contact">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-12">
            <div class="section-heading">
                <h2>GET IN TOUCH</h2>
            </div>
            </div>
        </div>
        <div class="row gy-4 row d-flex justify-content-center">
            <div class="col-md-8 mt-3">
                <form id="contact" action="{{ route('contact.submit') }}" method="post">
                    @csrf
                    <div class="contact-form-title text-center">Tell us about your service needs</div>
                    <div class="row">
                    <div class="col-md-12">
                    <fieldset>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                    </fieldset>
                    </div>
                    <div class="col-md-12">
                    <fieldset>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" required="">
                    </fieldset>
                    </div>
                    <div class="col-md-12">
                        <fieldset>
                            <input name="phone" type="text" class="form-control" id="phone" placeholder="Your Phone Number" required="">
                        </fieldset>
                    </div>
                    <div class="col-md-12">
                        <fieldset>
                            <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                        </fieldset>
                    </div>
                    <div class="col-md-12 bp-3">
                        <fieldset>
                            <select name="consultancy_option" class="form-control" id="consultancy_option" required="">
                                <option value="" disabled selected>Select Consultancy Option</option>
                                <option value="in-person">In-Person Consultancy</option>
                                <option value="virtual">Virtual Consultancy</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-md-12">
                        <fieldset>
                        <textarea name="message" rows="4" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                        </fieldset>
                    </div>
                    <div class="col-md-12">
                        <fieldset>
                        <button type="submit" id="form-submit" class="button">Send Message Now</button>
                        </fieldset>
                    </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- <div class="row gy-4">
            <div class="col-lg-12">
              <div class="post featured-post-lg">
                <div class="post-content-contact ">
                    <p class="post-title text-center">YOU ARE INVITED TO VISIT OUR </p>
                    <div class="container row d-flex justify-content-center">
                        <div class="col text-center">
                        </div>
                        <div class=" col-lg-8 partner-card">
                            <div class="partner-title text-center"> Office Location</div>
                            <div class="partner-details text-center">
                            <h6>Riggz Plaza, Isheri Road Omole</h6>
                            <h6>P.O Box 3117, Ikeja, Lagos</h6>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div> --}}
    </div>
</section>
    
@endsection