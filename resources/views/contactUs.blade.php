@extends ('layouts.app')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/home-page.css') }}">
  <link rel="stylesheet" href="{{ asset('css/pages.css') }}">
  <link rel="stylesheet" href="{{ asset('css/about-page.css') }}">
  <link rel="stylesheet" href="{{ asset('css/contactus.css') }}">
@endsection



@section ('content')
  <main class="container py-5 mt-5">
    <div class="row align-items-center mb-5">
    <div class="col-lg-6 mb-4 mb-lg-0">
      <h1 class="display-5 fw-bold mb-3">Contact Us</h1>
      <p class="lead mb-4">
      We're here to help you achieve your goals. Reach out to us for inquiries, support, or just to say hello!
      </p>
      <ul class="list-unstyled mb-4">
      <li class="mb-2">
        <i class="bi bi-envelope me-2 text-white"></i>
        <strong>Email:</strong> <a href="mailto:contact@decentitservice.com"
        class="text-white">contact@decentitservice.com</a>
      </li>
      <li class="mb-2">
        <i class="bi bi-telephone me-2"></i>
        <strong>Phone:</strong> +234 916 262 4051, +234 904 676 8832
      </li>
      <li class="mb-2">
        <i class="bi bi-geo-alt me-2"></i>
        <strong>Address:</strong> Km 25, Suite 15, DDS Shopping Mall, Airport Road, Port Harcourt, Nigeria
      </li>
      </ul>
      <div class="mb-3">
      <span class="me-2">Follow us:</span>
      <a href="#" class=" me-2 fs-4"><i class="bi bi-facebook"></i></a>
      <a href="#" class=" me-2 fs-4"><i class="bi bi-youtube"></i></a>
      <a href="#" class=" me-2 fs-4"><i class="bi bi-instagram"></i></a>
      <a href="#" class=" me-2 fs-4"><i class="bi bi-twitter"></i></a>
      <a href="#" class=" fs-4"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card shadow-sm">
      <div class="card-body">
        <h5 class="card-title mb-3">Send Us a Message</h5>
        <form class="contact-form">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" id="name" class="form-control" placeholder="Your name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" id="email" class="form-control" placeholder="Your email" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea id="message" class="form-control" rows="4" placeholder="Your message" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Send Message</button>
        </form>
      </div>
      </div>
    </div>
    </div>
    <div class="row mb-5">
    <div class="col-12">
      <h3 class="mb-3">Our Location</h3>
      <div class="ratio ratio-16x9 rounded shadow-sm">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.2751105255547!2d6.999308173482804!3d4.89354079508229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069d18595adc8a7%3A0x4ac24358361943b1!2sDITS%20ACADEMY!5e0!3m2!1sen!2sng!4v1749025369521!5m2!1sen!2sng"
        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <p class="mt-3">
      Come visit us at our headquarters. We’d love to connect and show you around our Academy.
      </p>
    </div>
    </div>
    <div class="row text-center">
    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm">
      <div class="card-body">
        <i class="bi bi-envelope display-6 mb-2 text-white"></i>
        <h6 class="card-title">Email</h6>
        <p class="card-text"><a href="mailto:contact@decentitservice.com"
          class="text-white">contact@decentitservice.com</a></p>
      </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm">
      <div class="card-body">
        <i class="bi bi-telephone display-6 mb-2 text-white"></i>
        <h6 class="card-title">Phone</h6>
        <p class="card-text">
        <a href="tel:+2349162624051" class="text-white">+234 916 262 4051</a><br>
        <a href="tel:+2349046768832" class="text-white">+234 904 676 8832</a>
        </p>
      </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm">
      <div class="card-body">
        <i class="bi bi-geo-alt display-6 mb-2 text-white"></i>
        <h6 class="card-title">Address</h6>
        <p class="card-text">Km 25, Suite 14,<br>DDS Shopping Mall,<br>Airport Road, Port Harcourt, Nigeria</p>
      </div>
      </div>
    </div>
    </div>
  </main>
@endsection