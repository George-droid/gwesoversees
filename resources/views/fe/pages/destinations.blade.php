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
            <h2><em>DESTINATIONS</em></h2>
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
                <div class="col-md-8"> <!-- Anchor tag occupies 8 columns on medium and larger screens -->
                    <div class="dropdown">
                        <a href="#" class="btn btn-primary custom-dropdown-button dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            USA
                        </a>
                        <ul class="dropdown-menu col-md-12" aria-labelledby="dropdownMenuLink">
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