@extends('layouts.app')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/home-page.css') }}">
  <link rel="stylesheet" href="{{ asset('css/pages.css') }}">
  <link rel="stylesheet" href="{{ asset('css/testimonials.css') }}">
@endsection

@section('content')
  <main>
    <section id="testimonials" class="container py-5">
    <h2 class="text-center mb-4">What Our Students Say</h2>
    <div class="row">
      @foreach ($testimonials as $testimonial)
      {{-- This line applies mt-5 to every second card --}}
      <div class="col-md-4 {{ $loop->iteration % 2 == 0 ? 'mt-5' : '' }}">
      <div class="testimonial-card">
      <div class="testimonial-card-top">
      <img src="{{ asset($testimonial['image']) }}" alt="{{ $testimonial['alt'] }}" class="testimonial-image">
      <div class="testimonial-details">
        <h6 class="testimonial-name">{{ $testimonial['name'] }}</h6>
        <p class="testimonial-role">{{ $testimonial['role'] }}</p>
      </div>
      </div>
      <p class="testimonial-text">"{{ $testimonial['text'] }}"</p>
      </div>
      </div>
    @endforeach
    </div>
    </section>
  </main>
@endsection