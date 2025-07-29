@extends ('layouts.minimal')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home-page.css') }}">

@endsection

@section('content')
  <main>
    <div class="box">
    <!-- <img src="../images/illustrations/undraw_messaging.svg" alt="Illustration" class="illustration" /> -->
    <a href="{{ route('home') }}"><img src="{{ asset('images/Logos/DITS Academy Logo.webp') }}" alt="DITS logo"
      class="logo" /></a>
    <h3 class="title-page">Reset Password</h3>

    <form method="POST" action="">
      @csrf
      <div class="box-1">
      <div class="box-level">
        <label class="form-label" for="email">Email</label>
        <input type="email" id="email" name="email" class="input-field" placeholder="Enter your email" required
        autofocus>
      </div>
      </div>
      <button type="submit" class="create-btn">Reset Password</button>
      <p class="note"><a href="{{ route('login') }}">I just remembered</a></p>
    </form>
  </main>
@endsection