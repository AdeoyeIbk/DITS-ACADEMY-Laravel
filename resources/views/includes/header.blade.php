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
  <section class="  {{ request()->is('about') || request()->is('/') || request()->is('tutors') ? "hero" : "" }} col-12">
    <!-- Adds the overlay section only on the specified pages. -->
    @if (request()->is('/') || request()->is('about') || request()->is('gallery') || request()->is('tutors'))
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