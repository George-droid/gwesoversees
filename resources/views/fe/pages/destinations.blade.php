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
            <h2><em>DESRINATIONS</em></h2>
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
    </div>
    <div class="container mt-3 destination-dropdown">
        <h2 class="d-flex justify-content-center">List of Country Destinations</h2>                                       
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8"> <!-- Button occupies 8 columns on medium and larger screens -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary custom-dropdown-button dropdown-toggle" data-bs-toggle="dropdown">
                            USA
                        </button>
                        <ul class="dropdown-menu col-md-12">
                            <li><a class="dropdown-item" href="#">University of Chicago</a></li>
                            <li><a class="dropdown-item" href="#">University of Chicago</a></li>
                            <li><a class="dropdown-item" href="#">University of Chicago</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section>

{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        const destinationTogglers = document.querySelectorAll('.destination-toggler');

        destinationTogglers.forEach(toggler => {
            toggler.addEventListener('click', function (e) {
                e.preventDefault();
                const universities = toggler.nextElementElementSibling;
                universities.style.display = universities.style.display === 'none' ? 'block' : 'none';
            });
        });
    });
</script> --}}
    
@endsection