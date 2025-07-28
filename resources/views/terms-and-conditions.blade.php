@extends('layouts.app')

@section('styles')
  <link rel="stylesheet" href="{{asset('css/home-page.css')}}">
  <link rel="stylesheet" href="{{asset('css/pages.css')}}">
  <link rel="stylesheet" href="{{asset('css/courses.css')}}">
@endsection



@section('content')
  <div class="container my-5 py-5">
    <h1 class="mb-4 text-white">Terms and Conditions</h1>
    <p>Welcome to DITS Academy. By accessing or using our website, you agree to comply with and be bound by the following
    terms and conditions. Please read them carefully.</p>

    <h3 class="text-white" class="mt-4">1. Acceptance of Terms</h2>
    <p>By accessing this website, you accept these terms and conditions in full. If you disagree with any part of these
      terms, please do not use our website.</p>

    <h3 class="text-white" class="mt-4">2. Intellectual Property Rights</h2>
      <p>Unless otherwise stated, DITS Academy and/or its licensors own the intellectual property rights for all
      material on
      this website. All intellectual property rights are reserved.</p>

      <h3 class="text-white" class="mt-4">3. Use of Website</h2>
      <ul>
        <li class=text-white>You may view, download for caching purposes only, and print pages from the website for
        your own personal
        use,
        subject to the restrictions set out below.</li>
        <li class=text-white>You must not republish, sell, rent, or sub-license material from this website.</li>
        <li class=text-white>You must not reproduce, duplicate, copy, or otherwise exploit material on this website
        for a commercial
        purpose.
        </li>
      </ul>

      <h3 class="text-white" class="text-white" class="mt-4">4. User Content</h2>
        <p>Any content you submit to the website (such as comments or feedback) must not be illegal, offensive, or
        infringe
        any third party rights. DITS Academy reserves the right to remove any such content at its discretion.</p>

        <h3 class="text-white" class="text-white" class="mt-4">5. Limitation of Liability</h2>
        <p>DITS Academy will not be liable for any damages arising from the use or inability to use the website or
          any
          information provided on the website.</p>

        <h3 class="text-white" class="text-white" class="mt-4">6. Changes to Terms</h2>
          <p>We may revise these terms and conditions at any time. By using this website, you are expected to review
          these terms
          regularly to ensure you understand all terms and conditions governing use of this website.</p>

          <h3 class="text-white" class="text-white" class="mt-4">7. Governing Law</h2>
          <p>These terms and conditions are governed by and construed in accordance with the laws of the
            jurisdiction in which
            DITS Academy operates.</p>

          <h3 class="text-white" class="text-white" class="mt-4">8. Contact Us</h2>
            <p>If you have any questions about these Terms and Conditions, please contact us at <a
              href="mailto:info@decentitservice.com">info@decentitservice.com</a>.</p>
  </div>
@endsection