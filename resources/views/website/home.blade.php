@extends('layouts.website')

@section('content')

<div class="site-section bg-light hero-area">
    <div class="container-fluid">
        <div class="row align-items-stretch retro-layout-2">
            <div class="col-lg-12">
                <div class="hero-bg">
                    <img class="img-fluid" src="{{ asset('uploads/bg/hero-bg.jpg')}}" class="" alt="">
                    <div class="hero-text-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="hero-text " data-aos="fade-left">
                                        <div class="txt1">
                                            <h6>Welcome To Our</h6>
                                        </div>
                                        <div class="txt2">
                                            <h1>TRAVEL AGENCY</h1>
                                        </div>
                                        <div class="txt3">
                                            <p>Get Hired by Higher Class Company Inside The Gulf Countries with VISA</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="about-us-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about-us-img-wrap position-relative h-100" data-aos="fade-up">
                    <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('uploads/bg/about_bg_2.jpg')}}"
                        class="" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about-us-text" data-aos="fade-left">
                    <h6 class="section-title text-start mb-4">About Us</h6>
                    <h5 class="mb-2">What We do<span>?</span></h5>
                    <p class="mb-3">We are an employment agency that connects candidates directly with higher-class reliable companies to get an appropriate job.</p>
                    <h5 class="mb-2">For <span>Candidates</span></h5>
                    <p class="mb-3">We are offering thousands of job vacancies in the Kingdom Of Saudi Arabia and connecting candidates with higher-class companies with less expenses.</p>
                    <h5 class="mb-2">For <span>Employers</span></h5>
                    <p class="mb-3">We are offering thousands of job vacancies in the Kingdom Of Saudi Arabia and connecting candidates with higher-class companies with less expenses.</p>
                    <div class="read-more-btn">
                        <a class="btn" href="{{'/about'}}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our-service-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center" data-aos="fade-up">
                    <h6 class="bg-white px-3">Services</h6>
                    <h5 class="mb-5">Our Services</h5>
                </div>
            </div>
        </div>
        <div class="service-card">
            <div class="row">
                <div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item align-self-stretch rounded pt-3">
                        <div class="p-4">
                            <i class="fa-solid fa-briefcase"></i>
                            <h5>Job Offering</h5>
                            <p>We are offering different kinds of jobs with VISA in your destination country. We collects job vacancies from higher class trusted companies through our representaitives(al-wafid.com) and offer them for candidates.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item align-self-stretch rounded pt-3">
                        <div class="p-4">
                            <i class="fa-brands fa-cc-visa"></i>
                            <h5>VISA Processing</h5>
                            <p>We will process your VISA rapidly,If you have VISA with job, will process everything to reach your destination country with less expenses and necessary guideline.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item align-self-stretch rounded pt-3">
                        <div class="p-4">
                            <i class="fa-solid fa-building"></i>
                            <h5>Connect with Companies</h5>
                            <p>We will connect you with higher-class trusted companies, according to your qualification and according to companies requirements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="work-process">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center" data-aos="fade-up">
                    <h6 class="bg-white px-3">Process</h6>
                    <h5 class="mb-5">3 Easy Steps</h5>
                </div>
            </div>
        </div>
        <div class="process-step mt-5">
            <div class="row">
                <div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-card align-self-stretch border text-center pt-5 pb-4 px-4">
                        <div class="process-icon d-inline-flex align-items-center justify-content-center rounded-circle shadow">
                          <i class="fa-solid fa-3x fa-circle-info text-white"></i>
                        </div>
                        <h5 class="mt-4">Collect Information</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">We will collect job information from your selected company and you then justify it's validity before Visa processing.</p>
                    </div>
                </div> 
                <div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-card align-self-stretch border text-center pt-5 pb-4 px-4">
                        <div class="process-icon d-inline-flex align-items-center justify-content-center rounded-circle shadow">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Travel Agency</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Go to our representative travel agency and submit your passport,medical report to process necessary things to reach your destination country.</p>
                    </div>
                </div> 
                <div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-card align-self-stretch border text-center pt-5 pb-4 px-4">
                        <div class="process-icon d-inline-flex align-items-center justify-content-center rounded-circle shadow">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Pay Your Service Fee</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">To finish and finalizing your process within a short time, you are requested to pay your service fee ontime.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="offers-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" data-aos="fade-up">
                <div class="section-heading text-center">
                    <h6 class="bg-white px-3">Offer</h6>
                    <h5 class="mb-2">Our Special Offer</h5>
                    <p class="mb-5">We will ensure your appearance ontime in your workplace country by the Grace Of
                        Almighty with less expenses</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row d-flex justify-content-center">
     
                        <div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up">
                            <div class="card-basic align-self-stretch">
                                <div class="card-header header-basic">
                                    <h5>DO YOU NEED JOB&VISA WITH EMBASSY PROCESSING?</h5>
                                </div>
                                <div class="card-body">
                                    <p>You must have to select from "https://al-wafid.com" website by company</p>
                                    <div class="card-element-hidden-basic">
                                        <ul class="card-element-container">
                                            <li class="card-element">You will manage job from al-wafid.com by competing</li>
                                            <li class="card-element">You will manage Visa from Company</li>
                                            <li class="card-element">We will process your Visa</li>
                                        </ul>
                                        <button class="btn btn-basic mt-4">Read More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up">
                            <div class="card-basic align-self-stretch">
                                <div class="card-header header-basic">
                                    <h5>DO YOU HAVE JOB&VISA ONLY NEED EMBASSY PROCESSING?</h5>
                                </div>
                                <div class="card-body">
                                    <p>You must have to select from "https://al-wafid.com" website by company</p>
                                    <div class="card-element-hidden-basic">
                                        <ul class="card-element-container">
                                            <li class="card-element">You will manage job from al-wafid.com by competing</li>
                                            <li class="card-element">You will manage Visa from Company</li>
                                            <li class="card-element">We will process your Visa</li>
                                        </ul>
                                        <button class="btn btn-basic mt-4">Read More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
        

                    <div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up">
                        <div class="card-basic align-self-stretch">
                            <div class="card-header header-basic">
                                <h5>Do you have job&Visa only need embassy processing?</h5>
                            </div>
                            <div class="card-body">
                                <p>You must have to select from "https://al-wafid.com" website by company</p>
                                <div class="card-element-hidden-basic">
                                    <ul class="card-element-container">
                                        <li class="card-element">You will manage job from al-wafid.com by competing</li>
                                        <li class="card-element">You will manage Visa from Company</li>
                                        <li class="card-element">We will process your Visa</li>
                                    </ul>
                                    <button class="btn btn-basic mt-4">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection