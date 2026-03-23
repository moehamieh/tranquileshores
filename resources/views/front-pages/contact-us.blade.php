@extends('front-layout.app')
@section('title', 'Contact Us')
@section('content')
<section class="contact-hero-section section-padding-medium" data-aos="fade-up" style="background-color: #F2F6F5">
    <div class="container container-lg">
        <div class="bg-white rounded-5 shadow-sm overflow-hidden">
            <div class="row g-0 align-items-stretch">
                <div class="col-lg-5 p-5 d-flex flex-column justify-content-center bg-white" style="border-radius: 40px 0 0 40px;">
                    <div class="contact-hero-content">
                        <span class="serif-font italic-serif mb-3 d-block" style="color: #4D9595; font-size: 1.5rem;">Contact Us</span>
                        <h1 class="serif-font mb-4" style="font-size: 2.5rem; color: #2C4A4A; line-height: 1.1;">Easily Online, by Phone or by Dropping In</h1>
                        <p class="text-muted mb-5" style="max-width: 400px; line-height: 1.6; font-size: 1rem">Start your path to psychological wellness with our thuroughly selected specialists.</p>

                        <div class="row g-4 mb-5">
                            <div class="col-sm-12">
                                <div class="call-us-info">
                                    <span class="text-uppercase fw-bold text-muted d-block mb-1" style="font-size: 0.7rem; letter-spacing: 1px;">Call Emily:</span>
                                    <a href="tel:+080023367811" class="fw-bold text-decoration-none" style="font-size: 1.3rem; color: #2C4A4A;">+ 0800 2336 7811</a>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="call-us-info">
                                    <span class="text-uppercase fw-bold text-muted d-block mb-1" style="font-size: 0.7rem; letter-spacing: 1px;">Call Janette:</span>
                                    <a href="tel:+080023367812" class="fw-bold text-decoration-none" style="font-size: 1.3rem; color: #2C4A4A;">+ 0800 2336 7812</a>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-5">
                            <button class="btn-book mx-auto">
                                <span class="btn-text" style="font-weight: bold; font-size: 16px; padding: 0.8em 1.5em;">Book a Session</span>
                                <span class="btn-arrow">&rarr;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-hero-image h-100 position-relative">
                        <img src="{{asset('front/images/80-contacts-1.webp')}}" alt="Contact Us" class="w-100 h-100" style="object-fit: cover; min-height: 450px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--<section class="contact-form-section section-padding-medium pt-0" data-aos="fade-up" style="background-color: #F2F6F5">--}}
{{--    <div class="container container-lg">--}}
{{--        <div class="row justify-content-center" style="padding-top: 1em">--}}
{{--            <div class="col-lg-10" >--}}
{{--                <div class="bg-white p-5 rounded-5 shadow-sm">--}}
{{--                    <h2 class="serif-font mb-5 text-center" style="font-size: 2.5rem; color: #2C4A4A;">Send Us a Message</h2>--}}
{{--                    <form action="#" class="contact-large-form">--}}
{{--                        <div class="row g-4">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-floating mb-3">--}}
{{--                                    <input type="text" class="form-control border-0 border-bottom rounded-0 px-0" id="fullName" placeholder="Full Name" style="box-shadow: none; border-color: #eee !important;">--}}
{{--                                    <label for="fullName" class="px-0 text-muted">Your Full Name</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-floating mb-3">--}}
{{--                                    <input type="email" class="form-control border-0 border-bottom rounded-0 px-0" id="email" placeholder="Email Address" style="box-shadow: none; border-color: #eee !important;">--}}
{{--                                    <label for="email" class="px-0 text-muted">Your Email</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-12">--}}
{{--                                <div class="form-floating mb-3">--}}
{{--                                    <input type="tel" class="form-control border-0 border-bottom rounded-0 px-0" id="phone" placeholder="Phone Number" style="box-shadow: none; border-color: #eee !important;">--}}
{{--                                    <label for="phone" class="px-0 text-muted">Your Phone Number</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-12">--}}
{{--                                <div class="form-floating mb-4">--}}
{{--                                    <textarea class="form-control border-0 border-bottom rounded-0 px-0" placeholder="Leave a message here" id="message" style="height: 150px; box-shadow: none; border-color: #eee !important;"></textarea>--}}
{{--                                    <label for="message" class="px-0 text-muted">Your Message</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 text-center mt-4">--}}
{{--                                <button class="btn-book mx-auto">--}}
{{--                                    <span class="btn-text" style="font-weight: bold; font-size: 18px; padding: 1em 3em;">Send Message</span>--}}
{{--                                    <span class="btn-arrow">&rarr;</span>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
@endsection
