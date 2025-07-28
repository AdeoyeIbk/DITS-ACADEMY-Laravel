@extends('layouts.app')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/home-page.css') }}">
  <link rel="stylesheet" href="{{ asset('css/pages.css') }}">
  <link rel="stylesheet" href="{{ asset('css/testimonials.css') }}">
@endsection

@section('content')
  <main>
    <section id="testimonials" class="container py-5">
    <h2 class="text-center mb-4">What Our Students Say</h2>
    <div class="row">
      <div class="col-md-4">
      <div class="testimonial-card">
        <div class="testimonial-card-top">
        <img src="{{ asset('images/tutors-images/ai in business tutor.png') }}" alt="" class="testimonial-image">
        <div class="testimonial-details">
          <h6 class="testimonial-name">Sarah Williams</h6>
          <p class="testimonial-role">Data Analyst</p>
        </div>
        </div>
        <p class="testimonial-text">"The Data Analytics course at DITS Academy gave me practical skills and
        confidence to land my first tech job."</p>
      </div>
      </div>
      <div class="col-md-4 mt-5">
      <div class="testimonial-card">
        <div class="testimonial-card-top">
        <img src="{{ asset('images/tutors-images/web development tutor.png') }}" alt="" class="testimonial-image">
        <div class="testimonial-details">
          <h6 class="testimonial-name">Michael Ojo</h6>
          <p class="testimonial-role">Front-End Developer</p>
        </div>
        </div>
        <p class="testimonial-text">"Excellent instructors and a supportive community. I built real projects and
        improved my portfolio."</p>
      </div>
      </div>
      <div class="col-md-4">
      <div class="testimonial-card">
        <div class="testimonial-card-top">
        <img src="{{ asset('images/tutors-images/Cyber security pro tutor.png') }}" alt=""
          class="testimonial-image">
        <div class="testimonial-details">
          <h6 class="testimonial-name">Aisha Bello</h6>
          <p class="testimonial-role">Cybersecurity Specialist</p>
        </div>
        </div>
        <p class="testimonial-text">"The cybersecurity program was hands-on and up-to-date. I now feel ready for
        industry challenges."</p>
      </div>
      </div>
      <div class="col-md-4">
      <div class="testimonial-card">
        <div class="testimonial-card-top">
        <img src="{{ asset('images/tutors-images/graphics design tutor.png') }}" alt="" class="testimonial-image">
        <div class="testimonial-details">
          <h6 class="testimonial-name">Emeka Nwosu</h6>
          <p class="testimonial-role">Graphic Designer</p>
        </div>
        </div>
        <p class="testimonial-text">"Creative assignments and expert feedback helped me sharpen my design skills and
        get freelance gigs."</p>
      </div>
      </div>
      <div class="col-md-4 mt-5">
      <div class="testimonial-card">
        <div class="testimonial-card-top">
        <img src="{{ asset('images/tutors-images/Microsoft essentials tutor.png') }}" alt=""
          class="testimonial-image">
        <div class="testimonial-details">
          <h6 class="testimonial-name">Grace Eze</h6>
          <p class="testimonial-role">Office Administrator</p>
        </div>
        </div>
        <p class="testimonial-text">"Learning Microsoft Office at DITS Academy made my daily work much easier and
        more efficient."</p>
      </div>
      </div>
      <div class="col-md-4">
      <div class="testimonial-card">
        <div class="testimonial-card-top">
        <img src="{{ asset('images/tutors-images/data analysis tutor.png') }}" alt="" class="testimonial-image">
        <div class="testimonial-details">
          <h6 class="testimonial-name">Samuel Adeyemi</h6>
          <p class="testimonial-role">Software Engineer</p>
        </div>
        </div>
        <p class="testimonial-text">"I recommend DITS Academy to anyone starting out in tech. The mentorship and
        resources are top-notch."</p>
      </div>
      </div>
    </div>
    </section>
  </main>
@endsection