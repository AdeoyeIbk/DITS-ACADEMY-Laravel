@extends('layouts.app')

@section('styles')
  <link rel="stylesheet" href="{{asset('css/home-page.css')}}">
  <link rel="stylesheet" href="{{asset('css/pages.css')}}">
  <link rel="stylesheet" href="{{asset('css/tutors.css')}}">
@endsection

@section('hero')
  <!-- Hero Section -->
  <section class="py-5 text-center">
    <div class="row py-lg-5">
    <div class="col-lg-8 col-md-10 mx-auto" style="z-index: 2;">
      <h1 class="hero-heading">Meet our expert tutors</h1>
      <p class="hero-intro">Empower your future with our expertly designed courses. Learn, grow, and achieve your
      goals
      with DITS Academy.</p>
    </div>
    </div>
  </section>
@endsection


@section('content')
  <!-- Tutors Section -->
  <section id="tutors-section">
    <div class="tutor-card">
    <img src="{{ asset('images/tutors-images/cyber security tutor.avif') }}" alt="Cyber security tutor">
    <div class="card-body">
      <h5 class="card-title">Ossai Alexander</h5>
      <p class="card-text">Cybersecurity tutor</p>
    </div>
    </div>
    <div class="tutor-card">
    <img src="{{ asset('images/tutors-images/microsoft office essentials tutor.jpg') }}"
      alt="Microsoft Office Essentials Tutor">
    <div class="card-body">
      <h5 class="card-title">Godknows Mene Barisua</h5>
      <p class="card-text">Microsoft Office Essentials tutor</p>
    </div>
    </div>
    <div class="tutor-card">
    <img src="{{ asset('images/tutors-images/AI tutor.avif') }}" alt="AI in business tutor">
    <div class="card-body">
      <h5 class="card-title">Mc-Adolphus Ihekona Obinna</h5>
      <p class="card-text">AI in Business tutor</p>
    </div>
    </div>

    <div class="tutor-card">
    <img src="{{ asset('images/tutors-images/social media management tutor.avif') }}"
      alt="social media management tutor">
    <div class="card-body">
      <h5 class="card-title">Emmanuella Onaiwu</h5>
      <p class="card-text">Social Media Management tutor</p>
    </div>
    </div>
    <div class="tutor-card">
    <img src="{{ asset('images/tutors-images/mobile app development tutor.avif') }}" alt="mobile app development tutor">
    <div class="card-body">
      <h5 class="card-title">Fredrick Obarafor</h5>
      <p class="card-text">Mobile App Development tutor</p>
    </div>
    </div>
    <div class="tutor-card">
    <img src="{{ asset('images/tutors-images/data analysis tutor.avif') }}" alt="data analysis tutor">
    <div class="card-body">
      <h5 class="card-title">Akar Excel</h5>
      <p class="card-text">Data Analysis tutor</p>
    </div>
    </div>
    <div class="tutor-card">
    <img src="{{ asset('images/tutors-images/forex tutor.avif') }}" alt="mobile app development tutor">
    <div class="card-body">
      <h5 class="card-title">Ugwu Augustine</h5>
      <p class="card-text">Forex tutor</p>
    </div>
    </div>
    <div class="tutor-card">
    <img src="{{ asset('images/tutors-images/web development tutor.avif') }}" alt="web development tutor">
    <div class="card-body">
      <h5 class="card-title">Bariyaa Prince</h5>
      <p class="card-text">Web Development tutor</p>
    </div>
    </div>
    <div class="tutor-card">
    <img src="{{ asset('images/tutors-images/graphics design tutor.png') }}" alt="graphics design tutor">
    <div class="card-body">
      <h5 class="card-title">Taiwo Benedict</h5>
      <p class="card-text">Graphics Design tutor</p>
    </div>
    </div>
    <div class="tutor-card">
    <img src="{{ asset('images/tutors-images/digital marketing tutor.jpg') }}" alt="digital marketing tutor">
    <div class="card-body">
      <h5 class="card-title">Samuel Richard-Uti</h5>
      <p class="card-text">Digital Marketing tutor</p>
    </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="join-tutors-section py-5 text-center bg-primary">
    <div class="container">
    <h2 class="mb-4">Join Our Team of Experts</h2>
    <p class="mb-4">Are you passionate about teaching and sharing your expertise? Join DITS Academy and inspire the
      next generation of tech professionals. Together, we can shape the future of education in Nigeria and beyond.</p>
    <a href="{{ route('become-a-tutor') }}" class="btn btn-light btn-lg">Join Our Team</a>
    </div>
  </section>
@endsection