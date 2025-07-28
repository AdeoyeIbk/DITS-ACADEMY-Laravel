@extends('layouts.app')

@section('styles')
  <link rel="stylesheet" href="{{asset('css/home-page.css')}}">
  <link rel="stylesheet" href="{{asset('css/pages.css')}}">
  <link rel="stylesheet" href="{{asset('css/about-page.css')}}">
@endsection



@section('content')
  <main class="py-5">
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
      <div class="accordion-item">
      <h2 class="accordion-header" id="faq6">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6"
        aria-expanded="false" aria-controls="collapse6">
        What is the duration of your courses?
        </button>
      </h2>
      <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="faq6" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
        Course durations vary, typically ranging from 4 weeks to 6 months depending on the program.
        </div>
      </div>
      </div>
      <div class="accordion-item">
      <h2 class="accordion-header" id="faq7">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7"
        aria-expanded="false" aria-controls="collapse7">
        Are your classes online or in-person?
        </button>
      </h2>
      <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="faq7" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
        We offer both online and in-person classes to accommodate different learning preferences.
        </div>
      </div>
      </div>
      <div class="accordion-item">
      <h2 class="accordion-header" id="faq8">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8"
        aria-expanded="false" aria-controls="collapse8">
        What payment methods do you accept?
        </button>
      </h2>
      <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="faq8" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
        We accept payments via bank transfer, credit/debit cards, and online payment platforms.
        </div>
      </div>
      </div>
      <div class="accordion-item">
      <h2 class="accordion-header" id="faq9">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9"
        aria-expanded="false" aria-controls="collapse9">
        Can I get a refund if I am not satisfied?
        </button>
      </h2>
      <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="faq9" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
        Yes, we have a refund policy. Please refer to our terms and conditions for details.
        </div>
      </div>
      </div>
      <div class="accordion-item">
      <h2 class="accordion-header" id="faq10">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
        Who can I contact for more information?
        </button>
      </h2>
      <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="faq10" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
        You can contact us via email at contact@decentitservice.com or call us at +234 916 262 4051.
        </div>
      </div>
      </div>
      <div class="accordion-item">
      <h2 class="accordion-header" id="faq11">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
        Do you offer group discounts?
        </button>
      </h2>
      <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="faq11" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
        Yes, we offer group discounts for organizations and teams. Please contact us for more details.
        </div>
      </div>
      </div>
      <div class="accordion-item">
      <h2 class="accordion-header" id="faq12">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
        Can I access course materials after completion?
        </button>
      </h2>
      <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="faq12" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
        Yes, you will have continued access to course materials even after completing your course.
        </div>
      </div>
      </div>
      <div class="accordion-item">
      <h2 class="accordion-header" id="faq13">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
        Are there any prerequisites for enrolling?
        </button>
      </h2>
      <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="faq13" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
        Most courses do not require prerequisites, but some advanced courses may recommend prior knowledge.
        </div>
      </div>
      </div>
      <div class="accordion-item">
      <h2 class="accordion-header" id="faq14">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
        Do you offer weekend or evening classes?
        </button>
      </h2>
      <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="faq14" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
        Yes, we offer flexible schedules including weekend and evening classes.
        </div>
      </div>
      </div>
      <div class="accordion-item">
      <h2 class="accordion-header" id="faq15">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
        Is there a community or forum for students?
        </button>
      </h2>
      <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="faq15" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
        Yes, students can join our online community to interact, collaborate, and get support.
        </div>
      </div>
      </div>
      <div class="accordion-item">
      <h2 class="accordion-header" id="faq16">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
        Can I switch courses after enrolling?
        </button>
      </h2>
      <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="faq16" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
        Switching courses is possible within the first week of enrollment. Please contact support for assistance.
        </div>
      </div>
      </div>
      <div class="accordion-item">
      <h2 class="accordion-header" id="faq17">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
        Are there installment payment options?
        </button>
      </h2>
      <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="faq17" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
        Yes, we offer installment payment plans for select courses. Contact us for more information.
        </div>
      </div>
      </div>
      <div class="accordion-item">
      <h2 class="accordion-header" id="faq18">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
        Will I get hands-on project experience?
        </button>
      </h2>
      <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="faq18" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
        Absolutely! Our courses include practical projects to help you gain real-world experience.
        </div>
      </div>
      </div>
      <div class="accordion-item">
      <h2 class="accordion-header" id="faq19">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
        Can I get one-on-one mentoring?
        </button>
      </h2>
      <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="faq19" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
        Yes, one-on-one mentoring is available for students who need personalized guidance.
        </div>
      </div>
      </div>
      <div class="accordion-item">
      <h2 class="accordion-header" id="faq20">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
        How do I get technical support during my course?
        </button>
      </h2>
      <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="faq20" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
        You can reach our technical support team via email or live chat for any course-related issues.
        </div>
      </div>
      </div>
      <div class="accordion-item">
      <h2 class="accordion-header" id="faq21">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
        Do you provide corporate training solutions?
        </button>
      </h2>
      <div id="collapse21" class="accordion-collapse collapse" aria-labelledby="faq21" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
        Yes, we offer customized corporate training programs for organizations and businesses.
        </div>
      </div>
      </div>
    </div>
    </section>
  </main>
@endsection