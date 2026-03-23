@extends('front-layout.app')
@section('title', 'Home')
@section('content')
    <section class="service-intro-section section-padding-medium" data-aos="fade-up" style="background-color: #F2F6F5">
        <div class="container container-lg">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="service-intro-img-wrapper">
                        <img src="{{asset('front/images/80-service-1.webp')}}" alt="Therapy Session" class="service-intro-img">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-intro-content">
                        <h2 class="service-intro-title serif-font mb-4">Personalized Support for Your <span>Mental Well-being</span></h2>
                        <p class="service-intro-text mb-4">
                            Individual therapy is a collaborative process between a therapist and a person in therapy.
                            Common goals of treatment can be to inspire change or improve quality of life.
                            People may seek therapy for help with issues that are hard to face alone.
                        </p>
                        <p class="service-intro-text mb-5">
                            It is also called therapy, psychotherapy, psychosocial therapy, talk therapy, or counseling.
                            Therapy can help people overcome obstacles to their well-being.
                        </p>

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
                        <div class="sidebar-card bg-card-yellow mb-4">
                            <h3 class="sidebar-title serif-font mb-4">Our Services</h3>
                            <ul class="sidebar-services-list list-unstyled">
                                <li><a href="#" class="active">Individual Therapy <span>&rarr;</span></a></li>
                                <li><a href="#">Couples Therapy <span>&rarr;</span></a></li>
                                <li><a href="#">Family Counseling <span>&rarr;</span></a></li>
                                <li><a href="#">Teen Therapy <span>&rarr;</span></a></li>
                                <li><a href="#">Depression Therapy <span>&rarr;</span></a></li>
                                <li><a href="#">Supportive Counseling <span>&rarr;</span></a></li>
                                <li><a href="#">Trauma & PTSD Therapy <span>&rarr;</span></a></li>
                                <li><a href="#">Burnout Recovery <span>&rarr;</span></a></li>
                                <li><a href="#">Self Esteem Counseling <span>&rarr;</span></a></li>
                            </ul>
                        </div>

                        <!-- Book Consultation Card -->
                        <div class="sidebar-card bg-white shadow-sm" data-aos="fade-right">
                            <h3 class="sidebar-title serif-font text-center mb-4 italic-serif">Book a Consultation:</h3>
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
                                <button type="submit" class="btn btn-outline-dark rounded-pill w-100 fw-bold">Book a Visit</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-lg-8 order-1 order-lg-2" data-aos="fade-up">
                    <div class="service-main-content">
                        <!-- About Section -->
                        <div class="about-service-section mb-5">
                            <h2 class="section-title serif-font mb-4">About <span>Individual Therapy</span></h2>
                            <p class="mb-4">
                                Individual Therapy provides a confidential, one-on-one space where you can explore your thoughts,
                                emotions, and life challenges with the support of a licensed therapist. Sessions are tailored to your
                                personal goals, whether you're dealing with anxiety, stress, life transitions, relationship issues, or a desire
                                for deeper self-understanding.
                            </p>
                            <p>
                                Together, we work to identify patterns, build healthier coping strategies, and develop tools that support
                                emotional balance, clarity, and personal growth. This is a space fully dedicated to you, your story, and your
                                healing journey.
                            </p>
                        </div>

                        <!-- Why Therapy Works Section -->
                        <div class="why-therapy-section mb-5">
                            <h2 class="section-title serif-font mb-4">Why Therapy Works</h2>
                            <div class="accordion custom-accordion" id="therapyAccordion">
                                <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden active-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Personal Attention
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#therapyAccordion">
                                        <div class="accordion-body pt-0">
                                            Your sessions are fully focused on you - your experiences, emotions, and personal goals - ensuring
                                            support that feels attentive, respectful, and truly individualized.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Safe, Confidential Space
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#therapyAccordion">
                                        <div class="accordion-body pt-0">
                                            We provide a secure environment where you can express yourself freely without judgment.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Tailored Coping Strategies
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#therapyAccordion">
                                        <div class="accordion-body pt-0">
                                            Develop practical tools and techniques specifically designed for your unique challenges.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Long-Term Emotional Stability
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#therapyAccordion">
                                        <div class="accordion-body pt-0">
                                            Build a foundation for lasting mental health and resilience through consistent therapeutic work.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                                <div class="col-md-4">
                                    <div class="therapist-card-simple bg-white rounded-4 shadow-sm overflow-hidden">
                                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=600" alt="Dr. Emily Carter" class="w-100">
                                        <div class="p-3">
                                            <h4 class="mb-1 fs-6 fw-bold">DR. EMILY CARTER, PHD</h4>
                                            <p class="text-muted small mb-0">Clinical Psychologist</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="therapist-card-simple bg-white rounded-4 shadow-sm overflow-hidden">
                                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=600" alt="Michael Johnson" class="w-100">
                                        <div class="p-3">
                                            <h4 class="mb-1 fs-6 fw-bold">MICHAEL JOHNSON, LCSW</h4>
                                            <p class="text-muted small mb-0">Licensed Clinical Social Worker</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="therapist-card-simple bg-white rounded-4 shadow-sm overflow-hidden">
                                        <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?auto=format&fit=crop&w=600" alt="Dr. Sarah Mitchell" class="w-100">
                                        <div class="p-3">
                                            <h4 class="mb-1 fs-6 fw-bold">DR. SARAH MITCHELL, PSYD</h4>
                                            <p class="text-muted small mb-0">Licensed Professional Counselor</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="view-all-link text-dark fw-bold">View All Doctors <span>&rarr;</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Navigation -->
            <div class="service-navigation mt-5 pt-5 border-top d-flex justify-content-between align-items-center">
                <a href="#" class="nav-prev d-flex align-items-center text-decoration-none text-dark">
                    <span class="nav-icon rounded-circle bg-light d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;"><i class="bi bi-arrow-left"></i></span>
                    <h4 class="mb-0 serif-font">Couples Therapy</h4>
                </a>
                <a href="#" class="nav-next d-flex align-items-center text-decoration-none text-dark">
                    <h4 class="mb-0 serif-font me-3">Self-Esteem Counseling</h4>
                    <span class="nav-icon rounded-circle bg-light d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;"><i class="bi bi-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </section>
</div>
@endsection
