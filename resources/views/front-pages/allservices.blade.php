@extends('front-layout.app')
@section('title', 'All Services')
@section('content')

    <section class="section-who section-padding" data-aos="fade-up">
        <div class="container container-lg">
            <span class="badge-who">Our Services</span>
            <h2 class="section-title">Support Tailored <span>to Your Needs</span></h2>
            <p class="text-muted mb-5 col-md-8 col-lg-6 mx-auto">Compassionate therapy for every stage of life.</p>

            <div class="row g-4">
                @foreach($services as $service)
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="therapy-card shadow-sm" style="background-color: {{ $service->bg_color ?? '#ffffff' }}">
                            <img src="{{ asset($service->image_url ?? 'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=600') }}" class="card-img-top" alt="{{ $service->title }}">
                            <div class="card-body-custom">
                                <h3 class="card-title-custom">{{ $service->title }}</h3>
                                <p class="card-text-custom">{{ $service->subtitle ?? $service->description }}</p>
                                <a href="{{ route('service-details', $service->slug) }}" class="btn-learn">Learn More &rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="promo-section" data-aos="fade-up">
        <div class="promo-card position-relative">
            <div class="container-fluid px-lg-0">
                <div class="row justify-content-start">
                    <div class="col-lg-6 promo-content">
                        <div class="hero-text-group promo-text-box">
                            <h4 class="welcome-label mb-4">Welcome to Online Therapy</h4>
                            <h2 class="hero-title mb-4">Online Therapy provides professional psychological support through secure and accessible online sessions.</h2>
                            <button class="btn-book-promo">
                                <span class="btn-text">Book your session</span>
                                <span class="btn-arrow">&rarr;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
