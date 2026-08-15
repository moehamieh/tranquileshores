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
        <div class="hero-card position-relative" style="background-image: url('{{asset($slider->image_url)}}'); background-repeat: no-repeat; background-position: center; background-size: cover;">
            <div class="container-fluid px-lg-0"  >
                <div class="row justify-content-start" >
                    <div class="col-lg-6 hero-content-left">
                        <div class="hero-text-group">
                            <h1 class="hero-title mb-3" style="color: #1b3648;">{{$firstPart}} {{$restPart}}</h1>
                            <span class="hero-subtitle">{!! $slider->description ?? '' !!}</span>
                        </div>

                        <div class="d-flex gap-3 mb-5 flex-wrap hero-btn-group"  style="padding-top: 15px">
                            <button class="btn-book" onclick="window.location.href='{{route('alltherapists')}}'">
                                <span class="btn-text" style="font-weight: bold; font-size: 16px">Book a Session</span>
                                <span class="btn-arrow">&rarr;</span>
                            </button>
                            <!-- <button class="btn-how" style="font-size: 16px" onclick="window.location.href='{{route('home-page')}}#howitwork'">Learn How It Works &rarr;</button> -->
                        </div>

                        <!-- Mobile image added for mobile layout -->
{{--                        @if($slider && $slider->image)--}}
{{--                            <img src="{{ asset('storage/' .$slider->image)  }}" class="hero-mobile-img d-none" alt="{{$slider->title}}">--}}
{{--                        @endif--}}

                        <div class="hero-tags-container d-flex flex-wrap gap-2" style="padding-top: 2em">
                            @foreach($services as $service)
                                <a href="{{ route('service-details', $service->slug) }}" class="hero-tag-link">
                                <span class="hero-tag"><img src="{{asset('front/images/star.png')}}" class="tag-icon me-1" alt="Star"> {{ $service->title }}</span>
                                </a>
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

    <!-- Section: Intro / Brand Message -->
{{--    <section class="section-intro section-padding" data-aos="fade-up">--}}
{{--        <div class="container container-lg">--}}
{{--            <div class="row justify-content-center text-center">--}}
{{--                <div class="col-lg-10">--}}
{{--                    <span class="badge-who mb-3">--}}
{{--                                                <p class="lead mb-4 fw-bold text-teal">At Tranquil Shores, you do not have to navigate it alone.</p>--}}

{{--                    </span>--}}
{{--                    <h2 class="section-title mb-4">Life can feel heavy sometimes. You may be carrying anxiety, grief, relationship pain, trauma, burnout, or simply the quiet exhaustion of trying to hold everything together.</h2>--}}

{{--                    <div class="intro-body-text">--}}

{{--                        <p class="mb-4">We are a psychotherapy practice rooted in compassion, trust, and real human connection. Our approach is warm, grounded, and personalized because healing is never one-size-fits-all. We meet you where you are, move at your pace, and help you find your way toward greater calm, clarity, and emotional strength.</p>--}}

{{--                        <div class="intro-footer-message mt-5 p-4 rounded-4 shadow-sm" style="background-color: var(--warm-white-100); border: 1px italic var(--olive-200);">--}}
{{--                            <h4 class="serif italic mb-0 text-teal">This is more than a therapy clinic.</h4>--}}
{{--                            <p class="h5 mt-2 mb-0">It is a space to pause. A space to exhale. A space to begin again.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="section-who section-padding" data-aos="fade-up">
        <div class="container container-lg">
            <h2 class="display-4 serif mb-3"><span class=" text-teal"> At Tranquil Shores, we invite you to come as you are.</span></h2>
            <p class="text-muted mb-4 col-md-8 mx-auto" style="font-size: 1.25rem;">This is more than a therapy clinic. It is a space to pause. A space to exhale. A space to begin again.</p>
            <p class="text-muted mb-5 col-md-8 col-lg-6 mx-auto" style="padding-top: 10px;" >
                 <span class="badge-who mb-3" style="font-size: 1.5em; font-weight: normal;">EXPLORE OUR SERVICES</span>
            </p>

            <div class="row g-4">
                @foreach($services as $service)
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="therapy-card shadow-sm" style="background-color: {{ $service->bg_color ?? '#F4F4EF' }}">
                            <img src="{{ asset($service->image_url ?? 'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=600') }}" class="card-img-top" alt="{{ $service->title }}">
                            <div class="card-body-custom">
                                <h3 class="card-title-custom">{{ $service->title }}</h3>
                                <p class="card-text-custom">{!! $service->subtitle ?? $service->description !!}</p>
                                <a href="{{ route('service-details', $service->slug) }}" class="btn-learn">Learn More &rarr;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="section-works section-padding" data-aos="fade-up" id="howitwork">
        <div class="container container-lg">
            <h2 class="display-4 serif mb-3"><span class="text-teal">Therapy, Made Simple</span> </h2>
            <p class="text-muted mb-5 col-md-8 col-lg-6 mx-auto">Your path toward healing and feeling better starts here.</p>

            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="image-works-container">
                        <img src="{{asset('front/images/emergency2.jpg')}}" alt="Online therapy session" class="w-100">
                        <div class="danger-card">
                            <h5 class="serif mb-2">Are You in Danger?</h5>
                            <p class="small mb-3" style="opacity: 0.9;">Call 911 or use this service to get immediate help.</p>
                            <button class="btn-request">Request a Call <i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    @foreach($how_it_works as $step)
                        <div class="step-card shadow-sm">
                            <div class="step-number">{{ $step->step_number }}</div>
                            <div class="step-content"><h4>{{ $step->title }} &rarr;</h4>{!! $step->description !!}</div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row" style="text-align: center; margin-top: 20px;">
                <div class="col-lg-12">
                    <button class="btn-book" onclick="window.location.href='{{route('alltherapists')}}'">
                        <span class="btn-text" style="font-weight: bold; font-size: 16px">Book a Session</span>
                        <span class="btn-arrow">&rarr;</span>
                    </button>
                </div>

            </div>
        </div>
    </section>

    <!-- <div class="promo-section" data-aos="fade-up">
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
    </div> -->

    <section class="licensed-therapist section-padding" data-aos="fade-up">
        <div class="container container-lg text-center">
            <span class="badge-who mb-3">Our Team</span>
            <h2 class="display-4 serif mb-5"> <span class=" text-teal">Meet Our Licensed Therapists</span></h2>

            <div class="row g-4 text-start">
                @foreach($therapists as $therapist)
                    <div class="col-md-6 col-lg-4">
                        <div class="therapist-card shadow-sm h-100 d-flex flex-column">
                            <div class="therapist-image-wrapper">
                                <img src="{{ asset($therapist->image_url) }}" alt="{{ $therapist->name }}">

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
                            <div class="row  mb-2" data-aos="fade-up">
                                <div class="col-auto">
                                    <a href="{{$therapist->booking_url}}" class="btn-book-teal" target="_blank">
                                        <span class="btn-text">Book with {{$therapist->name}}</span>
                                    </a>
                                </div>
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
                <div >
                    <span class="badge-who mb-6"  >Our Prices</span>
<div style="margin-top: 2em;">
                    <h2 class="display-4 serif mb-2"><span class="italic-serif text-teal" >Flexible</span> Therapy Plans</h2>
</div>
                    <p class="text-muted">Choose the support that fits your needs and lifestyle.</p>
                </div>
            </div>

          <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:24px;">

    <!-- Card 1: Individual Therapy -->
    <div style="flex:1 1 300px; max-width:340px; background-color:#F8F6F2; border-radius:24px; padding:45px 30px; text-align:center;">
        <i class="bi bi-heart" style="font-size:2.2rem; color:#1B3648; margin-bottom:20px; display:inline-block;"></i>
        <h3 style="font-family:'Beautique Display', serif; font-size:1.3rem; font-weight:700; color:#10202B; margin:15px 0 20px 0;">Individual Therapy</h3>
        <div style="font-family:'Beautique Display', serif; font-size:2.6rem; font-weight:700; color:#10202B; line-height:1;">$145</div>
        <div style="font-size:0.9rem; color:#517085; margin:10px 0 20px 0;">In person or virtual</div>
        <p style="font-size:0.95rem; color:#1B3648; line-height:1.6; margin:0;">Personalized support for your well-being and growth.</p>
    </div>

    <!-- Card 2: Couples Therapy -->
    <div style="flex:1 1 300px; max-width:340px; background-color:#F8F6F2; border-radius:24px; padding:45px 30px; text-align:center;">
        <i class="bi bi-hearts" style="font-size:2.2rem; color:#1B3648; margin-bottom:20px; display:inline-block;"></i>
        <h3 style="font-family:'Beautique Display', serif; font-size:1.3rem; font-weight:700; color:#10202B; margin:15px 0 20px 0;">Couples Therapy</h3>
        <div style="font-family:'Beautique Display', serif; font-size:2.6rem; font-weight:700; color:#10202B; line-height:1;">$180</div>
        <div style="font-size:0.9rem; color:#517085; margin:10px 0 20px 0;">In person or virtual</div>
        <p style="font-size:0.95rem; color:#1B3648; line-height:1.6; margin:0;">Strengthen connection and navigate challenges together.</p>
    </div>

    <!-- Card 3: Student Therapist -->
    <div style="flex:1 1 300px; max-width:340px; background-color:#F8F6F2; border-radius:24px; padding:45px 30px; text-align:center;">
        <i class="bi bi-laptop" style="font-size:2.2rem; color:#1B3648; margin-bottom:20px; display:inline-block;"></i>
        <h3 style="font-family:'Beautique Display', serif; font-size:1.3rem; font-weight:700; color:#10202B; margin:15px 0 20px 0;">Student Therapist</h3>
        <div style="font-family:'Beautique Display', serif; font-size:2.6rem; font-weight:700; color:#10202B; line-height:1;">$50</div>
        <div style="font-size:0.9rem; color:#517085; margin:10px 0 20px 0;">Virtual</div>
        <p style="font-size:0.95rem; color:#1B3648; line-height:1.6; margin:0;">Affordable support with compassion and care.</p>
    </div>

</div>

           <div style="display:flex; flex-wrap:wrap; gap:24px; background-color:#F8F6F2; border-radius:24px; padding:35px 40px;">

    <!-- Sliding Scale -->
    <div style="flex:1 1 300px; display:flex; align-items:flex-start; gap:20px; padding-right:30px; border-right:1px solid rgba(0,0,0,0.08);">
        <div style="width:50px; height:50px; flex-shrink:0; border-radius:50%; border:1.5px solid #1B3648; display:flex; align-items:center; justify-content:center;">
            <i class="bi bi-heart" style="font-size:1.2rem; color:#1B3648;"></i>
        </div>
        <div>
            <h5 style="font-family:'Beautique Display', serif; font-size:1.05rem; font-weight:700; color:#10202B; margin:0 0 8px 0;">Sliding Scale</h5>
            <p style="font-size:0.9rem; color:#517085; line-height:1.6; margin:0;">A limited number of sliding scale spots may be available. Please inquire during your consultation.</p>
        </div>
    </div>

    <!-- Cancellation Policy -->
    <div style="flex:1 1 300px; display:flex; align-items:flex-start; gap:20px;">
        <div style="width:50px; height:50px; flex-shrink:0; border-radius:50%; border:1.5px solid #1B3648; display:flex; align-items:center; justify-content:center;">
            <i class="bi bi-calendar-week" style="font-size:1.2rem; color:#1B3648;"></i>
        </div>
        <div>
            <h5 style="font-family:'Beautique Display', serif; font-size:1.05rem; font-weight:700; color:#10202B; margin:0 0 8px 0;">Cancellation Policy</h5>
            <p style="font-size:0.9rem; color:#517085; line-height:1.6; margin:0;">Please give 24 hours notice to cancel or reschedule an appointment.</p>
        </div>
    </div>

</div>
        </div>
    </section>
    <section class="our-blogs section-padding" data-aos="fade-up">
        <div class="container container-lg text-center">
            <span class="badge-who mb-3">Our Blog</span>
            <h2 class="display-4 serif mb-3">Insights & Mental Health <span class="italic-serif text-teal">Resources</span></h2>
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
                    <a href="{{route('alltherapists')}}" class="btn-book-teal">
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
                            <img src="{{asset('front/images/emergency.jpg')}}" alt="Healing Journey">
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
                                        <button type="submit" class="contact-us-section-btn">Send Message</button>
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
