<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="The website of Decent IT Services. This is to give students, tutors and other users all the information they need about our academy.">
  <!-- Title based on the page it is on -->
  <title>
    {{ request()->is('about') ? "About us -" : "" }}
    {{ request()->is('contact') ? "Contact us -" : "" }}
    {{ request()->is('gallery') ? "Gallery -" : "" }}
    {{ request()->is('become-a-student') ? "Become a Student -" : "" }}
    {{ request()->is('attendance') ? "Student Attendance -" : "" }}
    {{ request()->is('courses') ? "Courses -" : "" }}
    {{ request()->is('faq') ? "FAQ -" : "" }}
    {{ request()->is('live-classes') ? "Live Classes -" : "" }}
    {{ request()->is('invite') ? "Welcome -" : "" }}{{ request()->is('login') ? "Login -" : "" }}{{ request()->is('invite') ? "Welcome -" : "" }}{{ request()->is('privacy-policy') ? "Privacy Policy -" : "" }}{{ request()->is('invite') ? "Welcome -" : "" }}{{ request()->is('login') ? "Login -" : "" }}{{ request()->is('invite') ? "Welcome -" : "" }}{{ request()->is('privacy-policy') ? "Privacy Policy -" : "" }}
    {{ request()->is('terms-and-conditions') ? "Terms and Conditions -" : "" }}
    {{ request()->is('tutors') ? "Tutors -" : "" }}
    {{ request()->is('testimonials') ? "Testimonials -" : "" }}{{ request()->is('') ? "Home -" : "" }}

    DITS ACADEMY
  </title>
  <link rel="stylesheet" href="{{asset('css/reset.css')}}">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&family=Inconsolata:wdth,wght@112.5,200..900&family=Jost:ital,wght@0,100..900;1,100..900&family=Lexend+Giga:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
    rel="stylesheet">
  <!-- stylesheets -->
  @yield('styles')


  <!-- favicon -->
  <link rel="shortcut icon" href="https://decentitservice.com/assets/images/logo/Dits_Logo_White.png"
    type="image/x-icon">

  <script src="{{asset('js/pages.js')}}" type="text/javaScript"></script>
</head>

<body>
  <section class="  {{ request()->is('courses') ? "" : "hero" }} col-12">
    <!-- Adds the overlay section only on the specified pages. -->
    @if (request()->is('/') || request()->is('about') || request()->is('gallery'))
    <div class="overlay-section"></div>
  @endif
    <!-- Header -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-container">
      <div class="nav-items-container">
        <a class="navbar-brand d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none me-auto"
          href="{{route('home')}}">
          <img class="logo-img light-logo" src="{{asset('images/Logos/DITS Academy Logo white.webp')}}" alt="logo"
            width="162" height="80">
        </a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <a class="navbar-brand me-auto d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none"
              href="/">
              <img class="logo-img light-logo" src="{{asset('images/Logos/DITS Academy Logo white.webp')}}" alt="logo"
                width="162" height="80">
            </a>

            <button type="button" class="btn-close" style="color:white" data-bs-dismiss="offcanvas"
              aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav flex-grow-1">
              <!-- adds the active page class to the current page -->
              <li class="nav-item"><a class="nav-link mx-lg-2 {{ request()->is('/') ? 'active-page' : '' }}"
                  href="{{route('home')}}">Home</a></li>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2 {{ request()->is('about') ? 'active-page' : '' }}"
                  href="{{ route('about') }}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2 {{ request()->is('courses') ? 'active-page' : '' }}"
                  href="{{ route('courses') }}">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2 {{ request()->is('gallery') ? 'active-page' : '' }}"
                  href="{{ route('gallery') }}">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2 {{ request()->is('tutors') ? 'active-page' : '' }}"
                  href="{{ route('tutors') }}">Tutors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2 {{ request()->is('contact') ? 'active-page' : '' }}"
                  href="{{ route('contact') }}">Contact Us</a>
              </li>
            </ul>

            <a href="{{ route('become-a-student') }}"><button type="button"
                class="btn btn-outline-primary text-white mx-lg-2">Become a Student</button></a>
          </div>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <svg xmlns="http://www.w3.org/2000/svg" height="50" fill="white" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
          </svg>
        </button>
      </div>
    </nav>
    <!-- End of Header -->

    @yield('hero')
    <!--  placeholder for unique hero content  -->
  </section>


  @yield('content')
  <!--  placeholder for unique page content  -->


  <!-- footer section -->
  <section id="footer-section">
    <div class="footer-overlay"></div>
    <div class="container fade-element">
      <footer class="pt-5">
        <div class="row">
          <div class="col-12 col-lg-4 mb-3 newsletter">
            <img src="{{asset('images/Logos/DITS Academy Logo white.webp')}}" alt="DITS academy logo" height="65"
              width="150">
            <p class="newsletter-text text-white">Stay ahead in the tech world! Subscribe to our newsletter for
              exclusive
              insights,
              updates on our latest courses, and tips to boost your tech career. Don't miss out on shaping your
              future
              with us!</p>
            <div class=" col-6 col-md-5 md-1 mb-3">
              <form class="newsletter-form">
                <h5 class="newsletter-heading">Subscribe to our newsletter</h5>
                <div class="d-flex flex-column flex-sm-row w-60 gap-2 form-input">
                  <label for="newsletter1" class="visually-hidden">Email address</label>
                  <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                  <button class="btn btn-primary" type="button">Subscribe</button>
                </div>
              </form>
            </div>
          </div>

          <div class="col-6 col-lg-4 mb-5 useful-links">
            <h5>Useful Links</h5>
            <ul class="nav flex-column gap-4">
              <li class="nav-item mb-2"><a href="https://decentitservice.com/"
                  class="nav-link p-0 text-body-primary icon-link-hover" target="_blank"> <svg
                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                  </svg>DITS Services</a></li>
              <li class="nav-item mb-2"><a href="{{ route('about') }}"
                  class="nav-link p-0 text-body-primary  icon-link-hover"> <svg xmlns="http://www.w3.org/2000/svg"
                    width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                  </svg>About Us</a></li>
              <li class="nav-item mb-2"><a href="{{route('courses')}}"
                  class="nav-link p-0 text-body-primary  icon-link-hover"> <svg xmlns="http://www.w3.org/2000/svg"
                    width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                  </svg>Courses</a></li>
              <li class="nav-item mb-2"><a href="{{ route('gallery') }}"
                  class="nav-link p-0 text-body-primary  icon-link-hover"> <svg xmlns="http://www.w3.org/2000/svg"
                    width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                  </svg>Gallery</a></li>
              <!-- <li class="nav-item mb-2"><a href="src/pages/tutors.html"
                  class="nav-link p-0 text-body-primary  icon-link-hover"> <svg xmlns="http://www.w3.org/2000/svg"
                    width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                  </svg>Tutors</a></li> -->
              <li class="nav-item mb-2"><a href="{{ route('tutors') }}"
                  class="nav-link p-0 text-body-primary icon-link-hover"><svg xmlns="http://www.w3.org/2000/svg"
                    width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                  </svg>Contact Us</a></li>
              <li class="nav-item mb-2"><a href="{{ route('become-a-student') }}"
                  class="nav-link p-0 text-body-primary  icon-link-hover"> <svg xmlns="http://www.w3.org/2000/svg"
                    width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                  </svg>Become a Student</a></li>
            </ul>

          </div>

          <!-- <div class="col-6 col-lg-2 mb-3 resources">
            <h5>Resources</h5>
            <ul class="nav flex-column gap-4">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-primary icon-link-hover"><svg
                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                  </svg>Tech Consultancy</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-primary icon-link-hover"><svg
                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                  </svg>Career</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-primary icon-link-hover"><svg
                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                  </svg>Tech Projects</a></li>
            </ul>
          </div> -->

          <div class="col-6 col-lg-4 mb-3 contact-information">
            <h5>Contact Information</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2 nav-link p-0 text-body-primary"><i
                  class="bi bi-envelope contact-information-icon"></i>
                contact@decentitservice.com</li>
              <li class="nav-item mb-2 nav-link p-0 text-body-primary"><i
                  class="bi bi-geo-alt contact-information-icon"></i>Km 25, Suite 14, DDS Shopping
                Mall, Airport Road, Port Harcourt, Nigeria</li>
              <li class="nav-item mb-2 nav-link p-0 text-body-primary"><i
                  class="bi bi-geo-alt contact-information-icon"></i>8 The Green, Ste A, Kent,
                Dover, Delaware, 19901</li>
              <li class="nav-item mb-2 nav-link p-0 text-body-primary"><i
                  class="bi bi-telephone contact-information-icon"></i>+234 916 262 4051, +234 904
                676 8832</li>
              <li class="socials-container">
                <a href="#" class="social"><i class="bi bi-facebook"></i></a>
                <a href="#" class="social"><i class="bi bi-youtube"></i></a>
                <a href="https://www.instagram.com/ditsacademy/" class="social"><i class="bi bi-instagram"></i></a>
                <a href="#" class="social"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="social"><i class="bi bi-linkedin"></i></a>
              </li>
            </ul>
          </div>


        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4">
          <p id="copyright">{{ now()->year }}</p>
          <div class="terms-and-privacy-policy"><a href="{{route('terms-and-conditions')}}" class="policies">Terms and
              conditions</a> <span class="vertical-rule">|</span> <a href="{{route('privacy-policy')}}"
              class="policies">Privacy Policy.</a></div>
        </div>
      </footer>
    </div>
  </section>


  <script>
    var d = new Date();
    let currentYear = d.getFullYear();

    let copyrightHtml = `© ${currentYear} Decent IT Service Ltd. All Right Reserved: DITS`;

    document.getElementById("copyright").innerHTML = copyrightHtml;
    @yield('scripts')
    // page-specific scripts
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</body>

</html>