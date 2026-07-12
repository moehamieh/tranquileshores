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
                        <div class="therapy-card shadow-sm" style="background-color: {{ $service->bg_color ?? '#F4F4EF' }}">
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

    <section class="areas-of-concern section-padding" data-aos="fade-up">
        <div class="container container-lg">
            <h2 class="section-title mb-4">Areas of Concern We Support</h2>
            <p class="text-muted mb-4">You do not need to know which type of therapy you need before reaching out. We can help you explore the right starting point.</p>
            <p class="fw-bold mb-3">Our areas of support include:</p>
            <p class="mb-5 text-muted">
                Trauma and PTSD · Complex trauma · Attachment wounds · Anxiety · Depression · Grief and loss · Burnout · OCD · Borderline personality disorder · Dissociation · Anger · Self-esteem · Co-dependency · People-pleasing · Intimate partner violence · Domestic abuse · Disordered eating · LGBTQ+ concerns · Gender dysphoria · Relationship difficulties · Life transitions · Sport and performance-related stress
            </p>

            <h2 class="section-title mb-4">Our Therapeutic Approaches</h2>
            <p class="text-muted mb-4">Therapy is personalized rather than limited to one method. Depending on your needs, your therapist may draw from:</p>
            <ul class="mb-4 text-muted">
                <li>Trauma-Informed Stabilization Treatment</li>
                <li>Eye Movement Desensitization and Reprocessing</li>
                <li>Internal Family Systems-informed parts work</li>
                <li>Emotionally Focused Couples Therapy</li>
                <li>Attachment-based therapy</li>
                <li>Psychoeducation</li>
                <li>Mindfulness and nervous-system regulation</li>
                <li>Polyvagal-informed exercises</li>
            </ul>
            <p class="mb-5 text-muted">You do not have to understand these approaches before beginning. Your therapist will explain what may be helpful, answer your questions, and ensure that therapy moves at a pace that feels safe and collaborative.</p>

            <h2 class="section-title mb-4">Not Sure Where to Begin?</h2>
            <p class="mb-4">You do not need to have everything figured out before reaching out. We can help you understand your options and find the support that feels right for you.</p>
            <a href="{{ route('contact-us') }}" class="btn-book-teal">Book a Consultation &rarr;</a>
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
                            <button class="btn-book-promo" onclick="window.location.href='{{route('alltherapists')}}'">
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
