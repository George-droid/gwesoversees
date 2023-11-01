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
                <h2><em>BLOGS</em></h2>
                <div class="main-button">
                    <div><a href="{{ route('home') }}">Home</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="blogs-section ">
        <div class="col-lg-12">
          <div class="post featured-post-lg">
            <div class="post-content row">
              <!-- <a href="blog.html" class="category-badge">Study Abroad</a> -->
              {{-- <img src="{{ asset('images/blog1.jpg')}}" class="card-img-top col-lg-6" alt="..."> --}}
              <h2 class="post-title"><a href="{{ route('blog1') }}">Choosing the Right Study Destination: Factors to Consider</a></h2>
                <p class="post-excerpt">Selecting the perfect study destination is a critical decision for any aspiring international student. Our blog post delves into the key factors to consider, including the cost of living, language barriers, and cultural fit...
                    {{-- Learn how to make an informed choice that aligns with your educational and lifestyle goals. <br> Studying abroad is a transformative experience, offering exposure to new cultures, educational opportunities, and personal growth. 
                     However, selecting the perfect study destination is a critical decision that demands thorough consideration.
                     In this article, we will explore the key factors to keep in mind when choosing your study destination to ensure it aligns with your educational and lifestyle goals. --}}
                     
                </p>
                <ul class="post-meta list-inline">
                    <li class="list-inline-item"><i class="far fa-user"></i> Wisdom George</li>
                    <li class="list-inline-item"><i class="far fa-calendar"></i> 28 Oct 2021</li>
                    <a href="{{ route('blog1') }}" class="category-badge">Read more</a>
                </ul>
            </div>
          </div>
        </div>
    
        <div class="col-lg-12">
          <div class="post featured-post-lg">
            <div class="post-content">
              {{-- <img src="./assets/images/blog2.jpg" class="card-img-top" alt="..."> --}}
              <h2 class="post-title"><a href="{{ route('blog2') }}">The Benefits of Studying Abroad: A Life-Changing Experience</a></h2>
              <p class="post-excerpt justify-content-center">Studying abroad is more than just earning a degree; it's a transformative journey.<br>
                 In this blog post, we explore the numerous personal and professional advantages of studying in a foreign country. From cultural enrichment to improved career prospects, discover how an international education can shape your future......
                <br>
                {{-- Studying in a foreign country offers a multitude of personal and professional advantages that can significantly influence your future trajectory. In this blog post, we'll explore these benefits and why pursuing an international education can be a transformative experience.
                <br>Cultural Enrichment: Studying abroad provides a rich opportunity for cultural immersion. It allows you to broaden your horizons, embrace diverse traditions, and gain a profound understanding of global diversity. Interacting with people from different backgrounds fosters empathy, tolerance, and a global perspective.
                <br>Language Skills: Immersing yourself in a foreign country is an excellent way to learn or improve your language skills. Being bilingual or multilingual is a highly valuable asset in the modern world, enhancing your communication abilities and employability. --}}
                </p>
              <ul class="post-meta list-inline">
                <li class="list-inline-item"><i class="far fa-user"></i> Favour Oti</li>
                <li class="list-inline-item"><i class="far fa-calendar"></i> 25 Sept 2023</li>
                <a href="{{ route('blog2') }}" class="category-badge">Read more</a>
              </ul>
            </div>
          </div>
        </div>
    
        <div class="col-lg-12">
          <div class="post featured-post-lg">
            <div class="post-content">
              {{-- <img src="./assets/images/blog0.jpg" class="card-img-top" alt="..."> --}}
              <h2 class="post-title"><a href="{{ route('blog3') }}">Navigating the Application Process: Tips for Studying Abroad</a></h2>
              <p class="post-excerpt">The application process for studying abroad can be overwhelming. This blog post provides a comprehensive guide with practical tips and insights. 
                From crafting a compelling personal statement to securing financial aid, we'll help you navigate every step towards your dream international education...
              </p>
              <ul class="post-meta list-inline">
                <li class="list-inline-item"><i class="far fa-user"></i>Wisdom George</li>
                <li class="list-inline-item"><i class="far fa-calendar"></i> 15 Aug 2023</li>
                <a href="{{ route('blog3') }}" class="category-badge">Read more</a>
              </ul>
            </div>
          </div>
        </div>
    
        <div class="col-lg-12">
          <div class="post featured-post-lg">
            <div class="post-content">
              {{-- <img src="./assets/images/blog5.jpg" class="card-img-top" alt="..."> --}}
              <h2 class="post-title"><a href="{{ route('blog4') }}">Cultural Adjustment: Thriving in a New Environment</a></h2>
              <p class="post-excerpt">Adapting to a new culture and environment is an integral part of studying abroad. We discuss the challenges that international students commonly face and offer valuable advice on how to overcome them. Discover strategies for cultural integration and making the most of your overseas experience.
                {{-- Enhanced Career Prospects: Employers often highly value candidates with international experience. Studying abroad demonstrates your adaptability, cultural awareness, and willingness to tackle new challenges, all of which are qualities in high demand in the job market. --}}
              </p>
              <ul class="post-meta list-inline">
                <li class="list-inline-item"><i class="far fa-user"></i>Wisdom George</li>
                <li class="list-inline-item"><i class="far fa-calendar"></i> 29 July 2023</li>
                <a href="{{ route('blog4') }}" class="category-badge">Read more</a>
              </ul>
            </div>
          </div>
        </div>
    
        {{-- <div class="col-lg-12">
          <div class="post featured-post-lg">
            <div class="post-content">
              <img src="./assets/images/blog6.jpg" class="card-img-top" alt="...">
              <h2 class="post-title"><a href="blog.html">Study Abroad Scholarships and Financial Aid Opportunities</a></h2>
              <p class="post-excerpt">Financing your international education doesn't have to be a daunting task. In this blog post, we explore a wide range of scholarships, grants, and financial aid options available to international students. Learn how to reduce the financial burden and turn your study abroad dream into a reality.
                an international education opens doors to a world of personal and professional advantages. It enriches your life, enhances your skills, and broadens your horizons in ways that can shape your future in remarkable ways.
                <br> Whether you seek cultural enrichment, career advancement, or personal development, studying abroad can be a transformative and rewarding experience.
              </p>
              <ul class="post-meta list-inline">
                <li class="list-inline-item"><i class="far fa-user"></i> Karen Doe</li>
                <li class="list-inline-item"><i class="far fa-calendar"></i> 29 March 2021</li>
                <a href="blog.html" class="category-badge">Read more</a>
              </ul>
            </div>
          </div>
        </div>
       
        <div class="col-lg-12">
          <div class="post featured-post-lg">
            <div class="post-content">
              <img src="./assets/images/blog4.jpg" class="card-img-top" alt="...">
              <h2 class="post-title"><a href="blog.html">The Impact of Studying Abroad on Career Prospects</a></h2>
              <p class="post-excerpt">Studying abroad can significantly enhance your career prospects. This post delves into how international experience can make you more marketable to employers. We also share real-life success stories of individuals whose careers were positively influenced by their overseas studies.</p>
              <ul class="post-meta list-inline">
                <li class="list-inline-item"><i class="far fa-user"></i> Karen Doe</li>
                <li class="list-inline-item"><i class="far fa-calendar"></i> 29 March 2021</li>
                <a href="blog.html" class="category-badge">Read more</a>
              </ul>
            </div>
          </div>
        </div>
    
        <div class="col-lg-12">
          <div class="post featured-post-lg">
            <div class="post-content">
              <img src="./assets/images/blog3.jpg" class="card-img-top" alt="...">
              <h2 class="post-title"><a href="blog.html">Maintaining a Healthy Work-Study-Life Balance Abroad</a></h2>
              <p class="post-excerpt">Selecting the perfect study destination is a critical decision for any aspiring international student. Our blog post delves into the key factors to consider, including the cost of living, language barriers, and cultural fit. Learn how to make an informed choice that aligns with your educational and lifestyle goals.</p>
              <ul class="post-meta list-inline">
                <li class="list-inline-item"><i class="far fa-user"></i> Karen Doe</li>
                <li class="list-inline-item"><i class="far fa-calendar"></i> 29 March 2021</li>
                <a href="blog.html" class="category-badge">Read more</a>
              </ul>
            </div>
          </div>
        </div> --}}
    </section>
    
@endsection