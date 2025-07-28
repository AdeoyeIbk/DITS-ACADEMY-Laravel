@extends ('layouts.minimal')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home-page.css') }}">

@endsection

@section('content')
  <main>
    <div class="box">
    <!-- <img src="../images/illustrations/undraw_messaging.svg" alt="Illustration" class="illustration" /> -->
    <img src="{{ asset('images/Logos/DITS Academy Logo.webp') }}" alt="DITS logo" class="logo" />
    <h3 class="title-page">Login</h3>

    <form method="POST" action="">
      @csrf
      <div class="box-1">
      <div class="box-level">
        <label class="form-label" for="email">Email</label>
        <input type="email" id="email" name="email" class="input-field" placeholder="Enter your email" required
        autofocus>
      </div>
      <div class="box-level">
        <label class="form-label" for="password">Password</label>
        <input type="password" id="password" name="password" class="input-field" placeholder="Enter your password"
        required>
      </div>
      <div class="box-level remember-me">
        <input type="checkbox" id="remember" name="remember" class="remember-checkbox">
        <label for="remember" class="form-label remember-label mb-0">Remember Me</label>
      </div>
      </div>
      <button type="submit" class="create-btn">Login</button>
      <p class="note">Forgot your password? <a href="">Reset it</a></p>
    </form>
  </main>
@endsection