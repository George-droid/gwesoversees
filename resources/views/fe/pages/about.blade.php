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
                  <div class="services col-lg-6 my-auto">
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

    <section class="section why-us" data-section="section2">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                <h2>Meet Our CEO</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div id='tabs'>
                    <ul>
                        {{-- <li><a href='#tabs-1'>Expert Guidance</a></li> --}}
                        {{-- <li><a href='#tabs-2'>Test Preparation</a></li>
                        <li><a href='#tabs-3'>End-to-End Support</a></li> --}}
                    </ul>
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                        <div class="row">
                            <div class="col-md-6">
                            <img src="{{ asset('images/ceo.jpg')}}" alt="">
                            </div>
                            <div class="col-md-6 my-auto">
                            <h4 class="post-header">Meet our CEO</h4>
                            <h2 class="post-title">Mrs. May Maduka</h2>
                                <p>Begin a journey of educational excellence with Mrs. May Maduka, the remarkable leader who is propelling GWES (Goldenway Educational Services) to new heights. Mrs. May, who has an amazing 28-year career in education, is a force to be reckoned with, impacting the lives of kids across Nigeria and Africa.</p>
                                <p>Her illustrious career is punctuated by notable milestones, including substantial contributions to Nigerian educational institutions and the establishment of impactful relationships and partnerships with esteemed institutions in the UK, US, Canada, and beyond. 
                                    This strategic network provides a diverse array of educational options, ensuring the best possible education for the younger generation.</p>
                                <p>Under her sagacious guidance, GWES has emerged as a preeminent name in delivering top-tier educational solutions, effectively bringing ambitions into reality, and supporting the dreams of countless individuals. And as the name implies Goldenway Educational Services, 
                                    our students have golden opportunities abroad and emerging the best in their various institutions.</p>
                                <!-- CEO's contact details -->
                                <div class="ceo-contact">
                                    {{-- <h3 class="">Contact Mrs. May Maduka</h3> --}}
                                    <p>Contact Mrs. May Maduka via Email: <a href="mailto:may.maduka@goldenwayedu.com">may.maduka@goldenwayedu.com</a></p>
                                </div>
                            </div>
                            
                        </div>
                        </article>
                        {{-- <article id='tabs-2'>
                        <div class="row">
                            <div class="col-md-6">
                            <img src="{{ asset('images/test-prep1.png')}}" alt="">
                            </div>
                            <div class="col-md-6">
                            <h4>Accredited Test Preparation</h4>
                            <p>We go beyond professional advice to give complete test preparation help, recognizing the crucial role of language proficiency examinations like IELTS, and TOEFL in gaining admissions overseas.</p> 
                            <p>Our accredited training programs, led by expert teachers, are precisely intended to equip you with the skills and tactics required to excel in these tests.</p>
                            </div>
                        </div>
                        </article>
                        <article id='tabs-3'>
                        <div class="row">
                            <div class="col-md-6">
                            <img src="{{ asset('images/student-support2.png')}}" alt="">
                            </div>
                            <div class="col-md-6">
                            <h4>End-to-End Support</h4>
                            <p>We understand that the process of studying abroad involves various complex steps, from university applications to visa processing and other requirements.</p>
                            <p>We offer end-to-end support to simplify this process for you. Our dedicated team will assist you with every aspect of your journey,
                                ensuring a smooth transition to your chosen international institution.</p>
                            </div>
                        </div>
                        </article> --}}
                    </section>
                </div>
            </div>
            </div>
        </div>
    </section>

    {{-- <section class="founder-section">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>OUR FOUNDER</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-12">
                    <div class="post featured-post-lg">
                        <div class="post-content row">
                            <img src="{{ asset('images/founder-image.jpg')}}" class="col-lg-6">
                            <div class="founder-bio col-lg-6">
                                <h2 class="post-title">Founder's Name</h2>
                                <p>Meet the visionary leader behind Goldenway Educational Services, [Founder's Name]. With [number] years of experience in the education industry, [Founder's Name] has been a driving force in shaping the future of students across Nigeria and Africa.</p>
                                <p>[Founder's Name] has achieved remarkable milestones, including [mention key achievements, awards, or contributions].</p>
                                <p>Under [Founder's Name]'s guidance, Goldenway has become a prominent name in providing top-notch educational solutions and empowering dreams.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    
    <section class="partners-section p-5">
        <div class="col-md-12">
            <div class="section-heading">
            <h2>OUR DESTINATIONS</h2>
            </div>
        </div>
        <div class="carousel ">
            <div class="carousel-container  container-fluid">
                <div class=" col-md-6 col-lg-4 partner-card ">
                    <a href="{{ route('contact') }}" >
                        <img src="{{ asset('images/australia.jpg')}}"  class="card-img-top" alt="partner-04" >
                    </a>
                    <div class="partner-title"> Study In Australia</div>
                    {{-- <div class="partner-details">
                        <p>We have partners in different schools </p>
                        <p>University of Melbourne </p>
                        <p>University of Sydney </p>
                        <p>University of Queensland </p>
                    </div> --}}
                </div>
                <div class= " col-md-6 col-lg-4 partner-card  ">
                    <a href="{{ route('contact') }}" >
                        <img src="{{ asset('images/canada.jpg')}}"  class="card-img-top" alt="partner-02" >
                    </a>
                    <div class="partner-title"> Study In Canada</div>
                    {{-- <div class="partner-details">
                        <p>We have partners in different schools </p>
                        <p>University of Toronto </p>
                        <p>University of British Columbia </p>
                        <p>University of Alberta </p>
                    </div> --}}
                </div>
                <div class="col-md-6 col-lg-4 partner-card ">
                    <a href="{{ route('contact') }}" >
                        <img src="{{ asset('images/france_n.jpg')}}"  class="card-img-top" alt="partner-06" >
                    </a>
                    <div class="partner-title"> Study In France</div>
                    {{-- <div class="partner-details">
                        <p>We have partners in different schools </p>
                        <p>University of Paris </p>
                        <p>University of Montpellier </p>
                        <p>University of Strasbourg </p>
                    </div> --}}
                </div>
                <div class=" col-md-6 col-lg-4 partner-card">
                    <a href="{{ route('contact') }}" >
                        <img src="{{ asset('images/germany_n.jpg')}}"  class="card-img-top" alt="partner-05" >
                    </a>
                    <div class="partner-title"> Study In Germany</div>
                    {{-- <div class="partner-details">
                        <p>We have partners in different schools </p>
                        <p>Technical University of Munich </p>
                        <p>Ludwig Maximilian University of Munich </p>
                        <p>Heidelberg University </p>
                    </div> --}}
                </div>
                <div class=" col-md-6 col-lg-4 partner-card">
                <a href="{{ route('contact') }}" >
                    <img src="{{ asset('images/usa.jpg')}}" class="card-img-top" alt="partner-01"  >
                </a>    
                <div class="partner-title ">  Study In USA </div>
                {{-- <div class="partner-details">
                    <p>We have partners in different schools </p>
                    <p>University of Washington </p>
                    <p>University of California </p>
                    <p>University of Texas </p>
                </div> --}}
                </div>
                <div class=" col-md-6 col-lg-4 partner-card">
                <a href="{{ route('contact') }}" >
                    <img src="{{ asset('images/london_n.jpg')}}"  class="card-img-top" alt="partner-03" >
                </a>
                <div class="partner-title"> Study In UK</div>
                {{-- <div class="partner-details">
                    <p>We have partners in different schools </p>
                    <p>University of Oxford </p>
                    <p>University of Cambridge </p>
                    <p>Imperial College London </p>
                </div> --}}
                </div>
                {{-- <div class="col-md-6 col-lg-4 partner-card ">
                <img src="{{ asset('images/china_n.jpg')}}"  class="card-img-top" alt="partner-07" >
                <div class="partner-title"> Study In China</div>
                <div class="partner-details">
                    <p>We have partners in different schools </p>
                    <p>Tsinghua University </p>
                    <p>Peking University </p>
                    <p>Zhejiang University </p>
                </div>
                </div> --}}
                {{-- <div class="col-md-6 col-lg-4 partner-card">
                <img src="{{ asset('images/singapore.jpg')}}"  class="card-img-top" alt="partner-08" >
                <div class="partner-title"> Study In Singapore</div>
                <div class="partner-details">
                    <p>We have partners in different schools </p>
                    <p>National University of Singapore </p>
                    <p>Nanyang Technological University </p>
                    <p>Singapore Management University </p>
                </div>
                </div> --}}
                {{-- <div class="col-md-6 col-lg-4 partner-card ">
                <img src="{{ asset('images/india_n.jpg')}}"  class="card-img-top" alt="partner-09" >
                <div class="partner-title"> Study In India</div>
                <div class="partner-details">
                    <p>We have partners in different schools </p>
                    <p>Indian Institute of Science </p>
                    <p>Indian Institute of Technology Bombay </p>
                    <p>Indian Institute of Technology Delhi </p>
                </div>
                </div> --}}
                {{-- <div class="carousel-container container-fluid">
                    @foreach($destinations as $destination)
                        <div class="col-md-6 col-lg-4 partner-card">
                            <img src="{{ asset($destination->image)}}" class="card-img-top" alt="{{ $destination->name }}">
                            <div class="partner-title">{{ $destination->name }}</div>
                            <div class="partner-details">
                                <p>Number of Universities: {{ $destination->universities->count() }}</p>
                                <p>Universities:</p>
                                <ul>
                                    @foreach($destination->universities as $university)
                                        <li>{{ $university->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div> --}}
            </div>
        </div>
        <div class="carousel-controls justify-content-center">
            <button id="prev-button"> </button>
            <button id="next-button"> </button>
        </div>
    </section>

    {{-- <section class="blogs-section">
        <div class="container-xl">
            <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                <h2>OUR SERVICES</h2>
                </div>
            </div>
            </div>
            <div class="row gy-4">
            <div class="col-lg-12">
                <div class="post featured-post-lg">
                <div class="post-content row">
                    <img src="{{ asset('images/services.svg')}}" class="col-lg-6">
                    <!-- <a href="" class="category-badge">Study Abroad</a> -->
                    <div class="services col-lg-6">
                    <h2 class="post-title"><a href="">We Offer These Serives</a></h2>
                    <!-- <p class="post-excerpt">Here are our core services we provide towards your educational aspirations.</p> -->
                    <div class="row gy-2">
                        <div class="col-lg-12 mb-2 mt-2">
                        <div class="p-3 border bg-dark"><i class="fa fa-check-square-o" aria-hidden="true"></i>
                            University Placements</div>
                        </div>
                        <div class="col-lg-12 mb-2">
                        <div class="p-3 border bg-dark"><i class="fa fa-check-square-o" aria-hidden="true"></i>
                            Intensive welfare services for our students</div>
                        </div>
                        <div class="col-lg-12 mb-2">
                        <div class="p-3 mt-2 border bg-dark"><i class="fa fa-check-square-o" aria-hidden="true"></i>
                            Accredited training for IELTS, TOEFL, SAT, GRE & GMAT</div>
                        </div>
                        <div class="col-lg-12">
                        <div class="p-3 mt-2 border bg-dark"><i class="fa fa-check-square-o" aria-hidden="true"></i>
                            Comprehensive counselling</div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section> --}}
@endsection