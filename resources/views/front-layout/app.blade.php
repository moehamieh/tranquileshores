<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>@yield('title', 'My Website')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">

<body>

<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid px-lg-5">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <i class="bi bi-heart-fill me-2" style="font-size: 1.3rem; color: #5C9396;"></i> OnlineTherapy
        </a>

        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('home-page') ? 'active' : '' }}" href="{{ route('home-page') }}">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('allservices') || request()->routeIs('service-details') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu border-0 shadow-sm dropdown-mega">
                        <div class="mega-menu-content">
                            <div class="mega-menu-image d-none d-lg-block"></div>
                            <div class="mega-menu-links">
                                <ul class="list-unstyled mb-0">
                                    <li><a class="dropdown-item fw-bold" href="{{ route('allservices') }}">All Services</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    @foreach($nav_services as $nav_service)
                                        <li><a class="dropdown-item" href="{{ route('service-details', $nav_service->slug) }}">{{ $nav_service->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('alltherapists') || request()->routeIs('therapist-profile') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Therapists
                    </a>
                    <ul class="dropdown-menu border-0 shadow-sm">
                        <li><a class="dropdown-item" href="{{ route('alltherapists') }}">All Therapists</a></li>
                        <li><hr class="dropdown-divider"></li>
                        @foreach($nav_therapists as $nav_therapist)
                            <li><a class="dropdown-item" href="{{ route('therapist-profile', $nav_therapist->slug) }}">{{ $nav_therapist->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('blogs') ? 'active' : '' }}" href="{{ route('blogs') }}">Blog</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('contact-us') ? 'active' : '' }}" href="{{ route('contact-us') }}">Contact</a></li>
            </ul>
            <div class="d-flex align-items-center gap-3">
                <div class="cta-btn-group">
                    <a href="{{route('alltherapists')}}" class="btn-book-teal" target="_blank">
                        <span class="btn-text" style="font-weight: bold; font-size: 16px;padding: 0.8em">Book a Session</span>
                        <span class="btn-arrow">&rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="offcanvas offcanvas-end custom-drawer" tabindex="-1" id="offcanvasNavbar">
    <div class="offcanvas-header justify-content-end">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column">
        <div class="drawer-brand mb-5">
            <i class="bi bi-heart-fill me-1" style="color: #FDF9F6;"></i> OnlineTherapy
        </div>
        <ul class="navbar-nav flex-grow-1">
            <li class="nav-item"><a class="drawer-link active" href="#">Home</a></li>
            <li class="nav-item dropdown">
                <a class="drawer-link dropdown-toggle {{ request()->routeIs('allservices') || request()->routeIs('service-details') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                </a>
                <div class="dropdown-menu border-0 shadow-sm bg-transparent">
                    <ul class="list-unstyled mb-0">
                        <li><a class="dropdown-item text-white fw-bold" href="{{ route('allservices') }}">All Services</a></li>
                        @foreach($nav_services as $nav_service)
                            <li><a class="dropdown-item text-white" href="{{ route('service-details', $nav_service->slug) }}">{{ $nav_service->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="drawer-link dropdown-toggle {{ request()->routeIs('alltherapists') || request()->routeIs('therapist-profile') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Therapists
                </a>
                <div class="dropdown-menu border-0 shadow-sm bg-transparent">
                    <ul class="list-unstyled mb-0">
                        <li><a class="dropdown-item text-white" href="{{ route('alltherapists') }}">All Therapists</a></li>
                        @foreach($nav_therapists as $nav_therapist)
                            <li><a class="dropdown-item text-white" href="{{ route('therapist-profile', $nav_therapist->slug) }}">{{ $nav_therapist->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </li>
            <li class="nav-item"><a class="drawer-link {{ request()->routeIs('blogs') ? 'active' : '' }}" href="{{ route('blogs') }}">Blog</a></li>
            <li class="nav-item"><a class="drawer-link" href="{{route('contact-us')}}">Contact</a></li>
        </ul>
        <div class="drawer-footer mt-auto">
            <a href="{{route('alltherapists')}}" class="btn-book-promo" target="_blank">
                <span class="btn-text" style="font-weight: bold; font-size: 16px;padding: 0.8em">Book a Session</span>
                <span class="btn-arrow">&rarr;</span>
            </a>
        </div>
    </div>
</div>

<main>
    @yield('content')
</main>

<footer class="footer-integrated" style="margin:20px">
    <div class="container container-lg" >
        <div class="row align-items-start mb-5 g-5">

            <div class="col-lg-7">
                <h2 class="footer-promo-title serif">Get a special 50% new patient discount and unleash your health.</h2>
            </div>

            <div class="col-lg-5 newsletter-col">
                <label class="newsletter-label">Sign Up to Newsletter</label>
                <div class="input-group-custom shadow-sm">
                    <input type="email" class="input-signup" placeholder="Your email address...">
                    <button class="btn-submit-signup"><i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <hr style="border-color: rgba(255,255,255,0.1); margin: 60px 0;">

        <div class="row text-start">

            <div class="col-md-3">
                <div class="footer-brand d-flex align-items-center">
                    <i class="brand-heart bi bi-heart"></i> OnlineTherapy
                </div>
                <p class="brand-p">Start your path to psychological wellness with our specialists.</p>
                <div class="footer-social-float d-flex align-items-center gap-3">
                    <div class="d-flex gap-2">
                        <a href="#" class="social-circle-footer"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-circle-footer"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="social-circle-footer"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <h5 class="footer-section-title">Services</h5>
                <ul class="footer-list">
                    @foreach($nav_services->take(6) as $nav_service)
                        <li><a href="{{ route('service-details', $nav_service->slug) }}" class="text-white text-decoration-none opacity-75">{{ $nav_service->title }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-3">
                <h5 class="footer-section-title">Our Therapists</h5>
                <ul class="footer-list">
                    @foreach($nav_therapists->take(6) as $nav_therapist)
                        <li><a href="{{ route('therapist-profile', $nav_therapist->slug) }}" class="text-white text-decoration-none opacity-75">{{ $nav_therapist->name }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-3">
                <h5 class="footer-section-title">Pages</h5>
                <ul class="footer-list">
                    <li><a href="{{ route('home-page') }}" class="text-white text-decoration-none opacity-75">Home</a></li>
                    <li><a href="{{ route('allservices') }}" class="text-white text-decoration-none opacity-75">Our Services</a></li>
                    <li><a href="{{ route('alltherapists') }}" class="text-white text-decoration-none opacity-75">Our Therapists</a></li>
                    <li><a href="{{ route('blogs') }}" class="text-white text-decoration-none opacity-75">Blog</a></li>
                    <li><a href="{{ route('contact-us') }}" class="text-white text-decoration-none opacity-75">Contacts</a></li>
                </ul>
            </div>
        </div>

        <p class="sub-footer-p">Tranquil shore © 2026 – All Rights Reserved</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1200,
        once: false,
        offset: 150,
        easing: 'ease-in-out'
    });
</script>
</body>
</html>
