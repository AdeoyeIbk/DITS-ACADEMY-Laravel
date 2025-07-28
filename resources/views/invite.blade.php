@extends ('layouts.minimal')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/invite.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home-page.css') }}">
@endsection

@section('content')
  <main>
    <div class="box">
    <!-- <img src="../images/illustrations/undraw_messaging.svg" alt="Illustration" class="illustration" /> -->
    <img src="../images/Logos/DITS Academy Logo.webp" alt="DITS logo" class="logo" />
    <h3 class="title-page">Complete Your Account Setup</h3>

    <div class="|">
      <div class="box-1">
      <div class="box-level">
        <label class="form-label" for="Firstname">First Name</label>
        <input type="text" id="username" class="input-field" value="john" disabled />
      </div>
      <div class="box-level">
        <label class="form-label" for="lastname">Last Name</label>
        <input type="text" id="email" class="input-field" value="Doe" disabled />
      </div>
      </div>
      <div class="box-1">
      <div class="box-level">
        <label class="form-label" for="email">Email</label>
        <input type="email" id="password" class="input-field" placeholder="john@example.com" disabled />
      </div>
      <div class="box-level">
        <label class="form-label" for="phonenumber">Phone Number</label>
        <input type="number" id="confirm-password" class="input-field" placeholder="+234 9073-364-207" />
      </div>
      </div>
      <div class="box-1">
      <div class="box-level">
        <p class="form-label">Password</p>
        <input type="password" class="input-field" />
      </div>
      <div class="box-level">
        <p class="form-label">Confirm-password</p>
        <input type="password" class="input-field" placeholder="Confirm your password" />
      </div>
      </div>
    </div>

    <button class="create-btn">Create Account</button>

    <p class="note">Not you? <a href="#">Contact Admin</a></p>
    </div>
  </main>
@endsection