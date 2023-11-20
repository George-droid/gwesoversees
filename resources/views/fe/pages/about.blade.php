@extends('fe.layouts.default')

@section('content')
    <section class="section main-banner" id="top" data-section="section1">
        <img class="hero-img" src="{{ asset('images/about-us.jpg')}}" alt="">
        <!-- <video autoplay muted loop id="bg-video">
            <source src="assets/images/course-video.mp4" type="video/mp4" />
        </video> -->

        <div class="hero-overlay header-text">
            <div class="caption">
                <h6>Goldenway Educational Services</h6>
                <h2><em>ABOUT</em> US</h2>
                <div class="main-button">
                    <div><a href="{{ route('home') }}">Home</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="blogs-section">
        <div class="container-xl">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>WHO ARE WE?</h2>
              </div>
            </div>
          </div>
          <div class="row gy-4">
            <div class="col-lg-12">
              <div class="post featured-post-lg">
                <div class="post-content row">
                  <img src="{{ asset('images/about-us-svg.svg')}}" class="col-lg-6">
                  <!-- <a href="" class="category-badge">Study Abroad</a> -->
                  <div class="services col-lg-6">
                    <h2 class="post-title"><a href="">Premier Educational Solutions Provider</a></h2>
                    <!-- <p class="post-excerpt">Here are our core services we provide towards your educational aspirations.</p> -->
                    <div class="row">
                        <p>Since our inception in 2004, Goldenway Educational Services (GWES) has been a beacon of hope for students and parents 
                        across Nigeria and Africa. With a legacy of over a decade, we have grown into a respected educational organization with a mission to empower dreams.<br/></p>
                        <p>With our headquarters in Lagos, Nigeria, and dedicated offices in both Abuja and the UK, we provide unwavering commitment and convenience to our clients.<br/></p>
                        <p>We specialize in providing comprehensive educational solutions. Our core mission is to guide responsible Nigerian and Africans to enrollment in esteemed 
                        institutions across the globe. We offer expert assistance in securing admissions in renowned universities and colleges in countries such as the UK, USA, Canada, and many more.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="partners-section">
        <div class="col-md-12">
            <div class="section-heading">
            <h2>OUR DESTINATIONS</h2>
            </div>
        </div>
        <div class="carousel ">
            <div class="carousel-container  container-fluid">

                <div class=" col-md-6 col-lg-4 partner-card">
                <img src="{{ asset('images/usa.jpg')}}" class="card-img-top" alt="partner-01" preload >
                <div class="partner-title "> Study In USA</div>
                {{-- <div class="partner-details">
                    <p>We have partners in different schools </p>
                    <p>University of Washington </p>
                    <p>University of California </p>
                    <p>University of Texas </p>
                </div> --}}
                </div>

                <div class= " col-md-6 col-lg-4 partner-card  ">
                <img src="{{ asset('images/canada.jpg')}}"  class="card-img-top" alt="partner-02" preload>
                <div class="partner-title"> Study In Canada</div>
                {{-- <div class="partner-details">
                    <p>We have partners in different schools </p>
                    <p>University of Toronto </p>
                    <p>University of British Columbia </p>
                    <p>University of Alberta </p>
                </div> --}}
                </div>

                <div class=" col-md-6 col-lg-4 partner-card">
                <img src="{{ asset('images/london.jpg')}}"  class="card-img-top" alt="partner-03" preload>
                <div class="partner-title"> Study In UK</div>
                {{-- <div class="partner-details">
                    <p>We have partners in different schools </p>
                    <p>University of Oxford </p>
                    <p>University of Cambridge </p>
                    <p>Imperial College London </p>
                </div> --}}
                </div>

                <div class=" col-md-6 col-lg-4 partner-card ">
                <img src="{{ asset('images/australia.jpg')}}"  class="card-img-top" alt="partner-04" preload>
                <div class="partner-title"> Study In Australia</div>
                {{-- <div class="partner-details">
                    <p>We have partners in different schools </p>
                    <p>University of Melbourne </p>
                    <p>University of Sydney </p>
                    <p>University of Queensland </p>
                </div> --}}
                </div>
            

                <div class=" col-md-6 col-lg-4 partner-card">
                <img src="{{ asset('images/germany.jpg')}}"  class="card-img-top" alt="partner-05" preload>
                <div class="partner-title"> Study In Germany</div>
                {{-- <div class="partner-details">
                    <p>We have partners in different schools </p>
                    <p>Technical University of Munich </p>
                    <p>Ludwig Maximilian University of Munich </p>
                    <p>Heidelberg University </p>
                </div> --}}
                </div>

                <div class="col-md-6 col-lg-4 partner-card ">
                <img src="{{ asset('images/france.jpg')}}"  class="card-img-top" alt="partner-06" preload>
                <div class="partner-title"> Study In France</div>
                {{-- <div class="partner-details">
                    <p>We have partners in different schools </p>
                    <p>University of Paris </p>
                    <p>University of Montpellier </p>
                    <p>University of Strasbourg </p>
                </div> --}}
                </div>

                <div class="col-md-6 col-lg-4 partner-card ">
                <img src="{{ asset('images/china.jpg')}}"  class="card-img-top" alt="partner-07" preload>
                <div class="partner-title"> Study In China</div>
                {{-- <div class="partner-details">
                    <p>We have partners in different schools </p>
                    <p>Tsinghua University </p>
                    <p>Peking University </p>
                    <p>Zhejiang University </p>
                </div> --}}
                </div>

                <div class="col-md-6 col-lg-4 partner-card">
                <img src="{{ asset('images/singapore.jpg')}}"  class="card-img-top" alt="partner-08" preload>
                <div class="partner-title"> Study In Singapore</div>
                {{-- <div class="partner-details">
                    <p>We have partners in different schools </p>
                    <p>National University of Singapore </p>
                    <p>Nanyang Technological University </p>
                    <p>Singapore Management University </p>
                </div> --}}
                </div>

                <div class="col-md-6 col-lg-4 partner-card ">
                <img src="{{ asset('images/india.jpg')}}"  class="card-img-top" alt="partner-09" preload>
                <div class="partner-title"> Study In India</div>
                {{-- <div class="partner-details">
                    <p>We have partners in different schools </p>
                    <p>Indian Institute of Science </p>
                    <p>Indian Institute of Technology Bombay </p>
                    <p>Indian Institute of Technology Delhi </p>
                </div> --}}
                </div>

            
            </div>
        </div>
        <div class="carousel-controls justify-content-center">
            <button id="prev-button"> </button>
            <button id="next-button"> </button>
        </div>
    </section>
@endsection