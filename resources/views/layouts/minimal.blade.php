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
    {{ request()->is('invite') ? "Welcome -" : "" }}
    {{ request()->is('login') ? "Login -" : "" }}
    {{ request()->is('privacy-policy') ? "Privacy Policy -" : "" }}
    {{ request()->is('login') ? "Login -" : "" }}
    {{ request()->is('terms-and-conditions') ? "Terms and Conditions -" : "" }}
    {{ request()->is('tutors') ? "Tutors -" : "" }}
    {{ request()->is('testimonials') ? "Testimonials -" : "" }}
    {{ request()->is('') ? "Home -" : "" }}

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
</head>

<body>
  @yield('content')
</body>

</html>