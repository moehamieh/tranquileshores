@extends('front-layout.app')
@section('title', 'Blog Details')
@section('content')

<section class="blog-details-section section-padding" style="background-color: #F8FBFB">
    <div class="container container-lg">
        <!-- Breadcrumbs / Back Link -->
        <div class="mb-4" data-aos="fade-up" style="padding-top: 1em">

        </div>

        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Header -->
                <div class="blog-header mb-5" data-aos="fade-up">
                    <span class="blog-category-badge position-static d-inline-block mb-3" style="background-color: #F4EDB7;">Online Therapy</span>
                    <h1 class="serif-font mb-4" style="font-size: 3rem; color: #2C4A4A; line-height: 1.1;">How Online Therapy Can Support Your Mental Health</h1>

                    <div class="d-flex align-items-center gap-3 mb-4">
                        <img src="{{asset('front/images/36e2a7ea656db63c186eb0a02e7fe5c656ed25665db2154081aff88f2f5671c4.jpeg')}}" alt="Author" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                        <div>
                            <span class="d-block fw-bold text-dark">Dr. Sarah Jenkins</span>
                            <span class="text-muted small">March 15, 2024 • 5 min read</span>
                        </div>
                    </div>

                    <!-- Big Image -->
                    <div class="rounded-5 overflow-hidden shadow-sm mb-5">
                        <img src="{{asset('front/images/80-service-1.webp')}}" alt="Main Blog Image" class="w-100" style="max-height: 500px; object-fit: cover;">
                    </div>

                    <!-- Blog Description/Content -->
                    <div class="blog-description-content" style="font-size: 1.1rem; line-height: 1.8; color: #555;">
                        <p class="mb-4">In recent years, the landscape of mental health support has undergone a significant transformation. Online therapy, once a niche alternative, has emerged as a powerful and accessible tool for millions seeking professional guidance. Whether you're navigating anxiety, depression, or simply the stresses of daily life, virtual counseling offers unique benefits that can make your journey to wellness smoother and more manageable.</p>

                        <h3 class="serif-font mt-5 mb-3" style="color: #2C4A4A;">The Comfort of Your Own Space</h3>
                        <p class="mb-4">One of the most cited advantages of online therapy is the ability to connect with a specialist from the comfort and privacy of your own home. For many, the clinical environment of a traditional office can be intimidating. Being in a familiar, safe space allows for a deeper level of vulnerability and openness, which are crucial for effective therapeutic progress.</p>

                        <blockquote class="p-4 my-5 rounded-4 italic-serif" style="background-color: #F4EDB7; border-left: 5px solid #4D9595; font-size: 1.3rem; color: #2C4A4A;">
                            "The goal of therapy is to provide a safe container for self-exploration. When that container is your own home, the barriers to entry drop significantly."
                        </blockquote>

                        <p class="mb-4">Beyond comfort, the logistical benefits are undeniable. There's no commute, no parking stress, and greater flexibility for those with busy schedules or childcare responsibilities. This accessibility ensures that consistent support remains a priority, rather than a chore to be fitted in.</p>
                    </div>

                    <!-- Images Below -->
                    <div class="row g-3 mt-5">
                        <div class="col-md-6" data-aos="fade-right">
                            <div class="rounded-4 overflow-hidden shadow-sm h-100">
                                <img src="https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?auto=format&fit=crop&w=600" alt="Therapy Session" class="w-100 h-100" style="object-fit: cover; min-height: 300px;">
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-left">
                            <div class="rounded-4 overflow-hidden shadow-sm h-100">
                                <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&w=800" alt="Meditation" class="w-100 h-100" style="object-fit: cover; min-height: 300px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 120px;">
                    <!-- Search Widget -->
                    <div class="bg-white p-4 rounded-5 shadow-sm mb-4" data-aos="fade-up">
                        <h4 class="serif-font mb-3">Search</h4>
                        <div class="position-relative">
                            <input type="text" class="form-control rounded-pill border-light bg-light p-3" placeholder="Search articles...">
                            <button class="btn position-absolute top-50 end-0 translate-middle-y me-2"><i class="bi bi-search"></i></button>
                        </div>
                    </div>

                    <!-- Categories Widget -->
                    <div class="bg-white p-4 rounded-5 shadow-sm mb-4" data-aos="fade-up" data-aos-delay="100">
                        <h4 class="serif-font mb-3">Categories</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a href="#" class="text-decoration-none text-muted d-flex justify-content-between align-items-center py-2 border-bottom border-light"><span>Online Therapy</span> <span class="badge rounded-pill bg-light text-dark">12</span></a></li>
                            <li class="mb-2"><a href="#" class="text-decoration-none text-muted d-flex justify-content-between align-items-center py-2 border-bottom border-light"><span>Anxiety Support</span> <span class="badge rounded-pill bg-light text-dark">8</span></a></li>
                            <li class="mb-2"><a href="#" class="text-decoration-none text-muted d-flex justify-content-between align-items-center py-2 border-bottom border-light"><span>Teen Therapy</span> <span class="badge rounded-pill bg-light text-dark">5</span></a></li>
                            <li class="mb-2"><a href="#" class="text-decoration-none text-muted d-flex justify-content-between align-items-center py-2 border-bottom border-light"><span>Self-Care</span> <span class="badge rounded-pill bg-light text-dark">15</span></a></li>
                        </ul>
                    </div>

                    <!-- Newsletter Widget -->
                    <div class="p-4 rounded-5 shadow-sm mb-4 text-center" style="background-color: #4D9595;" data-aos="fade-up" data-aos-delay="200">
                        <h4 class="serif-font mb-3 text-white">Newsletter</h4>
                        <p class="text-white-50 small mb-4">Get the latest mental health tips delivered to your inbox.</p>
                        <input type="email" class="form-control rounded-pill border-0 mb-3 p-3" placeholder="Your Email">
                        <button class="btn-book w-100 justify-content-center" style=" border-color: #F8E1DD; color: #333;">
                            <span class="btn-text">Subscribe</span>
                            <span class="btn-arrow">&rarr;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Articles Section -->
<section class="related-articles section-padding-medium bg-white">
    <div class="container container-lg">
        <div class="d-flex justify-content-between align-items-end mb-5" data-aos="fade-up">
            <div>
                <span class="badge-who mb-3">More Like This</span>
                <h2 class="serif-font" style="font-size: 2.5rem; color: #2C4A4A;">Related Articles</h2>
            </div>

        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="blog-card shadow-sm border border-light">
                    <div class="blog-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?auto=format&fit=crop&w=600" alt="Anxiety">
                        <span class="blog-category-badge">Anxiety Support</span>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-card-title">Managing Anxiety in Everyday Life</h3>
                        <a href="{{ route('blog-details') }}" class="read-more">Read Full Article &rarr;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="blog-card shadow-sm border border-light">
                    <div class="blog-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?auto=format&fit=crop&w=600" alt="Self Care">
                        <span class="blog-category-badge">Self Care</span>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-card-title">The Power of Routine in Mental Wellness</h3>
                        <a href="{{ route('blog-details') }}" class="read-more">Read Full Article &rarr;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-md-none d-lg-block" data-aos="fade-up" data-aos-delay="300">
                <div class="blog-card shadow-sm border border-light">
                    <div class="blog-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1512438248247-f0f2a5a8b7f0?auto=format&fit=crop&w=600" alt="Relationships">
                        <span class="blog-category-badge">Couples Therapy</span>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-card-title">Strengthening Connections Through Communication</h3>
                        <a href="{{ route('blog-details') }}" class="read-more">Read Full Article &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
