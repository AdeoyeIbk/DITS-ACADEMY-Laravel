@extends('layouts.app')

@section('styles')

  <link rel="stylesheet" href="{{ asset('css/home-page.css') }}">
  <link rel="stylesheet" href="{{ asset('css/pages.css') }}">
  <link rel="stylesheet" href="{{ asset('css/become-a-student.css') }}">
@endsection

@section('content')
  <section class="hero-section">
    <div class="container">
    <h1 class="hero-heading">Become a tech star</h1>
    <p class="hero-paragraph">Fill out the form below to start your journey as a student at DITS Academy.</p>
    <form action="/submit-student-registration" method="post">
      <div class="mb-5 input-row row">
      <div class="col-12">
        <label for="course-title" class="form-label">Course Title</label>
        <select class="form-select form-control" id="course-title" name="course-title" required>
        <option value="" disabled selected>Select a course</option>
        <option value="Web Development (Pro)">Web Development (Pro)</option>
        <option value="Web Development (Beginners)">Web Development (Beginners)</option>
        <option value="Data Analytics">Data Analytics</option>
        <option value="UI/UX">UI/UX</option>
        <option value="Graphics Design">Graphics Design</option>
        <option value="Cyber Security (Pro)">Cyber Security (Pro)</option>
        <option value="Cyber Security (Beginners)">Cyber Security (Beginners)</option>
        <option value="Computer Appreciation">Computer Appreciation</option>
        <option value="Product Design">Product Design</option>
        <option value="AI for Workplace">AI for Workplace</option>
        <option value="Social Media Management">Social Media Management</option>
        <option value="Digital Marketing">Digital Marketing</option>
        <option value="Forex">Forex</option>
        </select>
      </div>
      </div>
      <div class="mb-5 input-row">
      <div>
        <label for="first-name" class="form-label">First Name</label>
        <input type="text" name="first-name" id="first-name" class="form-control" required autofocus>
      </div>
      <div>
        <label for="middle-name" class="form-label">Middle Name</label>
        <input type="text" name="middle-name" id="middle name" class="form-control" required>
      </div>
      <div>
        <label for="last-name" class="form-label">Last Name</label>
        <input type="text" name="last-name" id="last-name" class="form-control" required>
      </div>
      </div>

      <div class="mb-5 input-row">
      <div>
        <label for="email" class="form-label">Email Address</label>
        <input type="email" name="email" id="email" class="form-control" required>
      </div>
      <div>
        <label for="phone" class="form-label">Phone Number</label>
        <input type="tel" name="phone" id="phone" class="form-control" required>
      </div>
      </div>

      <div class="mb-5 input-row">
      <div>
        <label for="address" class="form-label">Address
        </label>
        <input type="address" name="address" id="address" class="form-control" required>
      </div>
      </div>
      <div class="mb-5 input-row">
      <div>
        <label class="form-label">Marital Status</label>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="single" name="marital-status" value="Single">
        <label for="single">Single</label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="married" name="marital-status" value="Married">
        <label for="married">Married</label>
        </div>
      </div>
      <div>
        <label for="gender" class="form-label">Gender</label>
        <select class="form-select form-control" id="gender" name="gender" required>
        <option value="" disabled selected>Select gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
        </select>
      </div>
      </div>
      <div class="mb-5 input-row">
      <div><label for="referral" class="form-label">How did you know about us?</label><textarea class="form-control"
        placeholder="" id="floatingTextarea"></textarea>
      </div>
      </div>
      <input type="submit" class="btn btn-primary w-100 mt-3">
    </form>
    </div>
  </section>
@endsection