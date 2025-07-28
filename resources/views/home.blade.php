@extends('layouts.app')


@section('styles')
  <link rel="stylesheet" href="{{asset('css/home-page.css')}}">
@endsection


@section('hero')
  <!-- Carousel -->
  <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-item carousel-item-one active">
    <img src="{{asset('images/background/code-screen.webp')}}" class="w-100 img-fluid" alt="Code Screen">
    </div>
    <div class="carousel-item carousel-item-two">
    <img src="{{asset('images/background/showing-code.webp')}}" class="w-100 img-fluid" alt="Placeholder">
    </div>
    <div class="carousel-item carousel-item-three">
    <img src="{{asset('images/background/code solving group.webp')}}" class="w-100 img-fluid" alt="Laughing Group">
    </div>

  </div>
  <!-- End of Carousel -->
  <div class="hero-body fade-element">
    <h1 class="hero-heading">Welcome to DITS Academy</h1>
    <p class="hero-paragraph">Your journey to excellence starts here. Explore our courses and programs designed to
    empower your future in
    technology.</p>
    <a href="#courses-section"><button class="btn btn-primary btn-lg">Get Started</button></a>
  </div>
@endsection

@section('content')

  <!-- About Section -->
  <section id="about-us" class="container">
    <div class="about-inner-container">
    <div class="about-image-container col-sm-12"><img src="{{asset('images/gallery/data analysis class.webp')}}"
      alt="data analysis" class="about-image fade-element img-fluid" loading="lazy"></div>
    <div class="about-body">
      <div>
      <h2 class="fade-element">About DITS ACADEMY</h2>
      <p class=" fade-element">At DITS Academy, we are committed to providing top-notch education in
        technology and
        innovation. Our mission
        is
        to equip students with the skills and knowledge they need to excel in the ever-evolving tech industry.
        With
        experienced tutors, hands-on training, and a supportive learning environment, we help you achieve your
        career goals.</p>
      </div>
      <div class="qualities-grid-container">
      <div class="quality fade-element">
        <div class="quality-icon fs-3"><i class="bi bi-lightbulb"></i></div>
        <div class="quality-text">
        <h5>Innovative Learning</h5>
        <p>We provide cutting-edge courses designed to keep you ahead in the tech industry.</p>
        </div>
      </div>
      <div class="quality fade-element">
        <div class="quality-icon fs-3"><i class="bi bi-people"></i></div>
        <div class="quality-text">
        <h5>Expert tutors</h5>
        <p>Learn from industry professionals with years of experience and expertise.</p>
        </div>
      </div>
      <div class="quality fade-element">
        <div class="quality-icon fs-3"><i class="bi bi-person-workspace"></i></div>
        <div class="quality-text">
        <h5>Hands-On Training</h5>
        <p>Gain practical skills through real-world projects and interactive sessions.</p>
        </div>
      </div>
      <div class="quality fade-element">
        <div class="quality-icon fs-3"><i class="bi bi-award"></i></div>
        <div class="quality-text">
        <h5>Alumni Community</h5>
        <p>Join a thriving network of successful graduates who support, inspire, and collaborate beyond the
          classroom.</p>
        </div>
      </div>
      </div> <a href="{{route('about')}} "><button class="btn btn-primary btn-md">Learn more</button></a>
    </div>
    </div>
  </section>
  <!-- courses section -->
  <section id="courses-section" class="container py-5">
    <h2 class="fade-element">Our Courses</h2>
    <p class="courses-intro fade-element text-white">We offer a wide range of courses designed to meet the needs of
    beginners and
    professionals
    alike. Whether
    you're looking to start a career in tech or advance your skills, we have the right program for you.</p>
    <ul id="courses" class="courses-container fade-element">
    <!-- Web Development -->
    <li>
      <div class="card" style="width: 18rem;">
      <img src="{{ asset('images/courses/web dev.avif') }}" class="card-img" alt="Web Development" loading="lazy">
      <div class="card-body">
        <div>
        <h5 class="card-title">Web Development</h5>
        <h6 class="card-subtitle mb-2">Learn HTML, CSS, JavaScript, PHP, and MySQL to build responsive websites,
          dynamic web applications, and interactive user interfaces.</h6>
        </div>
        <a href="{{route('courses')}}#web-development"><button
          class="btn btn-outline-primary text-white more-courses-button">Learn More</button></a>
      </div>
      </div>
    </li>
    <!-- Graphics Design -->
    <li>
      <div class="card" style="width: 18rem;">
      <img src="{{ asset('images/courses/graphics design.avif') }} " class="card-img card-img-top"
        alt="Graphics Design" loading="lazy">
      <div class="card-body">
        <div>
        <h5 class="card-title">Graphics Design</h5>
        <h6 class="card-subtitle mb-2">Master Photoshop and CorelDraw to create stunning visuals, branding
          materials, and professional designs for digital and print media.</h6>
        </div>
        <a href="{{route('courses')}}#graphics-design"><button
          class="btn btn-outline-primary text-white more-courses-button">Learn More</button></a>
      </div>
      </div>
    </li>
    <!-- Cyber Security -->
    <li>
      <div class="card" style="width: 18rem;">
      <img src="{{ asset('images/courses/cyber security.avif') }}" class="card-img card-img-top" alt="Cyber Security"
        loading="lazy">
      <div class="card-body">
        <div>
        <h5 class="card-title">Cyber Security for Newbies</h5>
        <h6 class="card-subtitle mb-2">Understand cyber threats, data encryption, security policies, network
          protection, and command-line tools to safeguard digital assets.</h6>
        </div>
        <a href="{{route('courses')}}#cyber-security"><button
          class="btn btn-outline-primary text-white more-courses-button">Learn More</button></a>
      </div>
      </div>
    </li>
    <!-- Data Analytics -->
    <li>
      <div class="card" style="width: 18rem;">
      <img src="{{asset('images/courses/data analytics.avif')}}" class="card-img card-img-top" alt="Data Analytics"
        loading="lazy">
      <div class="card-body">
        <div>
        <h5 class="card-title">Data Analytics</h5>
        <h6 class="card-subtitle mb-2">Gain expertise in Tableau, Python, Excel, and SQL to analyze data, create
          dashboards, and make data-driven decisions.</h6>
        </div>
        <a href="{{route('courses')}}#data-analytics"><button
          class="btn btn-outline-primary text-white more-courses-button">Learn
          More</button></a>
      </div>
      </div>
    </li>
    <!-- Cyber Security Pro -->
    <li>
      <div class="card" style="width: 18rem;">
      <img src="{{asset('images/courses/cyber security pro.avif')}}" class="card-img card-img-top"
        alt="Cyber Security Pro" loading="lazy">
      <div class="card-body">
        <div>
        <h5 class="card-title">Cyber Security Pro</h5>
        <h6 class="card-subtitle mb-2">Advanced topics in network security, penetration testing, Python
          scripting,
          Wi-Fi hacking, and cloud security for professionals.</h6>
        </div>
      </div>
      <a href="{{route('courses')}}#cyber-security-pro"><button
        class="btn btn-outline-primary text-white more-courses-button">Learn More</button></a>
      </div>
      </div>
    </li>
    <!-- UI/UX Design -->
    <li>
      <div class="card" style="width: 18rem;">
      <img src="{{asset('images/courses/ux.avif')}}" class="card-img card-img-top" alt="UI/UX Design" loading="lazy">
      <div class="card-body">
        <div>
        <h5 class="card-title">UI/UX Design</h5>
        <h6 class="card-subtitle mb-2">Learn Figma and Adobe XD to design user-friendly interfaces, wireframes,
          and prototypes for web and mobile applications.</h6>
        </div>
      </div>
      <a href="{{route('courses')}}#ui/ux-design"><button
        class="btn btn-outline-primary text-white more-courses-button">Learn More</button></a>
      </div>
      </div>
    </li>
    <!-- Microsoft Office Automation Essentials -->
    <li>
      <div class="card" style="width: 18rem;">
      <img src="{{asset('images/courses/Microsoft Office essentials.avif')}}" class="card-img card-img-top"
        alt="Microsoft Office Automation Essentials" loading="lazy">
      <div class="card-body">
        <div>
        <h5 class="card-title">Microsoft Office Automation Essentials</h5>
        <h6 class="card-subtitle mb-2">Master Windows 11, MS Word, Excel, PowerPoint, OneDrive, Outlook, and
          Skype
          for efficient office productivity.</h6>
        </div>
        <a href="{{route('courses')}}#microsoft-office-essentials"><button
          class="btn btn-outline-primary text-white more-courses-button">Learn More</button></a>
      </div>
      </div>
    </li>
    <!-- Mobile App Development -->
    <li>
      <div class="card" style="width: 18rem;">
      <img src="{{asset('images/courses/Mobile app development.avif')}}" class="card-img card-img-top"
        alt="Mobile App Development" loading="lazy">
      <div class="card-body">
        <div>
        <h5 class="card-title">Mobile App Development</h5>
        <h6 class="card-subtitle mb-2">Build cross-platform mobile apps using Flutter, Dart, and Firebase with
          hands-on projects.</h6>
        </div>
        <a href="{{route('courses')}}#mobile-app-development"><button
          class="btn btn-outline-primary text-white more-courses-button">Learn More</button></a>
      </div>
      </div>
    </li>
    <!-- Social Media Management -->
    <li>
      <div class="card" style="width: 18rem;">
      <img src="{{asset('images/courses/Social media management.avif')}}" class="card-img card-img-top"
        alt="Social Media Management" loading="lazy">
      <div class="card-body">
        <div>
        <h5 class="card-title">Social Media Management</h5>
        <h6 class="card-subtitle mb-2">Learn to run Facebook, Instagram, TikTok ads, create engaging content,
          analyze performance, and optimize campaigns.</h6>
        </div>
        <a href="{{route('courses')}}#social-media-management"><button
          class="btn btn-outline-primary text-white more-courses-button">Learn More</button></a>
      </div>
      </div>
    </li>
    <!-- AI for workplace -->
    <li>
      <div class="card" style="width: 18rem">
      <img src="{{asset('images/courses/AI in business.webp')}}" class="card-img card-img-top" alt="AI for Business"
        loading="lazy">
      <div class="card-body">
        <div>
        <h5 class="card-title">AI For Workplace</h5>
        <h6 class="card-subtitle mb-2">Explore AI fundamentals, Python programming, neural networks, and their
          applications in marketing, HR, and operations.</h6>
        </div>
        <a href="{{route('courses')}}#ai-for-workplace"><button
          class="btn btn-outline-primary text-white more-courses-button">Learn More</button></a>
      </div>
      </div>
    </li>
    <!-- Digital Marketing -->
    <li>
      <div class="card" style="width: 18rem;">
      <img src="{{asset('images/courses/digital marketing.avif')}}" class="card-img card-img-top"
        alt="Digital Marketing" loading="lazy">
      <div class="card-body">
        <div>
        <h5 class="card-title">Digital Marketing Essentials: A Practical Approach (Hybrid)</h5>
        <h6 class="card-subtitle mb-2">Master SEO, social media marketing, email campaigns, Google Ads, and
          analytics to grow businesses online.</h6>
        </div>
        <a href="{{route('courses')}}#digital-marketing"><button
          class="btn btn-outline-primary text-white more-courses-button">Learn More</button></a>
      </div>
      </div>
    </li>
    <!-- Python programming -->
    <li>
      <div class="card" style="width: 18rem;">
      <img src="{{asset('images/courses/python-programming-language.webp')}}" class="card-img card-img-top"
        alt="Python programming image" loading="lazy">
      <div class="card-body">
        <div>
        <h5 class="card-title">Python Class</h5>
        <h6 class="card-subtitle mb-2">Gain expertise in Tableau, Python, Excel, and SQL to analyze data, create
          dashboards, and make data-driven decisions.</h6>
        </div>
        <a href="{{route('courses')}}#python-programming"><button
          class="btn btn-outline-primary text-white more-courses-button">Learn More</button></a>
      </div>
      </div>
    </li>
    <!-- Forex -->
    <li>
      <div class="card" style="width: 18rem;">
      <img src="{{asset('images/courses/forex-image.jpg')}}" class="card-img card-img-top" alt="forex image"
        loading="lazy">
      <div class="card-body">
        <div>
        <h5 class="card-title">Forex Class</h5>
        <h6 class="card-subtitle mb-2">Master technical and fundamental analysis, understand candlestick
          patterns,
          identify key support and
          resistance levels, and develop effective trading strategies for consistent results.</h6>
        </div>
        <a href="{{route('courses')}}#forex"><button
          class="btn btn-outline-primary text-white more-courses-button">Learn More</button></a>
      </div>
      </div>
    </li>
    </ul>
    <a href="{{route('courses')}}"><button class="btn btn-primary">View All Courses</button></a>
  </section>
  <!-- tutors Section -->
  <section id="tutors-section" class="container py-5">
    <h2 class="heading col-12 text-center fade-element">Meet Our Tutors</h2>
    <p class="col-12
       text-center fade-element tutors-intro text-white">Our team of experienced tutors is dedicated to providing
    you
    with
    the best learning experience.
    Learn from industry experts who are passionate about teaching and mentoring.</p>
    <div class="row">
    <div class="col-md-4 text-center fade-element tutor-card">
      <img src="{{asset('images/tutors-images/web development tutor.avif')}}" class="img-fluid tutor-image  mb-3"
      alt="web development tutor" loading="lazy">
      <h5>Bariyaa Prince</h5>
      <p class="text-white">Web Development Expert</p>
    </div>
    <div class="col-md-4 text-center fade-element tutor-card">
      <img src="{{asset('images/tutors-images/data analysis tutor.avif')}}" class="img-fluid tutor-image  mb-3"
      alt="data analysis tutor" loading="lazy">
      <h5>Akar Excel</h5>
      <p class="text-white">Data Science Specialist</p>
    </div>
    <div class="col-md-4 text-center fade-element tutor-card">
      <img src="images/tutors-images/graphics design tutor.png" class="img-fluid tutor-image  mb-3"
      alt="graphics design tutor" loading="lazy">
      <h5>Taiwo Benedict</h5>
      <p class="text-white">Graphics Design Tutor</p>
    </div>
    </div>
    <a href="{{route('tutors')}}"><button type="button" class="btn btn-primary">See all tutors</button></a>
  </section>
  <!-- Gallery Section -->
  <section id="gallery-section">
    <h2 class="text-center fade-element">Gallery</h2>
    <p class="gallery-intro text-center fade-element">Take a glimpse into our vibrant learning environment, events,
    and
    student
    projects. At DITS Academy, we foster
    creativity and innovation.</p>
    <div class="row stack-container">
    <!-- stack 1 -->
    <div class="stack col-md-4 fade-element">
      <h5 class="stack-heading">Classrooms</h5>
      <div class=" image-stack">
      <img src="{{asset('images/gallery/data analysis class.webp')}}" class="img-fluid img-1 img"
        alt="data analysis class in session" loading="lazy">
      <img src="{{asset('images/gallery/web development class.webp')}}" class="img-fluid img-2 img"
        alt="web development class in session" loading="lazy"> <img
        src="{{asset('images/gallery/students taking test.webp')}}" class="img-fluid img-3 img"
        alt="students taking tests" loading="lazy">
      </div>
    </div>
    <!-- stack 2 -->
    <div class="stack col-md-4 fade-element">
      <h5 class="stack-heading">Graduation</h5>
      <div class="image-stack ">
      <img src="{{asset('images/gallery/graduation address.webp')}}" class="img-fluid img-1 img"
        alt="CEO addressing the graduants" loading="lazy">
      <img src="{{asset('images/gallery/graduation group picture.webp')}}" class="img-fluid img-2 img"
        alt="graduation ceremony group picture" loading="lazy">
      <img src="{{asset('images/gallery/graduation.webp')}}" class="img-fluid img-3 img"
        alt="graduation group picture 2">
      </div>
    </div>
    <!-- stack 3 -->
    <!-- <div class="stack col-md-4 fade-element">
      <h5 class="stack-heading">Student Projects</h5>
      <div class="image-stack">
      <img src="src/images/gallery/image8.avif" class="img-fluid img-1 img" alt="Student Project"><img
      src="src/images/gallery/image8.avif" class="img-fluid img-2 img" alt="Student Project" loading="lazy"><img
      src="src/images/gallery/image9.avif" class="img-fluid img-3 img" alt="Student Project" loading="lazy">
      </div>
      </div> -->
    </div>
    <a href="{{route('gallery')}}" class="mt-5"><button class="btn btn-primary">View all</button></a>
  </section>
  <!-- classes section -->
  <section id="live-classes-section" class="container justify-content-center py-5">
    <div class="section-header text-center">
    <h2 class=" heading fade-element">Live & upcoming classes</h2>
    <p class="section-subtitle fade-element">Join our live and upcoming classes to learn from expert tutors and
      enhance your skills anytime, anywhere.
    </p>
    </div>
    <div class="classes-grid">
    <div class="class-card fade-element">
      <img src="{{asset('images/courses/AI in business.webp')}}" alt="AI in business" class="class-image"
      loading="lazy">
      <div class="class-content">
      <h3 class="class-title">AI for Workplace</h3>
      <div class="class-tutor">
        <img src="{{asset('images/tutors-images/AI tutor.avif')}}" alt="AI tutor" class="tutor-profile-image"
        loading="lazy">
        <p class="tutor-name">Adolphus Obinna</p>
      </div>
      <p class="class-description">Python For AI, AI In Customer Service,
        Identifying AI Opportunities In Your
        Workplace, AI In Marketing.
      </p>
      <div class="class-details">
        <div class="class-level">
        <i class="bi bi-mortarboard"></i>
        <p class="mb-0">All levels</p>
        </div>
        <div class="class-seats">
        <i class="bi bi-people"></i>
        <p class="mb-0">20 Seats</p>
        <p class="mb-0"><i class="bi bi-dot"></i> 5 registered attendees</p>
        </div>
      </div>
      <h4 class="class-price ">₦100,000</h4>
      <div class="class-actions">
        <button class="btn btn-primary">Join Class</button>
        <button class="btn btn-outline-primary text-white">Share</button>
      </div>
      </div>
    </div>
    <div class="class-card fade-element">
      <img src="{{asset('images/courses/forex-image.jpg')}}" alt="forex couse image" class="class-image" loading="lazy">
      <div class="class-content">
      <h3 class="class-title">Forex</h3>
      <div class="class-tutor">
        <img src="{{asset('images/tutors-images/forex tutor.avif')}}" alt="forex tutor image"
        class="tutor-profile-image" loading="lazy">
        <p class="tutor-name">Ugwu Augustine</p>
      </div>
      <p class="class-description">Market analysis and prediction, candle anatomy, support and resistance</p>
      <div class="class-details">
        <div class="class-level">
        <i class="bi bi-mortarboard"></i>
        <p class="mb-0">Beginners</p>
        </div>
        <div class="class-seats">
        <i class="bi bi-people"></i>
        <p class="mb-0">20 Seats</p>
        <p class="mb-0"><i class="bi bi-dot"></i> 4 registered attendees</p>
        </div>
      </div>
      <h4 class="class-price ">$50</h4>
      <div class="class-actions">
        <button class="btn btn-primary">Join Class</button>
        <button class="btn btn-outline-primary text-white">Share</button>
      </div>
      </div>
    </div>
    <div class="class-card fade-element">
      <img src="{{asset('images/courses/python-programming-language.webp')}}" alt="python course image"
      class="class-image" loading="lazy">
      <div class="class-content">
      <h3 class="class-title">Python (Private Class)</h3>
      <div class="class-tutor">
        <img src="{{asset('images/tutors-images/python tutor.avif')}}" alt="python tutor image"
        class="tutor-profile-image" loading="lazy">
        <p class="tutor-name">Adolphus Obinna</p>
      </div>
      <p class="class-description">Learn Python programming from scratch: syntax, data structures, functions, OOP,
        and real-world projects to build your coding skills.</p>
      <div class="class-details">
        <div class="class-level">
        <i class="bi bi-mortarboard"></i>
        <p class="mb-0">Beginners</p>
        </div>
        <div class="class-seats">
        <i class="bi bi-people"></i>
        <p class="mb-0">10 Seats</p>
        <p class="mb-0"><i class="bi bi-dot"></i> 2 registered attendees</p>
        </div>
      </div>
      <h4 class="class-price ">200,000</h4>
      <div class="class-actions">
        <button class="btn btn-primary">Join Class</button>
        <button class="btn btn-outline-primary text-white">Share</button>
      </div>
      </div>
    </div>
    </div>
    <a href="{{route('live-classes')}}" class="mt-3"><button type="button" class="btn btn-primary">See all
      classes</button></a>
  </section>
  <section id="call-to-action" class="text-center py-5 text-white">
    <h2 class="text-white">Don't know where to start?</h2>
    <p class="text-white">Talk to us, let's get you on track with the techy you!</p>
    <a href="{{route('contact')}}" class="btn btn-primary btn-md">Contact Us</a>
  </section>

@endsection