@extends('front-layout.app')
@section('title', 'Dr. Emily Carter, PhD')
@section('content')
<section class="therapist-profile-header section-padding-medium" data-aos="fade-up" style="background-color: #F8FBFB">
    <div class="container container-lg">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <div class="profile-header-content">
                    <span class="badge bg-light text-muted px-3 py-2 rounded-pill mb-3 text-uppercase fw-bold" style="font-size: 0.7rem; letter-spacing: 1px;" >Clinical Psychologist</span>
                    <h1 class="profile-name serif-font mb-4" style="font-size: 3.5rem; color: #2C4A4A;">Dr. Emily Carter, PhD</h1>

                    <div class="contact-info-list mb-4" style="font-size: 1.1rem;">
                        <div class="contact-item d-flex py-3 border-bottom">
                            <span class="text-muted me-4" style="min-width: 60px;">Phone:</span>
                            <span class="fw-bold">+ (012) 3711 914</span>
                        </div>
                        <div class="contact-item d-flex py-3 border-bottom">
                            <span class="text-muted me-4" style="min-width: 60px;">Office:</span>
                            <span class="fw-bold">+ (012) 5410 139</span>
                        </div>
                        <div class="contact-item d-flex py-3 border-bottom">
                            <span class="text-muted me-4" style="min-width: 60px;">Email:</span>
                            <span class="fw-bold">e.sample@tr.com</span>
                        </div>
                    </div>

                    <div class="social-links d-flex align-items-center gap-3 mt-4">
                        <div class="d-flex gap-3">
                            <a href="#" class="social-icon rounded-circle bg-white shadow-sm d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; color: #333;"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="social-icon rounded-circle bg-white shadow-sm d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; color: #333;"><i class="bi bi-twitter-x"></i></a>
                            <a href="#" class="social-icon rounded-circle bg-white shadow-sm d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; color: #333;"><i class="bi bi-linkedin"></i></a>
                        </div>
                        <button class="btn-book">
                            <span class="btn-text" style="font-weight: bold; font-size: 16px;padding: 0.8em">Book a Session</span>
                            <span class="btn-arrow">&rarr;</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="profile-image-wrapper">
                    <img src="{{asset('front/images/80-doctor-1.webp')}}" alt="Dr. Emily Carter" class="img-fluid rounded-4 shadow-sm">
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
                        <button type="submit" class="btn btn-outline-dark rounded-pill w-100 fw-bold py-2">Book a Visit</button>
                    </form>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-8" data-aos="fade-up">
                <div class="profile-main-content">
                    <div class="biography-section mb-5">
                        <h2 class="section-title serif-font mb-4" style="color: #2C4A4A;">Short Biography</h2>
                        <p class="mb-4 text-muted" style="line-height: 1.8; font-size: 1.1rem;" >
                            I enjoy getting to know my patients and building meaningful relationships. I understand that each person is unique and that they have diverse cultural backgrounds, so I strive to actively listen and empower them to be an advocate for the health and wellness goals that are important to them. I'm dedicated to providing compassionate and individualized care by providing patient education and practicing evidence-based medicine. I'm passionate about practicing preventive medicine and helping my patients manage acute and chronic health conditions, mental health.
                        </p>
                        <p class="text-muted" style="line-height: 1.8;">
                            I find joy by doing almost any outdoor activity, including hiking, running, and exploring with our Berkshire. I enjoy spending time with family and friends. I also strive to live mindfully and intentionally by creating uplifting routines and relaxing rituals.
                        </p>
                    </div>

                    <div class="education-section mb-5" style="font-size: 1.1rem;">
                        <h2 class="section-title serif-font mb-4" style="color: #2C4A4A;">Education & Experience</h2>
                        <div class="table-responsive">
                            <table class="table border-bottom" >
                                <tbody >
                                    <tr >
                                        <td  class="ps-0 py-3 fw-bold text-dark border-top-0" style="width: 30%;background-color: #F2F6F5"><u>Education</u></td>
                                        <td class="py-3 text-muted border-top-0" style="background-color: #F2F6F5">Medical degree (M.D. or D.O.), Psychiatry residency (4 years)</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0 py-3 fw-bold text-dark" style="background-color: #F2F6F5">Board certification</td>
                                        <td class="py-3 text-muted" style="background-color: #F2F6F5">American Board of Psychiatry and Neurology (ABPN)</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0 py-3 fw-bold text-dark" style="background-color: #F2F6F5">Field of expertise</td>
                                        <td class="py-3 text-muted" style="background-color: #F2F6F5">Diagnosing and treating mental illnesses, Medication management</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0 py-3 fw-bold text-dark" style="background-color: #F2F6F5">Years of practice</td>
                                        <td class="py-3 text-muted" style="background-color: #F2F6F5">18</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="articles-section mb-5">
                        <h2 class="section-title serif-font mb-4" style="color: #2C4A4A;">Doctor's Articles</h2>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="article-card-simple bg-white rounded-4 shadow-sm overflow-hidden h-100 border-0">
                                    <div class="position-relative">
                                        <img src="https://images.unsplash.com/photo-1544027993-37dbfe43562a?auto=format&fit=crop&w=600" alt="Article 1" class="w-100 article-img">
                                        <span class="badge position-absolute bottom-0 start-0 m-3 px-3 py-2 rounded-pill text-uppercase fw-bold" style="background-color: #E8E2D5; color: #666; font-size: 0.6rem;">Anxiety Support</span>
                                    </div>
                                    <div class="p-4">
                                        <h4 class="serif-font mb-3 h5">Managing Anxiety with Online Therapy</h4>
                                        <a href="#" class="text-dark fw-bold text-decoration-none small">Read More &rarr;</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="article-card-simple bg-white rounded-4 shadow-sm overflow-hidden h-100 border-0">
                                    <div class="position-relative">
                                        <img src="https://images.unsplash.com/photo-1516062423079-7ca13cdc7f5a?auto=format&fit=crop&w=600" alt="Article 2" class="w-100 article-img">
                                        <span class="badge position-absolute bottom-0 start-0 m-3 px-3 py-2 rounded-pill text-uppercase fw-bold" style="background-color: #F8D7DA; color: #666; font-size: 0.6rem;">Teen Therapy</span>
                                    </div>
                                    <div class="p-4">
                                        <h4 class="serif-font mb-3 h5">Online Therapy for Teens: Support During Critical Years</h4>
                                        <a href="#" class="text-dark fw-bold text-decoration-none small">Read More &rarr;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Navigation -->
        <div class="profile-navigation mt-5 pt-5 border-top d-flex justify-content-between align-items-center">
            <a href="#" class="nav-prev d-flex align-items-center text-decoration-none text-dark group">
                <span class="nav-icon rounded-circle bg-light d-flex align-items-center justify-content-center me-3 transition-all" style="width: 40px; height: 40px;"><i class="bi bi-arrow-left"></i></span>
                <h4 class="mb-0 serif-font fs-6">Michael Johnson, LCSW</h4>
            </a>
            <a href="#" class="nav-next d-flex align-items-center text-decoration-none text-dark group">
                <h4 class="mb-0 serif-font fs-6 me-3">Sofia Klein, MA, LPC</h4>
                <span class="nav-icon rounded-circle bg-light d-flex align-items-center justify-content-center transition-all" style="width: 40px; height: 40px;"><i class="bi bi-arrow-right"></i></span>
            </a>
        </div>
    </div>
</section>

<style>
    /* Inline styles moved to style.css */
</style>
@endsection
