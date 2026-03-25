@extends('front-layout.app')
@section('title', 'Our Blog')
@section('content')

<section class="blog-listing-header section-padding-medium" style="background-color: #F8FBFB">
    <div class="container container-lg">
        <div class="text-center" data-aos="fade-up">
            <span class="badge-who mb-3">Insights & Resources</span>
            <h1 class="serif-font mb-4" style="font-size: 3.5rem; color: #2C4A4A;">Our Blog</h1>
            <p class="text-muted col-md-8 mx-auto">Practical guidance, emotional insights, and support for your journey to mental wellness.</p>
        </div>
    </div>
</section>

<section class="blog-listing-content section-padding" style="background-color: #fff">
    <div class="container container-lg">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="row g-4">
                    @forelse($posts as $post)
                        <div class="col-md-6" data-aos="fade-up">
                            <div class="blog-card shadow-sm h-100">
                                <div class="blog-image-wrapper">
                                    <img src="{{ asset($post->main_image_url) }}" alt="{{ $post->title }}">
                                    <span class="blog-category-badge">{{ $post->category->name }}</span>
                                </div>
                                <div class="blog-content">
                                    <h3 class="blog-card-title">{{ $post->title }}</h3>
                                    <p class="text-muted small mb-3">{!!  $post->summary !!}</p>
                                    <a href="{{ route('blog-details', $post->slug) }}" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5">
                            <h3 class="text-muted">No articles found.</h3>
                        </div>
                    @endforelse
                </div>

                <!-- Pagination -->
                <div class="mt-5 d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 120px;">
                    <!-- Search Widget -->
                    <div class="bg-white p-4 rounded-5 shadow-sm mb-4 border" data-aos="fade-up">
                        <h4 class="serif-font mb-3">Search</h4>
                        <form action="{{ route('blogs') }}" method="GET" class="position-relative">
                            <input type="text" name="search" value="{{ request('search') }}" class="form-control rounded-pill border-light bg-light p-3" placeholder="Search articles...">
                            <button type="submit" class="btn position-absolute top-50 end-0 translate-middle-y me-2"><i class="bi bi-search"></i></button>
                        </form>
                    </div>

                    <!-- Categories Widget -->
                    <div class="bg-white p-4 rounded-5 shadow-sm mb-4 border" data-aos="fade-up" data-aos-delay="100">
                        <h4 class="serif-font mb-3">Categories</h4>
                        <ul class="list-unstyled mb-0">
                            <li><a href="{{ route('blogs') }}" class="text-decoration-none {{ !request('category') ? 'text-dark fw-bold' : 'text-muted' }} d-flex justify-content-between align-items-center py-2 border-bottom border-light"><span>All Categories</span></a></li>
                            @foreach($categories as $category)
                                <li class="mb-2"><a href="{{ route('blogs', ['category' => $category->slug]) }}" class="text-decoration-none {{ request('category') == $category->slug ? 'text-dark fw-bold' : 'text-muted' }} d-flex justify-content-between align-items-center py-2 border-bottom border-light"><span>{{ $category->name }}</span> <span class="badge rounded-pill bg-light text-dark">{{ $category->posts_count }}</span></a></li>
                            @endforeach
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

@endsection
