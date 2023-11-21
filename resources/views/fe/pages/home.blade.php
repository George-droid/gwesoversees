@extends('fe.layouts.default')

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
        <video autoplay muted loop id="bg-video">
            <source src="{{ asset('images/course-video.mp4')}}" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Goldenway Educational Services</h6>
                <h2><em>Empowering</em> your future</h2>
                <div class="main-button">
                    <div><a href="{{ route('about') }}">Discover more</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->


    <section class="features">
    <div class="container">
        <div class="row">
        <div class="col-lg-4 col-12">
            <div class="features-post">
            <div class="features-content">
                <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Educational Experts</h4>
                </div>
                <div class="content-hide">
                <p>We are a group of committed educational experts with years of experience. Our experienced counselors are well-versed in international educational systems, admission procedures, and scholarship prospects.</p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                {{-- <div class="scroll-to-section"><a href="#section2">More Info.</a></div> --}}
            </div>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="features-post second-features">
            <div class="features-content">
                <div class="content-show">
                <h4><i class="fa fa-globe"></i>Global Reach</h4>
                </div>
                <div class="content-hide">
                <p>We understand the unique needs of Nigerian and African parents and students while also having a vast network of connections with reputable institutions worldwide.</p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                {{-- <div class="scroll-to-section"><a href="#section3">Details</a></div> --}}
            </div>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="features-post third-features">
            <div class="features-content">
                <div class="content-show">
                <h4><i class="fa fa-book"></i>Path to success</h4>
                </div>
                <div class="content-hide">
                <p>Our mission is to be your guiding light as you pursue admissions and placements at prestigious international institutions. We are here to serve you by empowering you, providing complete solutions, and unlocking prospects for a brighter future.</p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                {{-- <div class="scroll-to-section"><a href="#section4">Read More</a></div> --}}
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
            <h2>Why choose Goldenway?</h2>
            </div>
        </div>
        <div class="col-md-12">
            <div id='tabs'>
            <ul>
                <li><a href='#tabs-1'>Expert Guidance</a></li>
                <li><a href='#tabs-2'>Test Preparation</a></li>
                <li><a href='#tabs-3'>End-to-End Support</a></li>
            </ul>
            <section class='tabs-content'>
                <article id='tabs-1'>
                <div class="row">
                    <div class="col-md-6">
                    <img src="{{ asset('images/expert-guidance.png')}}" alt="">
                    </div>
                    <div class="col-md-6">
                    <h4>Expert Guidance</h4>
                    <p>At Goldenway, we leverages our knowledge, experience, and network to assist parents
                        and students in making informed decisions about international education, scholarships, 
                        and admissions, ultimately enhancing their prospects on a global scale.</p>
                    </div>
                </div>
                </article>
                <article id='tabs-2'>
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
                </article>
            </section>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!-- 
    <section class="section coming-soon" data-section="section3">
    <div class="container">
        <div class="row">
        <div class="col-md-7 col-xs-12">
            <!-- <div class="continer centerIt">
            <div>
                <h4>Take <em>any online course</em> and win $326 for your next class</h4>
                <div class="counter">

                <div class="days">
                    <div class="value">00</div>
                    <span>Days</span>
                </div>

                <div class="hours">
                    <div class="value">00</div>
                    <span>Hours</span>
                </div>

                <div class="minutes">
                    <div class="value">00</div>
                    <span>Minutes</span>
                </div>

                <div class="seconds">
                    <div class="value">00</div>
                    <span>Seconds</span>
                </div>

                </div>
            </div>
            </div>
        </div> -->
        <!-- <div class="col-md-5">
            <div class="right-content">
            <div class="top-content">
                <h6>Register your free account and <em>get immediate</em> access to online courses</h6>
            </div>
            <form id="contact" action="" method="get">
                <div class="row">
                <div class="col-md-12">
                    <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                    </fieldset>
                </div>
                <div class="col-md-12">
                    <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                    </fieldset>
                </div>
                <div class="col-md-12">
                    <fieldset>
                    <input name="phone-number" type="text" class="form-control" id="phone-number" placeholder="Your Phone Number" required="">
                    </fieldset>
                </div>
                <div class="col-md-12">
                    <fieldset>
                    <button type="submit" id="form-submit" class="button">Get it now</button>
                    </fieldset>
                </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
    </section>  -->

    <!-- Section for counter -->

    <section class="ftco-section-counter counter" id="counters-section" data-section="section0">
        <div class="overlay">
            <div class="container px-5 py-5 my-5 justify-content-center">
                <div class="row section-counter">
                
                    <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                        <div class=" counter counter-wrap-2 d-flex">
                        <span  style="padding: 3px 5px;">
                            <i class="fa-solid fa-user-graduate "></i>
                        </span>
                        <div class="counter">
                            <h2 data-target="150" class="count" id="graduates-count"> 0 </h2>
                            <span class="caption">Graduates</span>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                        <div class=" counter counter-wrap-2 d-flex">
                        <span style="padding: 3px 5px;">
                            <i class="fa-solid fa-chalkboard-user"></i>
                        </span>

                        <div class="counter">
                            <h2  data-target="40" class="count" >0</h2>
                            <span  class="caption">Students Advisors</span>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                        <div class=" counter counter-wrap-2 d-flex ">
                        <span style="padding: 3px 5px;">
                            <i class="fa-solid fa-school"></i>
                        </span>
                        <div class="counter">
                            <h2 data-target="56" class="count" id="universities-count">0</h2>
                            <span  class="caption">Universities</span>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                        <div class="counter-wrap-2 d-flex">
                        <span style="padding: 3px 5px;">
                            <i class="fa-solid fa-book"></i>
                        </span>
                        <div class="counter">
                            <h2  data-target="100" class="count" id="programs-count">0</h2>
                            <span class="caption">Programs</span>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="section courses" data-section="section4">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="section-heading">
            <h2>Choose Your Course</h2>
            </div>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item">
            <img src="assets/images/courses-01.jpg" alt="Course #1">
            <div class="down-content">
                <h4>Digital Marketing</h4>
                <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
                <div class="author-image">
                <img src="assets/images/author-01.png" alt="Author 1">
                </div>
                <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
            </div>
            <div class="item">
            <img src="assets/images/courses-02.jpg" alt="Course #2">
            <div class="down-content">
                <h4>Business World</h4>
                <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
                <div class="author-image">
                <img src="assets/images/author-02.png" alt="Author 2">
                </div>
                <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
            </div>
            <div class="item">
            <img src="assets/images/courses-03.jpg" alt="Course #3">
            <div class="down-content">
                <h4>Media Technology</h4>
                <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
                <div class="author-image">
                <img src="assets/images/author-03.png" alt="Author 3">
                </div>
                <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
            </div>
            <div class="item">
            <img src="assets/images/courses-04.jpg" alt="Course #4">
            <div class="down-content">
                <h4>Communications</h4>
                <p>Download free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
                <div class="author-image">
                <img src="assets/images/author-04.png" alt="Author 4">
                </div>
                <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
            </div>
            <div class="item">
            <img src="assets/images/courses-05.jpg" alt="">
            <div class="down-content">
                <h4>Business Ethics</h4>
                <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
                <div class="author-image">
                <img src="assets/images/author-05.png" alt="">
                </div>
                <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
            </div>
            <div class="item">
            <img src="assets/images/courses-01.jpg" alt="">
            <div class="down-content">
                <h4>Photography</h4>
                <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
                <div class="author-image">
                <img src="assets/images/author-01.png" alt="">
                </div>
                <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
            </div>
            <div class="item">
            <img src="assets/images/courses-02.jpg" alt="">
            <div class="down-content">
                <h4>Web Development</h4>
                <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
                <div class="author-image">
                <img src="assets/images/author-02.png" alt="">
                </div>
                <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
            </div>
            <div class="item">
            <img src="assets/images/courses-03.jpg" alt="">
            <div class="down-content">
                <h4>Learn HTML CSS</h4>
                <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
                <div class="author-image">
                <img src="assets/images/author-03.png" alt="">
                </div>
                <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
            </div>
            <div class="item">
            <img src="assets/images/courses-04.jpg" alt="">
            <div class="down-content">
                <h4>Social Media</h4>
                <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
                <div class="author-image">
                <img src="assets/images/author-04.png" alt="">
                </div>
                <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
            </div>
            <div class="item">
            <img src="assets/images/courses-05.jpg" alt="">
            <div class="down-content">
                <h4>Digital Arts</h4>
                <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
                <div class="author-image">
                <img src="assets/images/author-05.png" alt="">
                </div>
                <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
            </div>
            <div class="item">
            <img src="assets/images/courses-01.jpg" alt="">
            <div class="down-content">
                <h4>Media Streaming</h4>
                <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
                <div class="author-image">
                <img src="assets/images/author-01.png" alt="">
                </div>
                <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section> -->

    <section class="blogs-section">
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
    </section>



    <section class="section video" data-section="section5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <div class="left-content">
                <span>Testimonial</span>
                <h4>Meet a few successful <em>candidates of Goldenway</em></h4>
                <p>The road to success begins with a step towards goal.
                <br><br>Learn how others took a step with us and are in line with their goals</p>
                <!-- <div class="main-button"><a rel="nofollow" href="https://fb.com/templatemo" target="_parent">External URL</a></div> -->
                </div>
            </div>
            <div class="col-md-6">
                <article class="video-item">
                <div class="video-caption">
                    <h4>Listen to our students</h4>
                </div>
                <figure>
                    <a href="https://www.youtube.com/watch?v=r9LtOG6pNUw" class="play"><img src="{{ asset('images/main-thumb.png')}}"></a>
                </figure>
                </article>
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
                {{-- <a href="{{ route('destinations') }}"> --}}
                    <div class=" col-md-6 col-lg-4 partner-card">
                    <img src="{{ asset('images/usa.jpg')}}" class="card-img-top" alt="partner-01" preload >
                    <div class="partner-title ">  Study In USA </div>
                    {{-- <div class="partner-details">
                        <p>We have partners in different schools </p>
                        <p>University of Washington </p>
                        <p>University of California </p>
                        <p>University of Texas </p>
                    </div> --}}
                    </div>
                {{-- </a> --}}
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
                <img src="{{ asset('images/london_n.jpg')}}"  class="card-img-top" alt="partner-03" preload>
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
                <img src="{{ asset('images/germany_n.jpg')}}"  class="card-img-top" alt="partner-05" preload>
                <div class="partner-title"> Study In Germany</div>
                {{-- <div class="partner-details">
                    <p>We have partners in different schools </p>
                    <p>Technical University of Munich </p>
                    <p>Ludwig Maximilian University of Munich </p>
                    <p>Heidelberg University </p>
                </div> --}}
                </div>

                <div class="col-md-6 col-lg-4 partner-card ">
                <img src="{{ asset('images/france_n.jpg')}}"  class="card-img-top" alt="partner-06" preload>
                <div class="partner-title"> Study In France</div>
                {{-- <div class="partner-details">
                    <p>We have partners in different schools </p>
                    <p>University of Paris </p>
                    <p>University of Montpellier </p>
                    <p>University of Strasbourg </p>
                </div> --}}
                </div>

                <div class="col-md-6 col-lg-4 partner-card ">
                <img src="{{ asset('images/china_n.jpg')}}"  class="card-img-top" alt="partner-07" preload>
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
                <img src="{{ asset('images/india_n.jpg')}}"  class="card-img-top" alt="partner-09" preload>
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

    <section class="blogs-section">
    <div class="container-xl">
        <div class="row">
        <div class="col-md-12">
            <div class="section-heading">
            <h2>LATEST POSTS</h2>
            </div>
        </div>
        </div>
        <div class="row gy-4">
        <div class="col-lg-8">
            <div class="post featured-post-lg">
            <div class="post-content">
                <a href="{{ route('blogs') }}" class="category-badge">Study Abroad</a>
                <h2 class="post-title"><a href="{{ route('choosing-the-right') }}">Choosing the Right Study Destination: Factors to Consider</a></h2>
                <p class="post-excerpt">Selecting the perfect study destination is a critical decision for any aspiring international student. Our blog post delves into the key factors to consider, including the cost of living, language barriers, and cultural fit. Learn how to make an informed choice that aligns with your educational and lifestyle goals.</p>
                <ul class="post-meta list-inline">
                <li class="list-inline-item"><i class="far fa-user"></i> Karen Doe</li>
                <li class="list-inline-item"><i class="far fa-calendar"></i> 28 Oct 2023</li>
                </ul>
            </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="post-tabs rounded bordered">
            <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
                <li class="nav-item" role="presentation">
                <button class="nav-link active" id="popular-tab" data-bs-toggle="tab" data-bs-target="#popular" role="tab"  id="popular-tab" role="tab" type="button">
                    Popular
                </button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="recent-tab" data-bs-toggle="tab" data-bs-target="#recent" data-bs-toggle="tab"  id="recent-tab" role="tab" type="button">
                    Recent
                </button>
                </li>
            </ul>

            <div class="tab-content" id="postsTabContent">
                <div class="tab-pane fade show active" id="popular" role="tabpanel">

                <div class="details clearfix">
                    <h6 class="post-title my-0"><a href="{{ route('navigating-the-application') }}">Navigating the Application Process: Tips for Studying Abroad</a>
                    </h6>
                    <ul class="meta list-inline mb-0 mt-1">
                    <li class="list-inline-item">15 Aug 2023</li>
                    </ul>
                </div>

                {{-- <div class="details clearfix">
                    <h6 class="post-title my-0"><a href="#">Maintaining a Healthy Work-Study-Life Balance Abroad</a></h6>
                    <ul class="meta list-inline mb-0 mt-1">
                    <li class="list-inline-item">29 March 2021</li>
                    </ul>
                </div> --}}

                <div class="details clearfix">
                    <h6 class="post-title my-0"><a href="{{ route('cultural-adjustment') }}">Cultural Adjustment: Thriving in a New Environment</a></h6>
                    <ul class="meta list-inline mb-0 mt-1">
                    <li class="list-inline-item">29 July 2023</li>
                    </ul>
                </div>
                </div>
                
                <div class="tab-pane fade show" id="recent" role="tabpanel">
                    <div class="details clearfix">
                        <h6 class="post-title my-0"><a href="{{ route('choosing-the-right') }}">Choosing the Right Study Destination: Factors to Consider"</a></h6>
                        <ul class="meta list-inline mb-0 mt-1">
                            <li class="list-inline-item">28 Oct 2023</li>
                        </ul>
                    </div>
                    <div class="details clearfix">
                    <h6 class="post-title my-0"><a href="#">Post-Study Abroad: Leveraging Your Experience for Success</a></h6>
                    <ul class="meta list-inline mb-0 mt-1">
                        <li class="list-inline-item"> 06 May 2023</li>
                    </ul>
                    </div>
                    <div class="details clearfix">
                    <h6 class="post-title my-0"><a href="{{ route('navigating-the-application') }}">Navigating the Application Process: Tips for Studying Abroad</a></h6>
                    <ul class="meta list-inline mb-0 mt-1">
                        <li class="list-inline-item">15 Aug 2023</li>
                    </ul>
                    </div>
                </div>
            </div>

            </div>
        </div>
        </div>
    </div>
    </section>

    <section class="section contact" data-section="section6">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                <h2>GET IN TOUCH</h2>
                </div>
            </div>
            <div class="col-md-6">
                <form id="contact" action="{{ route('contact.submit') }}" method="post">
                    @csrf
                    <h3>NEED HELP?</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                            </fieldset>
                            </div>
                            <div class="col-md-6">
                            <fieldset>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" required="">
                            </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="phone" type="text" class="form-control" id="phone" placeholder="Your Phone Number" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
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
            <div class="col-md-6 align-self-center">
                {{-- <div id="map">
                <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="422px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div> --}}
                <div class="left-content">
                    {{-- <span>Testimonial</span> --}}
                    <h4>For more information </br><em>Don't hesitate to Contact Us</em></h4>
                    <p>Information is the guiding light that transforms aspirations into achievements.
                    <br><br>We believe that well-informed choices are the stepping stones to a brighter future.
                    <br><br> <em>Contact us </em>today to illuminate your path to educational excellence.</p>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection