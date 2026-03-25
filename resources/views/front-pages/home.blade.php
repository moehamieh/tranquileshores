@extends('front-layout.app')
@section('title', 'Home')
@section('content')

   @php
       $slider = $sliders->first();
       $title = $slider->title ?? 'Your Path to Psychological Wellness Starts Here';
    // Split into words
    $words = explode(' ', $title);
    $firstPart = implode(' ', array_slice($words, 0, 2));
    $restPart = implode(' ', array_slice($words, 2));
   @endphp
<div>

    <div class="hero-section" >
        <div class="hero-card position-relative" style="   background: url('{{asset($slider->image_url)}}') no-repeat center;">
            <div class="container-fluid px-lg-0"  >
                <div class="row justify-content-start" >
                    <div class="col-lg-6 hero-content-left">
                        <div class="hero-text-group">
                            <h1 class="hero-title mb-3"><span>{{$firstPart}}</span> {{$restPart}}</h1>
                            <span class="hero-subtitle">{!! $slider->description ?? '' !!}</span>
                        </div>

                        <div class="d-flex gap-3 mb-5 flex-wrap hero-btn-group"  style="padding-top: 15px">
                            <button class="btn-book">
                                <span class="btn-text" style="font-weight: bold; font-size: 16px">Book a Session</span>
                                <span class="btn-arrow">&rarr;</span>
                            </button>
                            <button class="btn-how" style="font-size: 16px">Learn How It Works &rarr;</button>
                        </div>

                        <!-- Mobile image added for mobile layout -->
{{--                        @if($slider && $slider->image)--}}
{{--                            <img src="{{ asset('storage/' .$slider->image)  }}" class="hero-mobile-img d-none" alt="{{$slider->title}}">--}}
{{--                        @endif--}}

                        <div class="hero-tags-container d-flex flex-wrap gap-2" style="padding-top: 2em">
                            @foreach($services as $service)
                                <span class="hero-tag"><img src="{{asset('front/images/star.png')}}" class="tag-icon me-1" alt="Star"> {{ $service->title }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="social-float d-none d-lg-flex">
                <a href="#" class="social-circle"><i class="bi bi-facebook"></i></a>
                <a href="#" class="social-circle"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="social-circle"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>

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


    <section class="section-works section-padding" data-aos="fade-up">
        <div class="container container-lg">
            <h2 class="display-4 serif mb-3">How <span class="italic-serif text-teal">Online Therapy</span> Works</h2>
            <p class="text-muted mb-5 col-md-8 col-lg-6 mx-auto">Compassionate therapy for every stage of life.</p>

            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="image-works-container">
                        <img src="{{asset('front/images/80-home-2.webp')}}" alt="Online therapy session" class="w-100">
                        <div class="danger-card">
                            <h5 class="serif mb-2">Are You in Danger?</h5>
                            <p class="small mb-3" style="opacity: 0.9;">Call 988 or use this service to get immediate help.</p>
                            <button class="btn-request">Request a Call <i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    @foreach($how_it_works as $step)
                        <div class="step-card shadow-sm">
                            <div class="step-number">{{ $step->step_number }}</div>
                            <div class="step-content"><h4>{{ $step->title }} &rarr;</h4><p>{{ $step->description }}</p></div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row" style="text-align: center; margin-top: 20px;">
                <div class="col-lg-12">
                    <button class="btn-book">
                        <span class="btn-text" style="font-weight: bold; font-size: 16px">Book a Session</span>
                        <span class="btn-arrow">&rarr;</span>
                    </button>
                </div>

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

    <section class="licensed-therapist section-padding" data-aos="fade-up">
        <div class="container container-lg text-center">
            <span class="badge-who mb-3">Our Team</span>
            <h2 class="section-title mb-5">Meet Our <span>Licensed Therapists</span></h2>

            <div class="row g-4 text-start">
                @foreach($therapists as $therapist)
                    <div class="col-md-6 col-lg-4">
                        <div class="therapist-card shadow-sm h-100 d-flex flex-column">
                            <div class="therapist-image-wrapper">
                                <img src="{{ asset($therapist->image_url) }}" alt="{{ $therapist->name }}">
{{--                                <span class="badge-price">from ${{ number_format($therapist->min_price, 0) }}/h</span>--}}
{{--                                <span class="badge-availability">Available this week</span>--}}
                                <div class="therapist-tags">
                                    @foreach($therapist->tags ?? [] as $tag)
                                        <span class="tag-item">{{ $tag }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="therapist-info d-flex flex-column flex-grow-1">
                                <h3 class="therapist-name">{{ $therapist->name }}</h3>
                                <p class="therapist-role">{{ strtoupper($therapist->role) }}</p>

                                <a href="{{ route('therapist-profile', $therapist->slug) }}" class="view-profile">VIEW PROFILE <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="flexible-prices section-padding" data-aos="fade-up">
        <div class="container container-lg">
            <div class="d-flex flex-wrap justify-content-center text-center mb-5">
                <div>
                    <span class="badge-who mb-3">Our Prices</span>

                    <h2 class="section-title mb-2"><span>Flexible</span> Therapy Plans</h2>
                    <p class="text-muted">Choose the support that fits your needs and lifestyle.</p>
                </div>
            </div>

            <div class="row g-4">
                @foreach($plans as $plan)
                    <div class="col-lg-4">
                        <div class="price-card h-100">
                            <div class="d-flex justify-content-between align-items-start mb-4">
                                <div>
                                    <span class="plan-label text-uppercase">{{ $plan->title }}</span>
                                    <div class="plan-price">${{ number_format($plan->price, 0) }} <span>/ {{ strtoupper($plan->unit) }}</span></div>
                                </div>
                                <i class="bi {{ $plan->icon }} plan-logo"></i>
                            </div>
                            <p class="plan-desc">{{ $plan->description }}</p>
                            <ul class="plan-features">
                                @foreach($plan->features ?? [] as $feature)
                                    <li><i class="bi bi-check2"></i> {{ $feature }}</li>
                                @endforeach
                            </ul>
                            <button class="btn-plan-link mt-4">Book Now <i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <div class="pricing-info-box p-4 rounded-4 bg-light border text-center">
                        <div class="row align-items-center">
                            <div class="col-md-6 border-end-md">
                                <h5 class="fw-bold mb-2">Sliding Scale</h5>
                                <p class="text-muted small mb-0">For clients who do not have insurance or cannot afford the full fee – please inquire during your consultation call to see if there are any open spots.</p>
                            </div>
                            <div class="col-md-6 mt-3 mt-md-0">
                                <h5 class="fw-bold mb-2">Cancellation Policy</h5>
                                <p class="text-muted small mb-0">Your appointment has been reserved for you. Please give <strong>24 hours notice</strong> to cancel an appointment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-blogs section-padding" data-aos="fade-up">
        <div class="container container-lg text-center">
            <span class="badge-who mb-3">Our Blog</span>
            <h2 class="section-title mb-3">Insights & Mental Health <span>Resources</span></h2>
            <p class="text-muted mb-5">Practical guidance, emotional insights, and support for everyday life.</p>

            <div class="row g-4">
                @foreach($posts as $post)
                    <div class="col-md-6 col-lg-4 text-start">
                        <div class="blog-card shadow-sm">
                            <div class="blog-image-wrapper">
                                <img src="{{ asset($post->main_image_url) }}" alt="{{ $post->title }}">
                                <span class="blog-category-badge">{{ $post->category->name }}</span>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-card-title">{{ $post->title }}</h3>
                                <a href="{{ route('blog-details', $post->slug) }}" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


            <div class="row justify-content-center mt-5" data-aos="fade-up">
                <div class="col-auto">
                    <a href="#" class="btn-book-teal">
                        <span class="btn-text">Book a Session</span>
                        <span class="btn-arrow">&rarr;</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section class="contact-us-section section-padding" data-aos="fade-right">
        <div class="container container-lg">
            <div class="contact-us-section-wrapper shadow-sm">
                <div class="row g-0 align-items-stretch">
                    <div class="col-lg-5">
                        <div class="contact-us-section-img">
                            <img src="{{asset('front/images/80-home-6.webp')}}" alt="Healing Journey">
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="contact-us-section-content">
                            <h2 class="contact-us-section-title">Ready to Start Your <span>Healing Journey?</span></h2>

                            <form class="contact-us-section-form mt-4">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <input type="text" class="contact-us-section-input" placeholder="Your Name">
                                    </div>

                                    <div class="col-md-6">
                                        <input type="tel" class="contact-us-section-input" placeholder="Your Phone">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="contact-us-section-input" placeholder="Your Email">
                                    </div>

                                    <div class="col-12">
                                        <select class="contact-us-section-input contact-us-section-select">
                                            <option selected disabled>Choose a Service</option>
                                            @foreach($services as $service)
                                                <option>{{ $service->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="col-12">
                                        <textarea class="contact-us-section-input contact-us-section-textarea" placeholder="Your Message" rows="5"></textarea>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <button type="submit" class="contact-us-section-btn">Book an Appointment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
