@extends('layouts.app')

@section('styles')
  <link rel="stylesheet" href="{{asset('css/home-page.css')}}">
  <link rel="stylesheet" href="{{asset('css/pages.css')}}">
  <link rel="stylesheet" href="{{asset('css/gallery.css')}}">
@endsection

@section('hero')
  <!-- Hero Section -->
  <section class="py-5 text-center" style="z-index: 2;">
    <div class="row py-lg-5">
    <div class="col-lg-8 col-md-10 mx-auto">
      <h1 class="hero-heading">Our Gallery</h1>
      <p class="hero-intro">Explore moments from our classes, events, and activities. See how we
      inspire learning and collaboration at DITS Academy.</p>
    </div>
    </div>
  </section>
@endsection


@section('content')
  <div class="album py-5">
    <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
      <!-- Gallery Item 1 -->
      <!-- / -->
      <!-- Gallery Item 2 -->
      <!-- <div class="col">
      <div class="card shadow-sm">
      <img src="../images/gallery/graduation address.webp" class="card-img-top"
      alt="CEO addressing the graduates">
      <div class="card-body">
      <p class="card-text">Our CEO delivering an inspiring address to graduates during the ceremony.</p>
      </div>
      </div>
      </div> Gallery Item 3 -->
      <!-- <div class="col">
      <div class="card shadow-sm">
      <img src="../images/gallery/web development class.webp" class="card-img-top"
      alt="web development class in progress">
      <div class="card-body">
      <p class="card-text">Students engaged in a web development class, collaborating on interactive projects.
      </p>
      </div>
      </div>
      </div> -->
      <!-- Gallery Item 4 -->
      <!-- <div class="col">
      <div class="card shadow-sm">
      <img src="../images/gallery/graduation group picture.webp" class="card-img-top"
      alt="Graduation group picture">
      <div class="card-body">
      <p class="card-text">Graduates and tutors celebrating together after a successful graduation ceremony.
      </p>
      </div>
      </div>
      </div> -->

      <!-- Gallery Item 5 -->
      <div class="col">
      <div class="card shadow-sm">
        <img src="{{asset('images/gallery/students.webp')}}" class="card-img-top"
        alt="photo of cyber security students">
        <div class="card-body">
        <p class="card-text">Cyber security students collaborating on practical exercises during a training
          session.</p>
        </div>
      </div>
      </div>
      <!-- Gallery Item 6 -->
      <div class="col">
      <div class="card shadow-sm">
        <img src="{{asset('images/gallery/students taking test.webp')}}" class="card-img-top"
        alt="cyber security students taking a test">
        <div class="card-body">
        <p class="card-text">Cyber security students focused during an assessment, demonstrating their skills
          and knowledge.</p>
        </div>
      </div>
      </div>
      <!-- Gallery Item 7 -->
      <div class="col">
      <div class="card shadow-sm">
        <img src="{{asset('images/gallery/taking test.jpg')}}" class="card-img-top"
        alt="cyber security students taking a test">
        <div class="card-body">
        <p class="card-text">Data Analysis students focused during an assessment, demonstrating their skills
          and knowledge.</p>
        </div>
      </div>
      </div>
      <!-- Gallery Item 8 -->
      <div class="col">
      <div class="card shadow-sm">
        <img src="{{asset('images/gallery/mco pics.jpg')}}" class="card-img-top"
        alt="cyber security students taking a test">
        <div class="card-body">
        <p class="card-text">Microsoft Office Essentials Students Graduating</p>
        </div>
      </div>
      </div>
      <!-- Gallery Item 9 -->
      <!-- <div class="col">
      <div class="card shadow-sm">
      <img src="../images/gallery/da class.jpg" class="card-img-top"
      alt="cyber security students taking a test">
      <div class="card-body">
      <p class="card-text">Ongoing data analysis class</p>
      </div>
      </div>
      </div> -->
    </div>
    </div>
  </div>
  <!-- Call to Action Section -->
  <section class="call-to-action py-5 text-center bg-primary">
    <div class="container">
    <h2 class="mb-4">Join Our Community of Learners</h2>
    <p class="mb-4">Take the next step in your tech journey. Enroll in our courses and unlock your potential today!
    </p>
    <a href="{{route('courses')}}" class="btn btn-light btn-lg">Explore Courses</a>
    </div>
  </section>
@endsection