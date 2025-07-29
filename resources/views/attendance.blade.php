@extends ('layouts.minimal')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/home-page.css') }}">
  <link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
@endsection

@section('content')
  <header class="py-3 bg-dark text-white">
    <div class="container d-flex flex-column align-items-center">
    <a href="{{ route('home') }}">
      <img src="{{asset('images/Logos/DITS Academy Logo white.webp')}}" alt="DITS ACADEMY LOGO" class="mb-2"
      style="max-width: 50px;">
    </a>
    <h1 class="h4 mb-0 text-center">DITS Academy Student Attendance</h1>
    </div>
  </header>
  <main class="container my-5">
    <section class="mb-4 container text-center">
    <div class="heading">
      <h2 class="mb-3">Hey, Timothy</h2>
      <div class="dropdown">
      <span class="me-2 text-white">Course:</span>
      <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
        aria-expanded="false">
        Web Development
      </a>

      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Cyber Security</a></li>
        <!-- <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li> -->
      </ul>
      </div>
    </div>



    </section>

    <section class="row g-3 mb-4 justify-content-center">
    <div class="col-md-4">
      <div class="card shadow-sm border-0 h-100 bg-white">
      <div class="card-body py-3 text-center">
        <h6 class="card-title mb-2 text-uppercase text-black">Total Courses</h6>
        <p class="display-6 fw-bold mb-0 text-primary">2</p>
        <small class="text-black">Number of courses</small>
      </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm border-0 h-100 bg-white">
      <div class="card-body py-3 text-center">
        <h6 class="card-title mb-2 text-uppercase text-black">Present</h6>
        <p class="display-6 fw-bold mb-0 text-success">2</p>
        <small class="text-black">Attended sessions</small>
      </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm border-0 h-100 bg-white">
      <div class="card-body py-3 text-center">
        <h6 class="card-title mb-2 text-uppercase text-black">Absent</h6>
        <p class="display-6 fw-bold mb-0 text-danger">2</p>
        <small class="text-black">Missed sessions</small>
      </div>
      </div>
    </div>
    </section>

    <section class="attendance-table">
    <h4 class="text-white mb-3">Attendance Details</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered align-middle">
      <thead class="table-dark">
        <tr>
        <th>Date</th>
        <th>Status</th>
        <th>Remarks</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <td>Tuesday, 8<sup>th</sup> July 2025</td>
        <td><span class="badge bg-success">Present</span></td>
        <td>On time</td>
        </tr>
        <tr>
        <td>Thursday, 3<sup>rd</sup> July 2025</td>
        <td><span class="badge bg-danger">Absent</span></td>
        <td>Sick leave</td>
        </tr>
        <tr>
        <td>Wednesday, 2<sup>nd</sup> July 2025</td>
        <td><span class="badge bg-success">Present</span></td>
        <td>On time</td>
        </tr>
        <tr>
        <td>Tuesday, 1<sup>st</sup> July 2025</td>
        <td><span class="badge bg-danger">Absent</span></td>
        <td>No excuse</td>
        </tr>
      </tbody>
      </table>
    </div>
    </section>
  </main>

  <footer class="bg-dark text-white py-3 mt-auto">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
    <div class="text-center text-md-start mb-2 mb-md-0">
      <small>&copy; 2025 DITS Academy. All rights reserved.</small>
    </div>
    <div class="text-center text-md-end ">
      <a href="../../index.html" title="Home" class="text-white footer-home-link d-inline-flex align-items-center">
      <i class="bi bi-house-door-fill me-2" style="font-size: 1rem;"></i>Back to home
      </a>
    </div>
    </div>
  </footer>
@endsection