<!-- footer section -->
<section id="footer-section">
  <div class="footer-overlay"></div>
  <div class="container fade-element">
    <footer class="pt-5">
      <div class="row">
        <div class="col-12 col-lg-4 mb-3 col-sm-12 newsletter">
          <img src="{{asset('images/Logos/DITS Academy Logo white.webp')}}" alt="DITS academy logo" height="65"
            width="150">
          <p class="newsletter-text text-white">Stay ahead in the tech world! Subscribe to our newsletter for
            exclusive
            insights,
            updates on our latest courses, and tips to boost your tech career. Don't miss out on shaping your
            future
            with us!</p>
          <div class=" col-6 col-md-5 md-1 mb-3">
            <form class="newsletter-form">
              <h5 class="newsletter-heading">Subscribe to our newsletter</h5>
              <div class="d-flex flex-column flex-sm-row w-60 gap-2 form-input">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                <button class="btn btn-primary" type="button">Subscribe</button>
              </div>
            </form>
          </div>
        </div>

        <div class="col-6 col-lg-4 mb-5 useful-links">
          <h5>Useful Links</h5>
          <ul class="nav flex-column gap-4">
            <li class="nav-item mb-2"><a href="https://decentitservice.com/"
                class="nav-link p-0 text-body-primary icon-link-hover" target="_blank"> <svg
                  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                  class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                </svg>DITS Services</a></li>
            <li class="nav-item mb-2"><a href="{{ route('about') }}"
                class="nav-link p-0 text-body-primary  icon-link-hover"> <svg xmlns="http://www.w3.org/2000/svg"
                  width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                </svg>About Us</a></li>
            <li class="nav-item mb-2"><a href="{{route('courses')}}"
                class="nav-link p-0 text-body-primary  icon-link-hover"> <svg xmlns="http://www.w3.org/2000/svg"
                  width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                </svg>Courses</a></li>
            <li class="nav-item mb-2"><a href="{{ route('gallery') }}"
                class="nav-link p-0 text-body-primary  icon-link-hover"> <svg xmlns="http://www.w3.org/2000/svg"
                  width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                </svg>Gallery</a></li>
            <!-- <li class="nav-item mb-2"><a href="src/pages/tutors.html"
                  class="nav-link p-0 text-body-primary  icon-link-hover"> <svg xmlns="http://www.w3.org/2000/svg"
                    width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                  </svg>Tutors</a></li> -->
            <li class="nav-item mb-2"><a href="{{ route('tutors') }}"
                class="nav-link p-0 text-body-primary icon-link-hover"><svg xmlns="http://www.w3.org/2000/svg"
                  width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                </svg>Contact Us</a></li>
            <li class="nav-item mb-2"><a href="{{ route('become-a-student') }}"
                class="nav-link p-0 text-body-primary  icon-link-hover"> <svg xmlns="http://www.w3.org/2000/svg"
                  width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                </svg>Become a Student</a></li>
          </ul>

        </div>

        <!-- <div class="col-6 col-lg-2 mb-3 resources">
            <h5>Resources</h5>
            <ul class="nav flex-column gap-4">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-primary icon-link-hover"><svg
                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                  </svg>Tech Consultancy</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-primary icon-link-hover"><svg
                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                  </svg>Career</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-primary icon-link-hover"><svg
                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                  </svg>Tech Projects</a></li>
            </ul>
          </div> -->

        <div class="col-6 col-lg-4 mb-3 contact-information">
          <h5>Contact Information</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2 nav-link p-0 text-body-primary"><i
                class="bi bi-envelope contact-information-icon"></i>
              contact@decentitservice.com</li>
            <li class="nav-item mb-2 nav-link p-0 text-body-primary"><i
                class="bi bi-geo-alt contact-information-icon"></i>Km 25, Suite 14, DDS Shopping
              Mall, Airport Road, Port Harcourt, Nigeria</li>
            <li class="nav-item mb-2 nav-link p-0 text-body-primary"><i
                class="bi bi-geo-alt contact-information-icon"></i>8 The Green, Ste A, Kent,
              Dover, Delaware, 19901</li>
            <li class="nav-item mb-2 nav-link p-0 text-body-primary"><i
                class="bi bi-telephone contact-information-icon"></i>+234 916 262 4051, +234 904
              676 8832</li>
            <li class="socials-container">
              <a href="#" class="social"><i class="bi bi-facebook"></i></a>
              <a href="#" class="social"><i class="bi bi-youtube"></i></a>
              <a href="https://www.instagram.com/ditsacademy/" class="social"><i class="bi bi-instagram"></i></a>
              <a href="#" class="social"><i class="bi bi-twitter-x"></i></a>
              <a href="#" class="social"><i class="bi bi-linkedin"></i></a>
            </li>
          </ul>
        </div>


      </div>

      <div class="d-flex flex-column flex-sm-row justify-content-between py-4">
        <p id="copyright">&copy; {{ now()->year }} DECENT IT ACADEMY. All rights reserved.</p>
        <div class="terms-and-privacy-policy"><a href="{{route('terms-and-conditions')}}" class="policies">Terms and
            conditions</a> <span class="vertical-rule">|</span> <a href="{{route('privacy-policy')}}"
            class="policies">Privacy Policy.</a></div>
      </div>
    </footer>
  </div>
</section>


<script>
  @yield('scripts')
  // page-specific scripts
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>