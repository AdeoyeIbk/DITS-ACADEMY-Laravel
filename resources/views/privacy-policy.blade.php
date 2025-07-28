@extends('layouts.app')

@section('styles')
  <link rel="stylesheet" href="{{asset('css/home-page.css')}}">
  <link rel="stylesheet" href="{{asset('css/pages.css')}}">
  <link rel="stylesheet" href="{{asset('css/courses.css')}}">
@endsection



@section('content')
  <div class="main container my-5">
    <h1 class="text-center mb-4 text-white">Privacy Policy</h1>
    <p>
    At DITS Academy, we value your privacy and are committed to protecting your personal information. This Privacy
    Policy outlines how we collect, use, and safeguard your data when you interact with our website and services.
    </p>
    <h3 class="text-white">Information We Collect</h3>
    <p>
    We may collect the following types of information:
    </p>
    <ul>
    <li class="text-white">Personal information such as your name, email address, and phone number when you subscribe to
      our newsletter or
      contact us.</li>
    <li class="text-white">Personal information such as your name, email address, and phone number when you subscribe to
      our newsletter orTechnical data such as your IP address, browser type, and operating system for analytics
      purposes.</li>
    <li class="text-white">Personal information such as your name, email address, and phone number when you subscribe to
      our newsletter orCookies and similar technologies to enhance your browsing experience.</li>
    </ul>
    <h3 class="text-white">How We Use Your Information</h3>
    <p>
    The information we collect is used to:
    </p>
    <ul>
    <li class="text-white">Provide and improve our services.</li>
    <li class="text-white">Respond to your inquiries and requests.</li>
    <li class="text-white">Send you updates, newsletters, and promotional materials (if you have opted in).</li>
    <li class="text-white">Analyze website usage and improve user experience.</li>
    </ul>
    <h3 class="text-white">Sharing Your Information</h3>
    <p>
    We do not sell or share your personal information with third parties, except as required by law or to provide our
    services (e.g., payment processing).
    </p>
    <h3 class="text-white">Your Rights</h3>
    <p>
    You have the right to access, update, or delete your personal information. If you wish to exercise these rights,
    please contact us at <a href="mailto:contact@decentitservice.com">contact@decentitservice.com</a>.
    </p>
    <h3 class="text-white">Data Security</h3>
    <p>
    We implement appropriate technical and organizational measures to protect your data from unauthorized access, loss,
    or misuse.
    </p>
    <h3 class="text-white">Changes to This Policy</h3>
    <p>
    We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated
    revision date.
    </p>
    <h3 class="text-white">Contact Us</h3>
    <p>
    If you have any questions or concerns about this Privacy Policy, please contact us at <a
      href="mailto:contact@decentitservice.com">contact@decentitservice.com</a>.
    </p>
  </div>
@endsection