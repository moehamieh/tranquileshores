@extends('front-layout.app')
@section('title', $therapist->name)
@section('content')
<section class="therapist-profile-header section-padding-medium" data-aos="fade-up" style="background-color: #F8FBFB">
    <div class="container container-lg">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <div class="profile-header-content">
                    <span class="badge bg-light text-muted px-3 py-2 rounded-pill mb-3 text-uppercase fw-bold" style="font-size: 1em; letter-spacing: 1px;" >{{ $therapist->role }}</span>
                    <h1 class="profile-name serif-font mb-4" style="font-size: 2.5em; color: #2C4A4A;">{{ $therapist->name }}</h1>

                    <div class="contact-info-list mb-4" style="font-size: 1.1rem;">
                        @if($therapist->phone)
                            <div class="contact-item d-flex py-3 border-bottom">
                                <span class="text-muted me-4" style="min-width: 60px;">Phone:</span>
                                <span class="fw-bold">{{ $therapist->phone }}</span>
                            </div>
                        @endif
                        @if($therapist->office_phone)
                            <div class="contact-item d-flex py-3 border-bottom">
                                <span class="text-muted me-4" style="min-width: 60px;">Office:</span>
                                <span class="fw-bold">{{ $therapist->office_phone }}</span>
                            </div>
                        @endif
                        @if($therapist->email)
                            <div class="contact-item d-flex py-3 border-bottom">
                                <span class="text-muted me-4" style="min-width: 60px;">Email:</span>
                                <span class="fw-bold">{{ $therapist->email }}</span>
                            </div>
                        @endif
                    </div>

                    <div class="social-links d-flex align-items-center gap-3 mt-4">
                        <div class="d-flex gap-3">
                            @foreach($therapist->social_links ?? [] as $social)
                                @php
                                    $platform = strtolower($social['platform'] ?? 'share');
                                    $icon = $social['icon'] ?? "bi-{$platform}";
                                @endphp
                                <a href="{{ $social['url'] }}" class="social-icon rounded-circle bg-white shadow-sm d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; color: #333;"><i class="bi {{ $icon }}"></i></a>
                            @endforeach
                        </div>
                        <a href="{{$therapist->booking_url}}" class="btn-book-teal" target="_blank">
                            <span class="btn-text" style="font-weight: bold; font-size: 16px;padding: 0.8em">Book a Session</span>
                            <span class="btn-arrow">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="profile-image-wrapper">
                    <img src="{{ asset($therapist->image_url) }}" alt="{{ $therapist->name }}" class="img-fluid rounded-4 shadow-sm">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="therapist-details-section section-padding-medium" style="background-color: #F2F6F5" >
    <div class="container container-lg">
        <div class="row g-5">
            <!-- Sidebar -->
            <div class="col-lg-4" data-aos="fade-right">
                <div class="sidebar-card bg-white shadow-sm sticky-top" style="top: 100px;">
                    <h3 class="sidebar-title serif-font text-center mb-4 italic-serif">Send a Message:</h3>
                    <form action="#" class="consultation-form">
                        <div class="mb-3">
                            <input type="text" class="form-control rounded-pill" placeholder="Your Full Name">
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control rounded-pill" placeholder="Your Phone">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control rounded-pill" placeholder="Your Email">
                        </div>
                        <div class="mb-4">
                            <textarea class="form-control rounded-pill" placeholder="Your Message" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-dark rounded-pill w-100 fw-bold py-2">Send Message</button>
                    </form>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-8" data-aos="fade-up">
                <div class="profile-main-content">
                    <div class="biography-section mb-5">
                        <h2 class="section-title serif-font mb-4" style="color: #2C4A4A;"> Biography</h2>
                        <div class="mb-4 text-muted" style="line-height: 1.8; font-size: 1.1rem;" >
                            {!! $therapist->bio !!}
                        </div>
                    </div>

                    <!-- <div class="education-section mb-5" style="font-size: 1.1rem;">
                        <h2 class="section-title serif-font mb-4" style="color: #2C4A4A;">Education & Experience</h2>
                        <div class="table-responsive">
                            <table class="table border-bottom" >
                                <tbody >
                                    @foreach($therapist->education ?? [] as $edu)
                                        @php
                                            $label = is_array($edu) ? ($edu['label'] ?? 'Degree') : 'Degree';
                                            $value = is_array($edu) ? ($edu['value'] ?? $edu) : $edu;
                                        @endphp
                                        <tr>
                                            <td class="ps-0 py-3 fw-bold text-dark border-top-0" style="width: 30%;background-color: #F2F6F5"><u>{{ $label }}</u></td>
                                            <td class="py-3 text-muted border-top-0" style="background-color: #F2F6F5">{{ $value }}</td>
                                        </tr>
                                    @endforeach
                                    @if($therapist->certification)
                                        <tr>
                                            <td class="ps-0 py-3 fw-bold text-dark" style="background-color: #F2F6F5">Board certification</td>
                                            <td class="py-3 text-muted" style="background-color: #F2F6F5">{{ $therapist->certification }}</td>
                                        </tr>
                                    @endif
                                    @if($therapist->expertise)
                                        <tr>
                                            <td class="ps-0 py-3 fw-bold text-dark" style="background-color: #F2F6F5">Field of expertise</td>
                                            <td class="py-3 text-muted" style="background-color: #F2F6F5">{{ $therapist->expertise }}</td>
                                        </tr>
                                    @endif
                                    @if($therapist->practice_years)
                                        <tr>
                                            <td class="ps-0 py-3 fw-bold text-dark" style="background-color: #F2F6F5">Years of practice</td>
                                            <td class="py-3 text-muted" style="background-color: #F2F6F5">{{ $therapist->practice_years }}</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div> -->

@if($therapist->posts && count($therapist->posts) > 0)
                    <div class="articles-section mb-5">
                        <h2 class="section-title serif-font mb-4" style="color: #2C4A4A;">Related Articles</h2>
                        <div class="row g-4">
                            @foreach($therapist->posts ?? [] as $article)
                                <div class="col-md-6">
                                    <div class="article-card-simple bg-white rounded-4 shadow-sm overflow-hidden h-100 border-0">
                                        <div class="position-relative">
                                            <img src="{{ asset($article->main_image_url) }}" alt="{{ $article->title }}" class="w-100 article-img">
                                            <span class="badge position-absolute bottom-0 start-0 m-3 px-3 py-2 rounded-pill text-uppercase fw-bold" style="background-color: #E8E2D5; color: #666; font-size: 0.6rem;">{{ $article->category->name }}</span>
                                        </div>
                                        <div class="p-4">
                                            <h4 class="serif-font mb-3 h5">{{ $article->title }}</h4>
                                            <a href="{{ route('blog-details', $article->slug) }}" class="text-dark fw-bold text-decoration-none small">Read More &rarr;</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        @php
            $currentIndex = $nav_therapists->search(fn($item) => $item->id == $therapist->id);
            $prevTherapist = $nav_therapists[$currentIndex - 1] ?? null;
            $nextTherapist = $nav_therapists[$currentIndex + 1] ?? null;
        @endphp
        <div class="profile-navigation mt-5 pt-5 border-top d-flex justify-content-between align-items-center">
            @if($prevTherapist)
                <a href="{{ route('therapist-profile', $prevTherapist->slug) }}" class="nav-prev d-flex align-items-center text-decoration-none text-dark group">
                    <span class="nav-icon rounded-circle bg-light d-flex align-items-center justify-content-center me-3 transition-all" style="width: 40px; height: 40px;"><i class="bi bi-arrow-left"></i></span>
                    <h4 class="mb-0 serif-font fs-6">{{ $prevTherapist->name }}</h4>
                </a>
            @else
                <div></div>
            @endif

            @if($nextTherapist)
                <a href="{{ route('therapist-profile', $nextTherapist->slug) }}" class="nav-next d-flex align-items-center text-decoration-none text-dark group">
                    <h4 class="mb-0 serif-font fs-6 me-3">{{ $nextTherapist->name }}</h4>
                    <span class="nav-icon rounded-circle bg-light d-flex align-items-center justify-content-center transition-all" style="width: 40px; height: 40px;"><i class="bi bi-arrow-right"></i></span>
                </a>
            @endif
        </div>
    </div>
</section>
@if($therapist->id == 1)
    <div class="hero-section" >
        <div class="hero-card position-relative" style="background-image: url('{{ asset('front/images/Karen-Office.jpeg') }}'); background-repeat: no-repeat; background-position: center; background-size: cover;">
            <div class="container-fluid px-lg-0"  >
                <div class="row justify-content-start" >
                    <div class="col-lg-6 hero-content-left">
                     
                    </div>
                </div>
            </div>

           
        </div>
    </div>
   
    @elseif($therapist->id ==2)
    <div class="hero-section" >
        <div class="hero-card position-relative" style="background-image: url('{{ asset('front/images/Tessa-Office.jpeg') }}'); background-repeat: no-repeat; background-position: center; background-size: cover;">
            <div class="container-fluid px-lg-0"  >
                <div class="row justify-content-start" >
                    <div class="col-lg-6 hero-content-left">
                     
                    </div>
                </div>
            </div>

           
        </div>
    </div>
    @else
    @endif

<style>
    /* Inline styles moved to style.css */
</style>
@endsection
