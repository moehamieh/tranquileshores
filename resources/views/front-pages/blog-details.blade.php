@extends('front-layout.app')
@section('title', $post->title)
@section('content')

<section class="blog-details-section section-padding" style="background-color: #F8FBFB">
    <div class="container container-lg">
        <!-- Breadcrumbs / Back Link -->
        <div class="mb-4" data-aos="fade-up" style="padding-top: 1em">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home-page') }}" class="text-decoration-none text-muted">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('blogs') }}" class="text-decoration-none text-muted">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
              </ol>
            </nav>
        </div>

        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Header -->
                <div class="blog-header mb-5" data-aos="fade-up">
                    <span class="blog-category-badge position-static d-inline-block mb-3" style="background-color: #F4EDB7;">{{ $post->category->name }}</span>
                    <h1 class="serif-font mb-4" style="font-size: 3rem; color: #2C4A4A; line-height: 1.1;">{{ $post->title }}</h1>

                    <div class="d-flex align-items-center gap-3 mb-4">
                        <img src="{{ asset($post->author->image_url) }}" alt="{{ $post->author->name }}" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                        <div>
                            <span class="d-block fw-bold text-dark">{{ $post->author->name }}</span>
                            <span class="text-muted small">{{ $post->published_at->format('M d, Y') }} • {{ ceil(str_word_count(strip_tags($post->content)) / 200) }} min read</span>
                        </div>
                    </div>

                    <!-- Big Image -->
                    <div class="rounded-5 overflow-hidden shadow-sm mb-5">
                        <img src="{{ asset($post->main_image_url) }}" alt="{{ $post->title }}" class="w-100" style="max-height: 500px; object-fit: cover;">
                    </div>

                    <!-- Blog Description/Content -->
                    <div class="blog-description-content" style="font-size: 1.1rem; line-height: 1.8; color: #555;">
                        {!! $post->content !!}
                    </div>

                    <!-- Images Below -->
                    @if($post->additional_images_urls)
                        <div class="row g-3 mt-5">
                            @foreach($post->additional_images_urls as $image)
                                <div class="col-md-6" data-aos="fade-up">
                                    <div class="rounded-4 overflow-hidden shadow-sm h-100">
                                        <img src="{{ asset($image) }}" alt="Additional Image" class="w-100 h-100" style="object-fit: cover; min-height: 300px;">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 120px;">
                    <!-- Search Widget -->
                    <div class="bg-white p-4 rounded-5 shadow-sm mb-4" data-aos="fade-up">
                        <h4 class="serif-font mb-3">Search</h4>
                        <form action="{{ route('blogs') }}" method="GET" class="position-relative">
                            <input type="text" name="search" class="form-control rounded-pill border-light bg-light p-3" placeholder="Search articles...">
                            <button type="submit" class="btn position-absolute top-50 end-0 translate-middle-y me-2"><i class="bi bi-search"></i></button>
                        </form>
                    </div>

                    <!-- Categories Widget -->
                    <div class="bg-white p-4 rounded-5 shadow-sm mb-4" data-aos="fade-up" data-aos-delay="100">
                        <h4 class="serif-font mb-3">Categories</h4>
                        <ul class="list-unstyled mb-0">
                            @foreach($categories as $category)
                                <li class="mb-2"><a href="{{ route('blogs', ['category' => $category->slug]) }}" class="text-decoration-none text-muted d-flex justify-content-between align-items-center py-2 border-bottom border-light"><span>{{ $category->name }}</span> <span class="badge rounded-pill bg-light text-dark">{{ $category->posts_count }}</span></a></li>
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
            @foreach($related_posts as $related)
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="blog-card shadow-sm border border-light">
                        <div class="blog-image-wrapper">
                            <img src="{{ asset($related->main_image_url) }}" alt="{{ $related->title }}">
                            <span class="blog-category-badge">{{ $related->category->name }}</span>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-card-title">{{ $related->title }}</h3>
                            <a href="{{ route('blog-details', $related->slug) }}" class="read-more">Read Full Article &rarr;</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
