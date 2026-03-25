@extends('front-layout.app')
@section('title', 'Contact Us')
@section('content')
<section class="contact-hero-section section-padding-medium" data-aos="fade-up" style="background-color: #F2F6F5">
    <div class="container container-lg">
        <div class="bg-white rounded-5 shadow-sm overflow-hidden">
            <div class="row g-0 align-items-stretch">
                <div class="col-lg-5 p-5 d-flex flex-column justify-content-center bg-white" style="border-radius: 40px 0 0 40px;">
                    <div class="contact-hero-content">
                        <span class="serif-font italic-serif mb-3 d-block" style="color: #4D9595; font-size: 1.5rem;">Contact Us</span>
                        <h1 class="serif-font mb-4" style="font-size: 2.5rem; color: #2C4A4A; line-height: 1.1;">Easily Online, by Phone or by Dropping In</h1>
                        <p class="text-muted mb-5" style="max-width: 400px; line-height: 1.6; font-size: 1rem">Start your path to psychological wellness with our thuroughly selected specialists.</p>

                        <div class="row g-4 mb-5">
                            @foreach($therapists as $therapist)
                                @if($therapist->phone)
                                    <div class="col-sm-12">
                                        <div class="call-us-info">
                                            <span class="text-uppercase fw-bold text-muted d-block mb-1" style="font-size: 0.7rem; letter-spacing: 1px;">Call {{$therapist->name}}:</span>
                                            <a href="tel:{{$therapist->phone}}" class="fw-bold text-decoration-none" style="font-size: 1.3rem; color: #2C4A4A;">{{$therapist->phone}}</a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                        <div class="text-center mt-5">
                            <button class="btn-book mx-auto" onclick="window.location.href='{{route('alltherapists')}}'">
                                <span class="btn-text" style="font-weight: bold; font-size: 16px; padding: 0.8em 1.5em;">Book a Session</span>
                                <span class="btn-arrow">&rarr;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-hero-image h-100 position-relative">
                        <img src="{{asset('front/images/80-contacts-1.webp')}}" alt="Contact Us" class="w-100 h-100" style="object-fit: cover; min-height: 450px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
