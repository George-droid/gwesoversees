@extends('fe.layouts.default')

@section('content')

<section class="section main-banner" id="top" data-section="section1">
    <img class="hero-img" src="{{ asset('images/compass.jpg')}}" alt="">
    <!-- <video autoplay muted loop id="bg-video">
        <source src="assets/images/course-video.mp4" type="video/mp4" />
    </video> -->

    <div class="hero-overlay header-text">
        <div class="caption">
            <h6>Goldenway Educational Services</h6>
            <h2><em>GALLERY AND EVENTS</em></h2>
            <div class="main-button">
                <div><a href="{{ route('home') }}">Home</a></div>
            </div>
        </div>
    </div>
</section>

<section class="gallery-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Event Gallery</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Example gallery items, replace these with your actual images -->
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery/image1.jpg') }}" alt="Event Image 1">
                    <div class="gallery-overlay">
                        <a href="{{ asset('images/gallery/image1.jpg') }}" data-lightbox="gallery" data-title="Event Image 1">
                            <i class="fas fa-search-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery/image2.jpg') }}" alt="Event Image 2">
                    <div class="gallery-overlay">
                        <a href="{{ asset('images/gallery/image2.jpg') }}" data-lightbox="gallery" data-title="Event Image 2">
                            <i class="fas fa-search-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Add more items as needed -->

        </div>
    </div>
</section>

<section class="gallery-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Event Gallery</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Example gallery items, replace these with your actual images -->
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery/image1.jpg') }}" alt="Event Image 1">
                    <div class="gallery-overlay">
                        <a href="{{ asset('images/gallery/image1.jpg') }}" data-lightbox="gallery" data-title="Event Image 1">
                            <i class="fas fa-search-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery/image2.jpg') }}" alt="Event Image 2">
                    <div class="gallery-overlay">
                        <a href="{{ asset('images/gallery/image2.jpg') }}" data-lightbox="gallery" data-title="Event Image 2">
                            <i class="fas fa-search-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Add more items as needed -->

        </div>
    </div>
</section>


@endsection