@extends('layouts.app')

@section('styles')
  <link rel="stylesheet" href="{{asset('css/home-page.css')}}">
  <link rel="stylesheet" href="{{asset('css/pages.css')}}">
  <link rel="stylesheet" href="{{asset('css/about-page.css')}}">
@endsection

@section('hero')
  <!-- about section -->
  <section id="about-us">
    <div class="hero-body">
    <div>
      <h1 class="hero-heading">About DITS ACADEMY</h1>
      <p class="hero-paragraph">At DITS Academy, we are committed to providing top-notch education in
      technology and
      innovation. Our mission
      is
      to equip students with the skills and knowledge they need to excel in the ever-evolving tech industry.
      With
      experienced tutors, hands-on training, and a supportive learning environment, we help you achieve your
      career goals.</p>
    </div>
    </div>
    </div>
  </section>
@endsection


@section('content')
  <section id="achievement-section" class="container">
    <div class="achievement-container">
    <div class="achievement">
      <span class="achievement-number" data-target="20">0</span><span class="achievement-title">Courses</span>
    </div>
    <div class="achievement">
      <span class="achievement-number" data-target="1000">0</span><span class="achievement-title">Satisfied
      students</span>
    </div>
    <div class="achievement">
      <span class="achievement-number" data-target="30">0</span><span class="achievement-title">Expert Tutors</span>
    </div>
    <div class="achievement">
      <span class="achievement-number" data-target="1000">0</span><span class="achievement-title">Satisfied
      students</span>
    </div>
    </div>
  </section>

  <section id="mission-vision" class="container py-5">
    <h2 class="text-center mb-4">Our Mission & Vision</h2>
    <div class="row">
    <div class="col-md-6">
      <h3>Our Mission</h3>
      <p>To provide high-quality, industry-relevant tech traning through hands-on learning, expert mentorship, and
      innovative solutions that bridge the gap between education and industry.</p>
    </div>
    <div class="col-md-6">
      <h3>Our Vision</h3>
      <p>To make tech education accessible and practical, empowering a new generation across Africa and beyond.</p>
    </div>
    </div>
  </section>

  <section id="why-choose-us" class="container py-5">
    <h2 class="text-center mb-4">Why Choose Us?</h2>
    <div class="row">
    <div class="col-md-4 text-center">
      <i class="bi bi-award fs-1"></i>
      <h5>Certified Programs</h5>
      <p>Our courses are industry-recognized and designed to meet global standards.</p>
    </div>
    <div class="col-md-4 text-center">
      <i class="bi bi-person-check fs-1"></i>
      <h5>Personalized Learning</h5>
      <p>We tailor our teaching methods to suit individual learning styles and goals.</p>
    </div>
    <div class="col-md-4 text-center">
      <i class="bi bi-briefcase fs-1"></i>
      <h5>Alumni Community</h5>
      <p>Join a thriving network of successful graduates who support, inspire, and collaborate beyond the classroom.
      </p>
    </div>
    </div>
  </section>

  <section id="our-values" class="container py-5">
    <h2 class="text-center mb-4">Our Core Values</h2>
    <div class="row text-center">
    <div class="col-md-4">
      <div class="p-4 border rounded-3 value">
      <h4>Integrity</h4>
      <p>We uphold the highest standards of honesty and transparency in all our endeavors.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-4 border rounded-3 value">
      <h4>Excellence</h4>
      <p>We strive for excellence in education, ensuring our students achieve their full potential.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-4 border rounded-3 value">
      <h4>Innovation</h4>
      <p>We embrace creativity and innovation to stay ahead in the ever-changing tech landscape.</p>
      </div>
    </div>
    </div>
    <div class="row text-center mt-4">
    <div class="col-md-4">
      <div class="p-4 border rounded-3 value">
      <h4>Collaboration</h4>
      <p>We foster teamwork and partnerships to achieve shared goals and success.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-4 border rounded-3 value">
      <h4>Empowerment</h4>
      <p>We empower individuals with the skills and confidence to excel in their careers.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-4 border rounded-3 value">
      <h4>Community</h4>
      <p>We build a supportive community that values diversity and inclusion.</p>
      </div>
    </div>
    </div>
  </section>


  <section id="meet-our-team" class="container py-5">
    <h2 class="text-center mb-4">Meet Our Team</h2>
    <div class="row">
    <div class="col-md-4 text-center">
      <img src="{{asset('images/team/academy manager.avif')}}" alt="Academy Manager" class="mb-3  tutor-image img-fluid"
      width="150" loading="lazy">
      <h5>Ossai Alexander </h5>
      <p>Academy Manager</p>
    </div>
    <div class="col-md-4 text-center">
      <img src="{{asset('images/team/assistant academy manager.avif')}}" alt="Assistant academy manager"
      class="mb-3 tutor-image img-fluid" width="150" loading="lazy">
      <h5>Nmeribe Sophia</h5>
      <p>Asst. Academy Manager</p>
    </div>
    <div class="col-md-4 text-center">
      <img src="{{asset('images/team/alumni manager.avif')}}" alt="Alumni Manager" class="mb-3  tutor-image" width="150"
      loading="lazy">
      <h5>Shedrack Merit</h5>
      <p>Alumni Manager</p>
    </div>
    </div>
  </section>

  <section id="meet-our-tutors" class="container py-5">
    <h2 class="text-center mb-4">Meet Our Tutors</h2>
    <div class="row">
    <!-- <div class="col-md-4 text-center">
      <img src="../images/tutors-images/cyber security tutor.avif" alt="cyber security tutor"
      class="mb-3 tutor-image" width="150" loading="lazy">
      <h5>Ossai Alexander</h5>
      <p>Cybersecurity Professional</p>
      </div> -->
    <div class="col-md-4 text-center">
      <img src="{{asset('images/tutors-images/web development tutor.avif')}}" alt="web development tutor" class="mb-3
      img-fluid tutor-image" width="150" loading="lazy">
      <h5>Bariyaa Prince</h5>
      <p>Web Development Expert</p>
    </div>
    <div class="col-md-4 text-center">
      <img src="{{asset('images/tutors-images/data analysis tutor.avif')}}" alt="data analysis tutor"
      class="mb-3 img-fluid tutor-image" width="150" loading="lazy">
      <h5>Akar Excel</h5>
      <p>Data Science Specialist</p>
    </div>
    <div class="col-md-4 text-center">
      <img src="{{asset('images/tutors-images/graphics design tutor.png')}}" alt="graphics design tutor"
      class="mb-3 img-fluid tutor-image" width="150" loading="lazy">
      <h5>Taiwo Benedict</h5>
      <p>Graphics Designer</p>
    </div>
    </div>
    <a href="{{route('tutors')}}"><button type="button" class="btn btn-primary tutor-button">See all
      tutors</button></a>
  </section>

  <section id="testimonials" class="container py-5">
    <h2 class="text-center mb-4">What Our Students Say</h2>
    <div class="row">
    <div class="col-md-4">
      <div class="testimonial-card">
      <div class="testimonial-card-top">
        <img src="../images/tutors-images/ai in business tutor.png" alt="" class="testimonial-image">
        <div class="testimonial-details">
        <h6 class="testimonial-name">Sarah Williams</h6>
        <p class="testimonial-role">Data Analyst</p>
        </div>
      </div>
      <p class="testimonial-text">"The Data Analytics course at DITS Academy gave me practical skills and
        confidence to land my first tech job."</p>
      </div>
    </div>
    <div class="col-md-4 mt-5">
      <div class="testimonial-card">
      <div class="testimonial-card-top">
        <img src="../images/tutors-images/web development tutor.png" alt="" class="testimonial-image">
        <div class="testimonial-details">
        <h6 class="testimonial-name">Michael Ojo</h6>
        <p class="testimonial-role">Front-End Developer</p>
        </div>
      </div>
      <p class="testimonial-text">"Excellent instructors and a supportive community. I built real projects and
        improved my portfolio."</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="testimonial-card">
      <div class="testimonial-card-top">
        <img src="../images/tutors-images/Cyber security pro tutor.png" alt="" class="testimonial-image">
        <div class="testimonial-details">
        <h6 class="testimonial-name">Aisha Bello</h6>
        <p class="testimonial-role">Cybersecurity Specialist</p>
        </div>
      </div>
      <p class="testimonial-text">"The cybersecurity program was hands-on and up-to-date. I now feel ready for
        industry challenges."</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="testimonial-card">
      <div class="testimonial-card-top">
        <img src="../images/tutors-images/graphics design tutor.png" alt="" class="testimonial-image">
        <div class="testimonial-details">
        <h6 class="testimonial-name">Emeka Nwosu</h6>
        <p class="testimonial-role">Graphic Designer</p>
        </div>
      </div>
      <p class="testimonial-text">"Creative assignments and expert feedback helped me sharpen my design skills and
        get freelance gigs."</p>
      </div>
    </div>
    <div class="col-md-4 mt-5">
      <div class="testimonial-card">
      <div class="testimonial-card-top">
        <img src="../images/tutors-images/Microsoft essentials tutor.png" alt="" class="testimonial-image">
        <div class="testimonial-details">
        <h6 class="testimonial-name">Grace Eze</h6>
        <p class="testimonial-role">Office Administrator</p>
        </div>
      </div>
      <p class="testimonial-text">"Learning Microsoft Office at DITS Academy made my daily work much easier and
        more efficient."</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="testimonial-card">
      <div class="testimonial-card-top">
        <img src="../images/tutors-images/data analysis tutor.png" alt="" class="testimonial-image">
        <div class="testimonial-details">
        <h6 class="testimonial-name">Samuel Adeyemi</h6>
        <p class="testimonial-role">Software Engineer</p>
        </div>
      </div>
      <p class="testimonial-text">"I recommend DITS Academy to anyone starting out in tech. The mentorship and
        resources are top-notch."</p>
      </div>
    </div>
    </div>
    <a href="{{route('testimonials')}}"><button class="btn btn-primary">See all</button></a>
  </section>

  <section id="call-to-action" class="text-center py-5 bg-primary text-white">
    <h2>Ready to Start Your Tech Journey?</h2>
    <p>Join DITS Academy today and take the first step toward a brighter future.</p>
    <a href="{{route('contact')}}" class="btn btn-light btn-lg">Contact Us</a>
  </section>

  <section id="faqs" class="container py-5">
    <h2 class="text-center mb-4">Frequently Asked Questions</h2>
    <div class="accordion" id="faqAccordion">
    <div class="accordion-item">
      <h2 class="accordion-header" id="faq1">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1"
        aria-expanded="true" aria-controls="collapse1">
        What courses do you offer?
      </button>
      </h2>
      <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1"
      data-bs-parent="#faqAccordion">
      <div class="accordion-body">
        We offer courses in Web Development, Data Science, Cybersecurity, UI/UX Design, and more.
      </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="faq2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2"
        aria-expanded="false" aria-controls="collapse2">
        Do you provide certificates?
      </button>
      </h2>
      <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
      <div class="accordion-body">
        Yes, we provide industry-recognized certificates upon course completion.
      </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="faq3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3"
        aria-expanded="false" aria-controls="collapse3">
        Are the courses beginner-friendly?
      </button>
      </h2>
      <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
      <div class="accordion-body">
        Yes, our courses are designed for all skill levels, including beginners.
      </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="faq4">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4"
        aria-expanded="false" aria-controls="collapse4">
        Do you offer job placement assistance?
      </button>
      </h2>
      <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
      <div class="accordion-body">
        Yes, we provide career guidance and job placement assistance to help you succeed.
      </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="faq5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5"
        aria-expanded="false" aria-controls="collapse5">
        How can I enroll in a course?
      </button>
      </h2>
      <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="faq5" data-bs-parent="#faqAccordion">
      <div class="accordion-body">
        You can enroll by visiting our website, selecting a course, and completing the registration process.
      </div>
      </div>
    </div>
    </div>
    <a href="{{route('faq')}}"><button class="btn btn-primary">See all</button></a>
  </section>


  <section id="contact-us" class="container py-5">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row">
    <div class="col-md-5">
      <h5>Get in Touch</h5>
      <p>If you have any questions or need further information, feel free to reach out to us. We're here to help!
      </p>
      <ul class="list-unstyled">
      <li><i class="bi bi-envelope"></i> Email: contact@decentitservice.com</li>
      <li><i class="bi bi-telephone"></i> Phone: +234 916 262 4051, +234 904 676 8832</li>
      <li><i class="bi bi-geo-alt"></i> Address: Km 25, Suite 14, DDS Shopping Mall, Airport Road, Port Harcourt,
        Nigeria</li>
      </ul>
    </div>
    <div class="col-md-7">
      <h5>Send Us a Message</h5>
      <form>
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Your Name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Your Email">
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" rows="6" placeholder="Your Message"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Send Message</button>
      </form>
    </div>
    </div>
  </section>

  <script>
    // Count up animation for achievement numbers
    function animateCountUp(element, target, duration = 1500) {
    let start = 0;
    let startTime = null;
    target = parseInt(target, 10);

    function updateCount(currentTime) {
      if (!startTime) startTime = currentTime;
      const progress = Math.min((currentTime - startTime) / duration, 1);
      const value = Math.floor(progress * (target - start) + start);
      element.textContent = value + "+";
      if (progress < 1) {
      requestAnimationFrame(updateCount);
      } else {
      element.textContent = target + "+";
      element.classList.add('bounce');
      setTimeout(() => element.classList.remove('bounce'), 700);
      }
    }
    requestAnimationFrame(updateCount);
    }

    function handleCountUpOnScroll() {
    const numbers = document.querySelectorAll('.achievement-number');
    let triggered = false;

    function isInViewport(el) {
      const rect = el.getBoundingClientRect();
      return (
      rect.top < window.innerHeight && rect.bottom > 0
      );
    }

    function triggerCountUp() {
      if (triggered) return;
      const section = document.getElementById('achievement-section');
      if (isInViewport(section)) {
      numbers.forEach(num => {
        animateCountUp(num, num.getAttribute('data-target'));
      });
      triggered = true;
      window.removeEventListener('scroll', triggerCountUp);
      }
    }

    window.addEventListener('scroll', triggerCountUp);
    // Also trigger on load in case already in view
    triggerCountUp();
    }

    document.addEventListener('DOMContentLoaded', handleCountUpOnScroll);
  </script>
@endsection