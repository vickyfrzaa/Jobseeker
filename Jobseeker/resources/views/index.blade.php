@extends('layouts.app')

@section('content')
<main class="main-area justify-content-center">
    <!-- area 1 -->
    <section id="area1" class="area-1 py-4">
        <div class="container">
            <div class="row g-2">
                <div class="col-lg-6 col-md-12 site-title">
                    <h3 class="title-text display-5">
                        We help you <p class="fw-bold">build your job portal</p>
                    </h3>
                    <p class="text-uppercase pt-4">
                        Why use third party when you can build your own, customizable job portal for your specific
                        requirements
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 banner-image">
                    <img src="img/1.png" alt="benner-img" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- area 2 -->
    <section id="area2" class="area-2">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-lg-12 col-md-12 about-title">
                    <h2 class="text-uppercase pt-5 font-weight-bold text-center">
                        Powered by
                        Applicant Tracking System
                    </h2>
                    <p class="text-uppercase pt-4 text-p">
                        Applicant Tracking System or ATS is software that streamlines and automates the end-to-end
                        recruitment process for an employer or recruiter from source to hire. 99% of Fortune 500
                        companies use ATS to make their hiring process faster, cheaper and more effective
                    </p>
                    <div class="button-get text-center pt-3">
                        <button type="button" class="btn-section text-white shadow p-2">
                            Get Started
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- area-3 -->
    <section class="area-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="title-judul text-white pt-5">Ready to build your own job portal?</h1>
                    <div class="button-get text-center pt-4">
                        <button type="button" class="btn-area3 text-white shadow">Get
                            Started</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End -->

    <!-- area-4 -->
    <section id="area-4" class="area-1 pt-4">
        <div class="container">
            <div class="row g-2">
                <div class="col-lg-6 col-md-12 banner-image">
                    <img src="img/3.png" alt="benner-img" class="img-fluid" />
                </div>
                <div class="col-lg-6 col-md-12 site-title">
                    <h3 class="title-text display-6">
                        High Quality Candidates
                    </h3>
                    <p class="title-muted text-uppercase pt-4">
                        Get more high quality candidates faster and at lower cost per hire
                    </p>
                    <a href="#" class="text-arrow">Get Started <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- area 5 -->
    <section id="profile" class="area-1 mb-3">
        <div class="container">
            <div class="row g-2">
                <div class="col-lg-6 col-md-12 site-title">
                    <h3 class="title-text display-6">
                        Saved Talent Pool
                    </h3>
                    <p class="title-muted text-uppercase pt-4">
                        Boost employer brand and build your own talent pool
                    </p>
                    <a href="#" class="text-arrow">Get Started <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
                <div class="col-lg-6 col-md-12 banner-image">
                    <img src="img/4.png" alt="benner-img" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- area 6 -->
    <section id="profile" class="area-1 py-4">
        <div class="container">
            <div class="row g-2">
                <div class="col-lg-6 col-md-12 banner-image">
                    <img src="img/5.png" alt="benner-img" class="img-fluid" />
                </div>
                <div class="col-lg-6 col-md-12 site-title">
                    <h3 class="title-text display-6">
                        Automated hiring Process & Insights
                    </h3>
                    <p class="title-muted text-uppercase pt-4">
                        Leverage insights from automated hiring process to win the war for talent
                    </p>
                    <a href="#" class="text-arrow">Get Started <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- area 7 -->
    <section class="area-7 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">
                        Search any jobs for You!
                    </h1>
                    <div class="row pt-3 justify-content-center">
                        <div class="col-md-12">
                            <div class="search-box">
                                <form class="search-form">
                                    <input class="form-control" id="search" name="search" placeholder="Position, City or Company Name" type="text" />
                                    <button class="search-btn">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End -->

    <!-- area 8 -->
    <section class="area-8 py-5">
        <div class="container">
            <div class="row g-2 justify-content-between">
                <div class="col-md-2">
                    <div class="available">
                        <h5 class="text-uppercase fw-bold">available jobs</h5>
                        <h6 class="text-capitalize pt-3">top 5 location</h6>
                        <h6 class="ms-3">Jakarta</h6>
                        <h6 class="ms-3">Surabaya</h6>
                        <h6 class="ms-3">Bali</h6>
                        <h6 class="ms-3">Tangerang</h6>
                        <h6 class="ms-3">Bandung</h6>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row justify-content-between py-5">
                        <div class="col-md-8">
                            <h3 class="text-capitalize fw-bold">marketing manager</h3>
                            <div class="d-flex">
                                <p class="fw-lighter">Requirements : </p>
                                <p class="fw-lighter mx-3">Bachelor Degree <br>
                                    Min. 5 years of experience
                                </p>
                            </div>
                            <div class="d-flex">
                                <p class="fw-lighter">Salary : </p>
                                <p class="fw-lighter result">IDR 10 -15 Millions
                                </p>
                            </div>
                            <cite title="Source Title" class="fw-lighter">Post 10 mins ago</cite>
                        </div>
                        <div class="col-md-2">
                            <div class="lokasi">
                                <a href="#" class="text-decoration-none daerah">Jakarta</a>
                            </div>
                            <div class="btn-job">
                                <button type="button" class="btn-apply pt-2">Apply Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between py-5">
                        <div class="col-md-8">
                            <h3 class="text-capitalize fw-bold">marketing manager</h3>
                            <div class="d-flex">
                                <p class="fw-lighter">Requirements : </p>
                                <p class="fw-lighter mx-3">Bachelor Degree <br>
                                    Min. 5 years of experience
                                </p>
                            </div>
                            <div class="d-flex">
                                <p class="fw-lighter">Salary : </p>
                                <p class="fw-lighter result">IDR 10 -15 Millions
                                </p>
                            </div>
                            <cite title="Source Title" class="fw-lighter">Post 10 mins ago</cite>
                        </div>
                        <div class="col-md-2">
                            <div class="lokasi">
                                <a href="#" class="text-decoration-none daerah">Jakarta</a>
                            </div>
                            <div class="btn-job">
                                <button type="button" class="btn-apply pt-2">Apply Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between py-5">
                        <div class="col-md-8">
                            <h3 class="text-capitalize fw-bold">marketing manager</h3>
                            <div class="d-flex">
                                <p class="fw-lighter">Requirements : </p>
                                <p class="fw-lighter mx-3">Bachelor Degree <br>
                                    Min. 5 years of experience
                                </p>
                            </div>
                            <div class="d-flex">
                                <p class="fw-lighter">Salary : </p>
                                <p class="fw-lighter result">IDR 10 -15 Millions
                                </p>
                            </div>
                            <cite title="Source Title" class="fw-lighter">Post 10 mins ago</cite>
                        </div>
                        <div class="col-md-2">
                            <div class="lokasi">
                                <a href="#" class="text-decoration-none daerah">Jakarta</a>
                            </div>
                            <div class="btn-job">
                                <button type="button" class="btn-apply pt-2">Apply Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between py-5">
                        <div class="col-md-8">
                            <h3 class="text-capitalize fw-bold">marketing manager</h3>
                            <div class="d-flex">
                                <p class="fw-lighter">Requirements : </p>
                                <p class="fw-lighter mx-3">Bachelor Degree <br>
                                    Min. 5 years of experience
                                </p>
                            </div>
                            <div class="d-flex">
                                <p class="fw-lighter">Salary : </p>
                                <p class="fw-lighter result">IDR 10 -15 Millions
                                </p>
                            </div>
                            <cite title="Source Title" class="fw-lighter">Post 10 mins ago</cite>
                        </div>
                        <div class="col-md-2">
                            <div class="lokasi">
                                <a href="#" class="text-decoration-none daerah">Jakarta</a>
                            </div>
                            <div class="btn-job">
                                <button type="button" class="btn-apply pt-2">Apply Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 btn-see">
                        <button class="btn btn-all text-white" type="button">See all vacancies</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->
</main>
<!-- END -->
@endsection
