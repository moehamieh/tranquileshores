@extends('front-layout.app')

@section('title', 'All Therapists')

@section('content')
    <section class="page-header section-padding-medium" style="background-color: #F8FBFB">
        <div class="container container-lg text-center">
            <h1 class="serif-font mb-3" style="font-size: 3rem; color: #2C4A4A;">Our Licensed Therapists</h1>
            <p class="text-muted lead">Professional psychological support for your mental health journey.</p>
        </div>
    </section>

    <section class="licensed-therapist section-padding" data-aos="fade-up">
        <div class="container container-lg">
            <div class="row g-4">
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
@endsection
