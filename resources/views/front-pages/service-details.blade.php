@extends('front-layout.app')
@section('title', 'Home')
@section('content')
    <section class="service-intro-section section-padding-medium" data-aos="fade-up" style="background-color: #F2F6F5">
        <div class="container container-lg">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="service-intro-img-wrapper">
                        <img src="{{ asset($service->image_url) }}" alt="{{ $service->title }}" class="service-intro-img">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-intro-content">
                        <h2 class="service-intro-title serif-font mb-4">{{ $service->title }}</h2>
                        <div class="service-intro-text mb-4">
                            {!! $service->subtitle !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="service-details-page">
    <section class="service-intro-section section-padding-medium"  style="background-color: #F2F6F5">
        <div class="container container-lg">
            <div class="row g-5">
                <!-- Sidebar -->
                <div class="col-lg-4 order-2 order-lg-1" data-aos="fade-right">
                    <div class="service-sidebar">
                        <!-- Our Services Card -->
                        <div class="sidebar-card mb-4" style="background-color: {{ $service->bg_color ?? '#F4F4EF' }}">
                            <h3 class="sidebar-title serif-font mb-4">Our Services</h3>
                            <ul class="sidebar-services-list list-unstyled">
                                @foreach($all_services as $s)
                                    <li><a href="{{ route('service-details', $s->slug) }}" class="{{ $s->id == $service->id ? 'active' : '' }}">{{ $s->title }} <span>&rarr;</span></a></li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Book Consultation Card -->
                        <div class="sidebar-card bg-white shadow-sm" data-aos="fade-right">
                            <h3 class="sidebar-title serif-font text-center mb-4 italic-serif">Send A Message:</h3>
                            <form action="#" class="consultation-form">
                                <div class="mb-3">
                                    <input type="text" class="form-control rounded-pill" placeholder="Your Full Name">
                                </div>
                                <div class="mb-3">
                                    <input type="tel" class="form-control rounded-pill" placeholder="Your Phone">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control rounded-pill" placeholder="Your Email" >
                                </div>
                                <div class="row g-2 mb-4">
                                   <textarea class="form-control rounded-pill" placeholder="Your Message" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-outline-dark rounded-pill w-100 fw-bold">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-lg-8 order-1 order-lg-2" data-aos="fade-up">
                    <div class="service-main-content">
                        <!-- About Section -->
                        <div class="about-service-section mb-5">
                            <h2 class="section-title serif-font mb-4">About <span></span></h2>
                            <div class="mb-4">
                                {!! $service->description !!}
                            </div>
                        </div>

                        <!-- Why Therapy Works Section -->
                        <!-- <div class="why-therapy-section mb-5">
                            <h2 class="section-title serif-font mb-4">Why Therapy Works</h2>
                            <div class="accordion custom-accordion" id="therapyAccordion">
                                @php
                                    $staticAccordions = [
                                        [
                                            'id' => 'personal-attention',
                                            'title' => 'Personal Attention',
                                            'content' => 'Your sessions are fully focused on you – your experiences, emotions, and personal goals – ensuring support that feels attentive, respectful, and truly individualized.'
                                        ],
                                        [
                                            'id' => 'safe-confidential',
                                            'title' => 'Safe, Confidential Space',
                                            'content' => 'A supportive and judgment-free environment where your privacy is respected, allowing you to speak openly and feel emotionally secure throughout the therapeutic process.'
                                        ],
                                        [
                                            'id' => 'tailored-strategies',
                                            'title' => 'Tailored Coping Strategies',
                                            'content' => 'Practical tools and techniques carefully adapted to your situation, helping you manage stress, emotions, and challenges in a way that fits your life and pace.'
                                        ],
                                        [
                                            'id' => 'long-term-stability',
                                            'title' => 'Long-Term Emotional Stability',
                                            'content' => 'Therapy focused not only on immediate relief, but on building resilience, self-awareness, and emotional balance that supports lasting well-being.'
                                        ]
                                    ];
                                @endphp
                                @foreach($staticAccordions as $index => $accordion)
                                    <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden {{ $index == 0 ? 'active-item' : 'shadow-sm' }}">
                                        <h2 class="accordion-header" id="heading{{ $accordion['id'] }}">
                                            <button class="accordion-button {{ $index == 0 ? '' : 'collapsed' }} rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $accordion['id'] }}" aria-expanded="{{ $index == 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $accordion['id'] }}">
                                                {{ $accordion['title'] }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $accordion['id'] }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}" aria-labelledby="heading{{ $accordion['id'] }}" data-bs-parent="#therapyAccordion">
                                            <div class="accordion-body pt-0">
                                                {{ $accordion['content'] }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div> -->

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const accordionItems = document.querySelectorAll('#therapyAccordion .accordion-item');
                                accordionItems.forEach(item => {
                                    const button = item.querySelector('.accordion-button');
                                    const collapse = item.querySelector('.accordion-collapse');

                                    collapse.addEventListener('show.bs.collapse', function() {
                                        item.classList.add('active-item');
                                        item.classList.remove('shadow-sm');
                                    });

                                    collapse.addEventListener('hide.bs.collapse', function() {
                                        item.classList.remove('active-item');
                                        item.classList.add('shadow-sm');
                                    });
                                });
                            });
                        </script>

                        <!-- Our Specialists Section -->
                        <div class="specialists-section mb-5">
                            <h2 class="section-title serif-font mb-4">Our Specialists</h2>
                            <div class="row g-4 mb-4">
                                @foreach($nav_therapists->take(3) as $therapist)
                                    <div class="col-md-4">
                                        <div class="therapist-card-simple bg-white rounded-4 shadow-sm overflow-hidden">
                                            <img src="{{ asset($therapist->image_url) }}" alt="{{ $therapist->name }}" class="w-100">
                                            <div class="p-3">
                                                <h4 class="mb-1 fs-6 fw-bold">{{ strtoupper($therapist->name) }}</h4>
                                                <p class="text-muted small mb-0">{{ $therapist->role }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <a href="{{route('alltherapists')}}" class="view-all-link text-dark fw-bold">View All Therapists <span>&rarr;</span></a>
                        </div>
                    </div>
                </div>
            </div>

            @php
                $currentIndex = $all_services->search(fn($item) => $item->id == $service->id);
                $prevService = $all_services[$currentIndex - 1] ?? null;
                $nextService = $all_services[$currentIndex + 1] ?? null;
            @endphp
            <div class="service-navigation mt-5 pt-5 border-top d-flex justify-content-between align-items-center">
                @if($prevService)
                    <a href="{{ route('service-details', $prevService->slug) }}" class="nav-prev d-flex align-items-center text-decoration-none text-dark">
                        <span class="nav-icon rounded-circle bg-light d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;"><i class="bi bi-arrow-left"></i></span>
                        <h4 class="mb-0 serif-font">{{ $prevService->title }}</h4>
                    </a>
                @else
                    <div></div>
                @endif

                @if($nextService)
                    <a href="{{ route('service-details', $nextService->slug) }}" class="nav-next d-flex align-items-center text-decoration-none text-dark">
                        <h4 class="mb-0 serif-font me-3">{{ $nextService->title }}</h4>
                        <span class="nav-icon rounded-circle bg-light d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;"><i class="bi bi-arrow-right"></i></span>
                    </a>
                @endif
            </div>
        </div>
    </section>
</div>
@endsection
