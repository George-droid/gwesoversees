<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Goldenway Educational Services</title>
    
    <!-- Bootstrap core CSS -->
    {{-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link href="{{ asset('css/fontawesome.css')}}" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="{{ asset('css/templatemo-grad-school.css')}}" rel="stylesheet">
    <link href="{{ asset('css/owl.css')}}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.css')}}" rel="stylesheet">

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-PTJHB876');
    </script>
      <!-- End Google Tag Manager -->
  </head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTJHB876"
    height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
    <!-- End Google Tag Manager (noscript) -->
   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      {{-- <a href="/"><em>Goldenway</em> Oversees</a> --}}
      <a href="/"> <img src="{{ asset('images/gwes_logo.png')}}" alt=""> </a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-navbar" role="navigation">
      <ul class="main-menu">
        <li><a href="/">Home</a></li>
        <li><a href="{{ route('about') }}">About Us</a></li></li>
        <li><a href="{{ route('blogs') }}">Blog</a></li>
        <!-- <li><a href="#section5">Video</a></li> -->
        {{-- <li><a href="{{ route('destinations') }}">Destinations</a></li> --}}
        <li><a href="{{ route('contact') }}">Contact</a></li>
        <!-- <li><a href="" class="external">External</a></li> -->
      </ul>
    </nav>
  </header>


  {{-- City Modal --}}
  <div class="modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  @yield('content')

  <!-- Interest Modal -->
  <div class="modal" id="interestModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Express Interest</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                @if(session('success'))
                      <div class="alert alert-success">
                          {{ session('success') }}
                      </div>
                @endif
                <form id="interestForm" method="POST" action="{{ route('destinations.submit') }}">
                    @csrf
                    <div class="form-group">
                        <label for="universitySelect">University:</label>
                        <!-- Dropdown list of universities -->
                        <select class="form-control" id="universitySelect" name="university">
                            <!-- Option values will be dynamically generated -->
                            <option value="University of Melbourne">University of Melbourne</option>
                            <option value="University of Adelaide">University of Adelaide</option>
                            <option value="McEwan University">McEwan University</option>
                            <option value="Durham College">Durham College</option>
                            <option value="RWTH Aachen University">RWTH Aachen University</option>
                            <option value="University of Freiburg">University of Freiburg</option>
                            <option value="University of Pittsburgh">University of Pittsburgh</option>
                            <option value="University of Plymouth">University of Plymouth</option>
                            <option value="University of Michigan">University of Michigan</option>
                            <option value="University of Georgia">University of Georgia</option>

                            <!-- ... -->
                        </select>
                    </div>
                    <!-- Other form fields (prospect's name, email, phone number, program, course of interest) -->
                    <!-- Example: -->
                    <div class="form-group">
                        <label for="client_name">Name:</label>
                        <input type="text" class="form-control" id="client_name" name="client_name" required>
                    </div>
                    <div class="form-group">
                      <label for="client_email">Email:</label>
                      <input type="email" class="form-control" id="client_email" name="client_email" required>
                    </div>
                    <div class="form-group">
                      <label for="client_phone">Phone:</label>
                      <input type="text" class="form-control" id="client_phone" name="client_phone" required>
                    </div>
                    <div class="form-group">
                      <label for="universitySelect">Program:</label>
                      <!-- Dropdown list of programs -->
                      <select class="form-control" id="universitySelect" name="program">
                          <!-- Option values will be dynamically generated -->
                          <option value="B.Sc">Bachelor's Degree</option>
                          <option value="M.Sc">Master's Degree</option>
                          <!-- ... -->
                      </select>
                    </div>
                    <!-- ... -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
  </div>

  
  <footer class="bg-dark text-light pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 mb-md-0">
                <h5>Company</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('about') }}" class="text-light">About Us</a></li>
                    <li><a href="{{ route('contact') }}" class="text-light">Contact Us</a></li>
                    <li><a href="{{ route('blogs') }}" class="text-light">Blogs</a></li>
                </ul>
                <a href="/">
                    <img src="{{ asset('images/gwes_logo.png')}}" alt="GWES" class="img-fluid mt-3">
                </a>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <h5>Contact</h5>
                <address>
                     Riggz Plaza,<br>
                     Isheri Road Omole<br>
                     P.O Box 3117, Ikeja, Lagos<br>
                    <span>Phone: +2349038947458,</span><br>
                    <span>+15107125054, +2348072577105</span><br>
                    <span>Email: info@goldenwayedu.com,</span>
                    <span>        goldenwayseducationservices@gmail.com</span>
                </address>
            </div>
            <div class="col-md-4">
                <h5>Follow Us</h5>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#" class="text-light"><i class="fab fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-light"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-light"><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-light"><i class="fab fa-linkedin"></i></a></li>
                    <!-- Add more social icons as needed -->
                </ul>
                <p class="mb-0">Monday - Friday: 9 a.m. - 6 p.m.</p>
                <p class="mb-0">Saturday: 10 a.m. - 3 p.m.</p>
            </div>
        </div>
    </div>
  </footer>



  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
   
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="{{ asset('js/isotope.min.js')}}"></script>
    <script src="{{ asset('js/owl-carousel.js')}}"></script>
    <script src="{{ asset('js/lightbox.js')}}"></script>
    <script src="{{ asset('js/tabs.js')}}"></script>
    <script src="{{ asset('js/video.js')}}"></script>
    <script src="{{ asset('js/slick-slider.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTJHB876" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    {{-- Interest modal script --}}
    <script>
      $(document).ready(function() {
          // Function to open the modal when a university logo is clicked
          $('.university').on('click', function() {
              var universityName = $(this).attr('alt'); // Assuming the 'alt' attribute contains the university name
              $('#universitySelect').val(universityName); // Set the value in the university select field in the modal
              $('#interestModal').modal('show'); // Show the modal
          });
      });
    </script>
    {{-- <script>
      // jQuery function to open modal and set the selected university
      $('.university img').on('click', function () {
          var university = $(this).attr('alt');
          $('#universitySelect').val(university);
          $('#interestModal').modal('show');
      });
    </script> --}}

    {{-- Partner Carousel --}}
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const carousel = document.querySelector(".carousel");
        const container = document.querySelector(".carousel-container");
        const partnerCards = document.querySelectorAll(".partner-card");

        let currentIndex = 0;
        const cardWidth = partnerCards[0].offsetWidth;
        const numCards = partnerCards.length;

        function showCard(index) {
          const translateX = -index * cardWidth;
          container.style.transform = `translateX(${translateX}px)`;
        }

        function next() {
          currentIndex = (currentIndex + 1) % numCards;
          showCard(currentIndex);
        }

        function prev() {
          currentIndex = (currentIndex - 1 + numCards) % numCards;
          showCard(currentIndex);
        }

        const nextButton = document.getElementById("next-button");
        const prevButton = document.getElementById("prev-button");

        nextButton.addEventListener("click", next);
        prevButton.addEventListener("click", prev);

        carousel.addEventListener("mouseenter", () => {
          // Pause the automatic sliding when the carousel is hovered over
          clearInterval(interval);
        });

        carousel.addEventListener("mouseleave", () => {
          // Resume automatic sliding when the carousel is not hovered over
          startAutoSlide();
        });

        function startAutoSlide() {
          interval = setInterval(next, 3200); // Adjust the interval as needed (3 seconds in this example)
        }

        let interval;
        startAutoSlide();
      })
    </script>

  <!-- Counter Javascript  -->
  <script>
      const counters = document.querySelectorAll(".count");
      // Function to check if an element is in the viewport
      function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
          rect.top >= 0 &&
          rect.left >= 0 &&
          rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
          rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
      }

      // Function to start counting when the section is in the viewport
        function startCountingWhenInView() {
          const counters = document.querySelectorAll(".count");
          const speed = 40;

        counters.forEach((counter) => {
          const updateCount = () => {
            const target = parseInt(+counter.getAttribute("data-target"));
            const count = parseInt(+counter.innerText);
            const increment = Math.trunc(target / speed);

            if (count < target) {
              counter.innerText = count + increment;
              setTimeout(updateCount, speed);
            } else {
              counter.innerText = target;
            }
          };
          
          // Check if the counter is in the viewport
          if (isInViewport(counter)) {
            updateCount();
          }
        });
      }

      // Add an event listener to the window's scroll event
      window.addEventListener("scroll", startCountingWhenInView);

      // Trigger counting for elements already in the viewport on page load
      window.addEventListener("load", startCountingWhenInView);


  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        const filterButtons = document.querySelectorAll(".filter-button");
        const universities = document.querySelectorAll(".university");

        filterButtons.forEach(button => {
            button.addEventListener("click", function() {
                const category = this.getAttribute("data-filter");

                universities.forEach(university => {
                    const uniCategory = university.getAttribute("data-category");

                    if (category === "all" || category === uniCategory) {
                        university.style.display = "block";
                    } else {
                        university.style.display = "none";
                    }
                });
            });
        });
    });
  </script>

 <!-- Counter Javascript  -->
 {{-- <script>
  $(document).ready(function() {
      $('.dropdown-toggle').dropdown();
  });
</script> --}}

{{-- <script>
  $(function() {
      // Dropdown toggle
      $('.dropdown-toggle').click(function() {
          $(this).next('.dropdown').slideToggle();
      });

      $(document).click(function(e) {
          var target = e.target;
          if (!$(target).is('.dropdown-toggle') && !$(target).parents().is('.dropdown-toggle')) {
              $('.dropdown').slideUp();
          }
      });
  });
</script> --}}


</body>
</html>