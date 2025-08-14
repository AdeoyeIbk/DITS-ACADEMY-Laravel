@extends ('layouts.app')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/invite.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home-page.css') }}">
  <link rel="stylesheet" href="{{ asset('css/student-profile.css') }}">
@endsection

@section('content')
  <main>
    <div class="box">
    <div class="top">
      <span class="material-symbols-outlined back-icon">
      chevron_backward
      </span>
      <h3 class=" title-page">Edit Profile</h3>
    </div>

    <div class="|">
      <div class="box-1">
      <div class="box-level">
        <label class="form-label" for="Firstname">First Name</label>
        <input type="text" id="username" class="input-field" value="john" />
      </div>
      <div class="box-level">
        <label class="form-label" for="lastname">Last Name</label>
        <input type="text" id="email" class="input-field" value="Doe" />
      </div>
      </div>
      <div class="box-1">
      <div class="box-level">
        <label class="form-label" for="email">Email</label>
        <input type="email" id="password" class="input-field" placeholder="john@example.com" />
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

    <button class="create-btn">Save Changes</button>
    </div>
  </main>
@endsection