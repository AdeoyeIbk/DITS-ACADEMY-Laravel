@extends('layouts.app')

@section('styles')
  <link rel="stylesheet" href="{{asset('css/home-page.css')}}">
  <link rel="stylesheet" href="{{asset('css/pages.css')}}">
  <link rel="stylesheet" href="{{asset('css/courses.css')}}">
@endsection

@section('hero')
  <!-- Hero Section -->
  <section id="hero-section" class="hero-section d-flex align-items-center justify-content-center text-center">
    <div class="container">
    <h1 class="display-4 fw-bold">Explore Our Courses</h1>
    <p class="hero-intro">Empower your future with our expertly designed courses. Learn, grow, and achieve your goals
      with DITS Academy.</p>
    </div>
  </section>
@endsection


@section('content')
  <div id="courses-sec" class="main-container"> <a href="{{route('become-a-student')}}">
    <div class="course" id="cyber-security">
      <img src="{{asset('images/courses/cyber security.avif')}}" alt="Cyber Security" class="course-image"
      loading="lazy">
      <div class="course-content">
      <h4 class="course-title">Cyber Security for Newbies (Beginning like a Pro)</h4>
      <div class="class-tutor">
        <img src="{{asset('images/tutors-images/cyber security tutor.avif')}}" alt="cyber security tutor image"
        class="tutor-profile-image" loading="lazy">
        <p class="tutor-name">Ossai Alexander</p>
      </div>
      <p class="course-description">Cybersecurity core concepts,Cyberthreats and attacks, Data encryption basics,
        Network security,Cybersecurity Defense mechanisms,Introduction to Ethical hacking andPenetration testing</p>
      <p class="course-description"><strong>8 weeks (2 months)</strong></p>
      <div class="class-level">
        <i class="bi bi-mortarboard"></i>
        <p class="mb-0">Beginners</p>
      </div>
      <h4 class="class-price ">₦180,000</h4>
      </div>
    </div>
    </a>
    <a href="{{route('become-a-student')}}">
    <div class="course" id="web-development">
      <img src="{{asset('images/courses/web dev.avif')}}" alt="Web Development image" class="course-image"
      loading="lazy">
      <div class="course-content">
      <h4 class="course-title">Web Development</h4>
      <div class="class-tutor">
        <img src="{{asset('images/tutors-images/web development tutor.avif')}}" alt="John Doe"
        class="tutor-profile-image" loading="lazy">
        <p class="tutor-name">Bariyaa Prince</p>
      </div>
      <p class="course-description">Learn HTML, CSS, JavaScript, PHP, and MySQL to build responsive websites,
        dynamic web applications, and interactive user interfaces.</p>
      <p class="course-description"><strong>12 weeks (3 months)</strong></p>
      <div class="class-level">
        <i class="bi bi-mortarboard"></i>
        <p class="mb-0">Beginners</p>
      </div>
      <h4 class="class-price ">₦200,000</h4>
      </div>
    </div>
    </a>
    <a href="{{route('become-a-student')}}">
    <div class="course" id="data-analytics">
      <img src="{{asset('images/courses/data analytics.avif')}}" alt="Data analytics" class="course-image"
      loading="lazy">
      <div class="course-content">
      <h4 class="course-title">Data Analytics
      </h4>
      <div class="class-tutor">
        <img src="{{asset('images/tutors-images/data analysis tutor.avif')}}" alt="data analysis tutor image"
        class="tutor-profile-image" loading="lazy">
        <p class="tutor-name">Akar Excel</p>
      </div>
      <p class="course-description">Gain expertise in Tableau, Python, Excel, and SQL to analyze data, create
        dashboards, and make data-driven decisions.</p>
      <p class="course-description"><strong>12 weeks (3 months)</strong></p>
      <div class="class-level">
        <i class="bi bi-mortarboard"></i>
        <p class="mb-0">Beginners</p>
      </div>
      <h4 class="class-price ">₦200,000</h4>
      </div>
    </div>
    </a>

    <a href="{{route('become-a-student')}}">
    <div class="course" id="graphics-design">
      <img src="{{asset('images/courses/graphics design.avif')}}" alt="Graphic Design" class="course-image"
      loading="lazy">
      <div class="course-content">
      <h4 class="course-title">Graphic Design</h4>
      <div class="class-tutor">
        <img src="{{asset('images/tutors-images/graphics design tutor.jpg')}}" alt="graphic design tutor image"
        class="tutor-profile-image" loading="lazy">
        <p class="tutor-name">Taiwo Benedict</p>
      </div>
      <p class="course-description">Master Photoshop and CorelDraw to create stunning visuals, branding
        materials, and professional designs for digital and print media.</p>
      <p class="course-description"><strong>8 weeks (2 months)</strong></p>
      <div class="class-level">
        <i class="bi bi-mortarboard"></i>
        <p class="mb-0">Beginners</p>
      </div>
      <h4 class="class-price ">₦75,000</h4>
      </div>
    </div>
    </a>

    <a href="{{route('become-a-student')}}">
    <div class="course" id="ui/ux-design">
      <img src="{{asset('images/courses/ux.avif')}}" alt="UI/UX Design" class="course-image" loading="lazy">
      <div class="course-content">
      <h4 class="course-title">UI/UX Design</h4>
      <div class="class-tutor">
        <img src="{{asset('images/tutors-images/UI and UX tutor.avif')}}" alt="UI/UX tutor image"
        class="tutor-profile-image" loading="lazy">
        <p class="tutor-name">Goodhead Boma</p>
      </div>
      <p class="course-description">Learn the principles of user-centered design. Create intuitive and visually
        appealing interfaces that enhance user experiences. Master tools like <strong>Figma</strong> and
        <strong>Adobe XD</strong> for professional UI/UX projects.
      </p>
      <p class="course-description"><strong>8 weeks (2 months)</strong></p>
      <div class="class-level">
        <i class="bi bi-mortarboard"></i>
        <p class="mb-0">Beginners</p>
      </div>
      <h4 class="class-price ">₦100,000</h4>
      </div>
    </div>
    </a>

    <a href="{{route('become-a-student')}}">
    <div class="course" id="mobile-app-development">
      <img src="{{asset('images/courses/Mobile app development.avif')}}" alt="Mobile App Development"
      class="course-image" loading="lazy">
      <div class="course-content">
      <h4 class="course-title">Mobile App Development</h4>
      <div class="class-tutor">
        <img src="{{asset('images/tutors-images/mobile app development tutor.avif')}}"
        alt="mobile app development tutor image" class="tutor-profile-image" loading="lazy">
        <p class="tutor-name">Obarafor Fredrick</p>
      </div>
      <p class="course-description">Build powerful mobile applications for Android and iOS. Master tools like
        Flutter,
        Dart, and Firebase to create seamless apps.</p>
      <p class="course-description"><strong>16 weeks (4 months)</strong></p>
      <div class="class-level">
        <i class="bi bi-mortarboard"></i>
        <p class="mb-0">Beginners</p>
      </div>
      <h4 class="class-price ">₦350,000</h4>
      </div>
    </div>
    </a>

    <a href="{{route('become-a-student')}}">
    <div class="course" id="digital-marketing">
      <img src="{{asset('images/courses/digital marketing.avif')}}" alt="Digital Marketing" class="course-image"
      loading="lazy">
      <div class="course-content">
      <h4 class="course-title">Digital Marketing Essentials: A Practical Approach (Hybrid)</h4>
      <div class="class-tutor">
        <img src="{{asset('images/tutors-images/digital marketing tutor.jpg')}}" alt="digital marketing tutor image"
        class="tutor-profile-image" loading="lazy">
        <p class="tutor-name">Samuel Richard-Uti</p>
      </div>
      <p class="course-description">Master SEO, social media marketing, email campaigns, Google Ads, and
        analytics to grow businesses online.</p>
      <p class="course-description"><strong>8 weeks (2 months)</strong></p>
      <div class="class-level">
        <i class="bi bi-mortarboard"></i>
        <p class="mb-0">Beginners</p>
      </div>
      <h4 class="class-price ">₦30,000</h4>
      </div>
    </div>
    </a>

    <a href="{{route('become-a-student')}}">
    <div class="course" id="cyber-security-pro">
      <img src="{{asset('images/courses/cyber security pro.avif')}}" alt="cyber security Pro" class="course-image"
      loading="lazy">
      <div class="course-content">
      <h4 class="course-title">Cyber Security Pro (Advanced Ethical Hacking)</h4>
      <div class="class-tutor">
        <img src="{{asset('images/tutors-images/cyber security tutor.avif')}}" alt="cyber security tutor image"
        class="tutor-profile-image" loading="lazy">
        <p class="tutor-name">Ossai Alexander</p>

      </div>
      <p class="course-description">Gain advanced skills in cybersecurity, including penetration testing, threat
        analysis, and incident response. Become a certified expert in protecting digital assets.</p>
      <p class="course-description"><strong>4 Months (16 weeks)</strong></p>
      <div class="class-level">
        <i class="bi bi-mortarboard"></i>
        <p class="mb-0">Pro</p>
      </div>
      <h4 class="class-price ">₦350,000</h4>
      </div>
    </div>
    </a>

    <a href="{{route('become-a-student')}}">
    <div class="course" id="social-media-management">
      <img src="{{asset('images/courses/Social media management.avif')}}" alt="Social Media Management"
      class="course-image" loading="lazy">
      <div class="course-content">
      <h4 class="course-title">Social Media Management</h4>
      <div class="class-tutor">
        <img src="{{asset('images/tutors-images/social media management tutor.avif')}}" alt="social media tutor image"
        class="tutor-profile-image" loading="lazy">
        <p class="tutor-name">Onaiwu Emmanuella</p>
      </div>
      <p class="course-description">Running Facebook, Instagram, And
        TikTok Ads, Digital Marketing
        Bonus: Mobile Video/Photo Editing</p>
      <p class="course-description"><strong>8 weeks (2 months)</strong></p>
      <div class="class-level">
        <i class="bi bi-mortarboard"></i>
        <p class="mb-0">Beginners</p>
      </div>
      <h4 class="class-price ">₦80,000</h4>
      </div>
    </div>
    </a>

    <a href="{{route('become-a-student')}}">
    <div class="course" id="ai-for-workplace">
      <img src="{{asset('images/courses/AI in business.webp')}}" alt="AI for Workplace" class="course-image"
      loading="lazy">
      <div class="course-content">
      <h4 class="course-title">Artificial Intelligence for Workplace</h4>
      <div class="class-tutor">
        <img src="{{asset('images/tutors-images/AI tutor.avif')}}" alt="artificial intelligence tutor image"
        class="tutor-profile-image" loading="lazy">
        <p class="tutor-name">Adolphus Obinna</p>
      </div>
      <p class="course-description">Python For AI, AI In Customer Service,
        Identifying AI Opportunities In Your
        Workplace, AI In Marketing</p>
      <p class="course-description"><strong>8 weeks (2 months)</strong></p>
      <div class="class-level">
        <i class="bi bi-mortarboard"></i>
        <p class="mb-0">Beginners</p>
      </div>
      <h4 class="class-price ">₦150,000</h4>
      </div>
    </div>
    </a>

    <a href="{{route('become-a-student')}}">
    <div class="course" id="forex">
      <img src="{{asset('images/courses/forex-image.jpg')}}" alt="forex image" class="course-image" loading="lazy">
      <div class="course-content">
      <h4 class="course-title">Forex</h4>
      <div class="class-tutor">
        <img src="{{asset('images/tutors-images/forex tutor.avif')}}" alt="forex tutor image"
        class="tutor-profile-image" loading="lazy">
        <p class="tutor-name">Ugwu Augustine</p>
      </div>
      <p class="course-description">
        Master technical and fundamental analysis, understand candlestick patterns, identify key support and
        resistance levels, and develop effective trading strategies for consistent results.
      </p>
      <p class="course-description"><strong>8 weeks (2 months)</strong></p>
      <div class="class-level">
        <i class="bi bi-mortarboard"></i>
        <p class="mb-0">Beginners</p>
      </div>
      <h4 class="class-price ">₦150,000</h4>
      </div>
    </div>
    </a>

    <a href="{{route('become-a-student')}}">
    <div class="course" id="microsoft-office-essentials">
      <img src="{{asset('images/courses/Microsoft Office essentials.avif')}}" alt="microsoft office image"
      class="course-image" loading="lazy">
      <div class="course-content">
      <h4 class="course-title">Microsoft Office Automation Essentials</h4>
      <div class="class-tutor">
        <img src="{{asset('images/tutors-images/microsoft office essentials tutor.avif')}}"
        alt="microsoft office essentials tutor image" class="tutor-profile-image" loading="lazy">
        <p class="tutor-name">Godknows Mene Barisua</p>
      </div>
      <p class="course-description">
        WINDOWS 11, MS WORD, EXCEL,
        POWERPOINT, ONEDRIVE, OUTLOOK,
        AND SKYPE
      </p>
      <p class="course-description"><strong>4 weeks (1 months)</strong></p>
      <div class="class-level">
        <i class="bi bi-mortarboard"></i>
        <p class="mb-0">Beginners</p>
      </div>
      <h4 class="class-price ">₦50,000</h4>
      </div>
    </div>
    </a>

    <a href="{{route('become-a-student')}}">
    <div class="course" id="python-programming">
      <img src="{{asset('images/courses/python-programming-language.webp')}}" alt="python programming image"
      class="course-image" loading="lazy">
      <div class="course-content">
      <h4 class="course-title">Python Class</h4>
      <div class="class-tutor">
        <img src="{{asset('images/tutors-images/python tutor.avif')}}" alt="python tutor image"
        class="tutor-profile-image" loading="lazy">
        <p class="tutor-name">Adolphus Obinna</p>
      </div>
      <p class="course-description">
        Learn Python programming from scratch. Understand variables, data types, control structures, functions,
        object-oriented programming, and work on real-world projects to build a strong foundation in Python.
      </p>
      <p class="course-description"><strong>8 weeks (2 months)</strong></p>
      <div class="class-level">
        <i class="bi bi-mortarboard"></i>
        <p class="mb-0">Beginners</p>
      </div>
      <h4 class="class-price ">₦200,000</h4>
      </div>
    </div>
    </a>
  </div>
  </div>

@endsection