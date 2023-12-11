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
            <h2>Our Universities</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-3 destination-dropdown">
        {{-- <h2 class="d-flex justify-content-center">List of Country Destinations</h2>                                        --}}
        {{-- <div class="container">
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
        </div> --}}
        <!-- Client 1 - Bootstrap Brain Component -->
        <section class="py-3 py-md-5 py-xl-8">
            <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                <h2 class="mb-4 display-5 text-center">Patnering Universities</h2>
                {{-- <p class="text-secondary mb-5 text-center">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque et neque id ligula mattis commodo.</p> --}}
                <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                </div>
            </div>
            </div>
        
            <div class="container overflow-hidden">
                <div class="filter-section">
                    <button class="filter-button" data-filter="all">All</button>
                    <button class="filter-button" data-filter="australia">Australia</button>
                    <button class="filter-button" data-filter="canada">Canada</button>
                    <button class="filter-button" data-filter="germany">Germany</button>
                    <button class="filter-button" data-filter="uk">UK</button>
                    <button class="filter-button" data-filter="usa">USA</button>
                    <!-- Add other filter buttons based on categories or criteria -->
                </div>
            <div class="row gy-5 pt-3">
                <div class="col-6 col-md-3 university align-self-center text-center" data-category="australia">
                    <!-- Replace 'uni-melbourne.svg' with the correct path -->
                    <img src="{{ asset('images/uni-melbourne.svg') }}" width="135" height="135" alt="University of Melbourne Logo">
                </div>
                <div class="col-6 col-md-3 university align-self-center text-center" data-category="australia">
                    <!-- Replace 'uni-melbourne.svg' with the correct path -->
                    <img src="{{ asset('images/uni-adelaide.svg') }}" width="135" height="135" alt="University of Adelaide Logo">
                </div>
                <div class="col-6 col-md-3 university align-self-center text-center" data-category="canada">
                    <!-- Replace 'uni-melbourne.svg' with the correct path -->
                    <img src="{{ asset('images/uni-mcewan.svg') }}" width="135" height="135" alt="McEwan University ">
                </div>
                <div class="col-6 col-md-3 university align-self-center text-center" data-category="canada">
                    <!-- Replace 'uni-melbourne.svg' with the correct path -->
                    <img src="{{ asset('images/durham-college.svg') }}" width="135" height="135" alt="Durham College">
                </div>
                <div class="col-6 col-md-3 university align-self-center text-center" data-category="germany">
                    <!-- Replace 'uni-melbourne.svg' with the correct path -->
                    <img src="{{ asset('images/rwth-aachen-uni.svg') }}" width="135" height="135" alt="RWTH Aachen University">
                </div>
                <div class="col-6 col-md-3 university align-self-center text-center" data-category="germany">
                    <!-- Replace 'uni-melbourne.svg' with the correct path -->
                    <img src="{{ asset('images/uni-freiburg.svg') }}" width="135" height="135" alt="University of Freiburg">
                </div>
                <div class="col-6 col-md-3 university align-self-center text-center" data-category="uk">
                    <!-- Replace 'uni-melbourne.svg' with the correct path -->
                    <img src="{{ asset('images/uni-pittsburgh.svg') }}" width="135" height="135" alt="University of Pittsburgh">
                </div>
                <div class="col-6 col-md-3 university align-self-center text-center" data-category="uk">
                    <!-- Replace 'uni-melbourne.svg' with the correct path -->
                    <img src="{{ asset('images/uni-plymouth.svg') }}" width="135" height="135" alt="University of Plymouth">
                </div>
                <div class="col-6 col-md-3 university align-self-center text-center" data-category="usa">
                    <!-- Replace 'uni-melbourne.svg' with the correct path -->
                    <img src="{{ asset('images/uni-michigan.svg') }}" width="135" height="135" alt="University of Michigan">
                </div>
                <div class="col-6 col-md-3 university align-self-center text-center" data-category="usa">
                    <!-- Replace 'uni-melbourne.svg' with the correct path -->
                    <img src="{{ asset('images/uni-georgia.svg') }}" width="135" height="135" alt="University of Georgia">
                </div>
            </div>
            </div>
        </section>
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