@extends('frontend.partials.master')
@section('content')
    <div class="ibanner">
        <div class="container-fluid ">
            <div class="row align-items-center">
                <div class="col-md-6 ps-0">
                    <img src="{{asset('frontend/img/SIKA UK Headquaters Office - Interior Design Liqui Group.png')}}" class="img-fluid w-100"
                         alt="">
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center order-2">
                    <div class="title">
                        <h1>Tailored Solutions for Every Hire</h1>
                        <p>We offer personalized job opportunities and connect talent with the right employers. Our
                            platform simplifies job searching and recruitment.Together, we drive success for both job
                            seekers and employers. Our platform simplifies job searching and recruitment.</p>
                        <a href="#" class="btn btn-theme-gradient">Join Now</a>
                    </div>
                    <div class="v-title">
                        <p>Our Services</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="img-area">
            <!-- <div class="fill" style="background-image: linear-gradient(rgba(0, 0, 0, 0) 0px, rgba(11, 11, 13, 0) 37%, rgba(29, 31, 36, 0.5) 100%), url('../'img/1.avif');"></div> -->
            <!-- <img src="{{asset('frontend/img/building.jpg')}}" class="" alt="" title=""> -->
        </div>
    </div>

    <div class="main-cont">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-5">
                    <div class="title d-flex align-items-center m-0">
                        <div class="number pe-5">01</div>
                        <h2>Supporting Job Seekers Every Step</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>We offer personalized job opportunities and connect talent with the right employers. Our platform
                        simplifies job searching and recruitment.Together, we drive success for both job seekers and
                        employers. Our platform simplifies job searching and recruitment.</p>
                    <div class="d-flex align-items-center s-box">
                        <div class="me-3 flex-shrink-0">
                            <img src="{{asset('frontend/img/icon/cv.png')}}" class="img-fluid" alt="">
                        </div>
                        <div>
                            <h4>Interactive Resume Submission</h4>
                            <p>Drag-and-drop feature for resume upload.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center s-box">
                        <div class="me-3 flex-shrink-0">
                            <img src="{{asset('frontend/img/icon/career.png')}}" class="img-fluid" alt="">
                        </div>
                        <div>
                            <h4>Career Resources</h4>
                            <p>Blog posts, videos, and infographics on career tips, interview preparation, and industry
                                insights.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <img src="{{asset('frontend/img/icon/s1.png')}}" class="img-fluid w-100 mt-5" alt="">
                </div>
                <div class="col-md-5 my-5">
                    <img src="{{asset('frontend/img/icon/s2.png')}}" class="img-fluid w-100 mt-5" alt="">
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-md-5">
                    <div class="title d-flex align-items-center m-0">
                        <div class="number pe-5">02</div>
                        <h2>Supporting For Employers</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>We offer personalized job opportunities and connect talent with the right employers. Our platform
                        simplifies job searching and recruitment.Together, we drive success for both job seekers and
                        employers. Our platform simplifies job searching and recruitment.</p>
                    <div class="d-flex align-items-center s-box">
                        <div class="me-3 flex-shrink-0">
                            <img src="{{asset('frontend/img/icon/job.png')}}" class="img-fluid" alt="">
                        </div>
                        <div>
                            <h4>Post a Job</h4>
                            <p>Simple and intuitive form for job postings.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center s-box">
                        <div class="me-3 flex-shrink-0">
                            <img src="{{asset('frontend/img/icon/talent.png')}}" class="img-fluid" alt="">
                        </div>
                        <div>
                            <h4>Talent Insights</h4>
                            <p>Analytics dashboard showing the number of applicants, job views.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center s-box">
                        <div class="me-3 flex-shrink-0">
                            <img src="{{asset('frontend/img/icon/brand.png')}}" class="img-fluid" alt="">
                        </div>
                        <div>
                            <h4>Employer Branding</h4>
                            <p>Create company profiles showcasing culture, benefits, and testimonials.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <img src="{{asset('frontend/img/icon/s3.png')}}" class="img-fluid w-100 mt-5" alt="">
                </div>
                <div class="col-md-7 my-5">
                    <img src="{{asset('frontend/img/icon/s4.png')}}" class="img-fluid w-100 mt-5" alt="">
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-md-5">
                    <div class="title d-flex align-items-center m-0">
                        <div class="number pe-5">03</div>
                        <h2>Innovative Features to Differentiate</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>We offer personalized job opportunities and connect talent with the right employers. Our platform
                        simplifies job searching and recruitment.Together, we drive success for both job seekers and
                        employers. Our platform simplifies job searching and recruitment.</p>
                    <div class="d-flex align-items-center s-box">
                        <div class="me-3 flex-shrink-0">
                            <img src="{{asset('frontend/img/icon/video.png')}}" class="img-fluid" alt="">
                        </div>
                        <div>
                            <h4>Video Applications</h4>
                            <p>Allow job seekers to upload short intro videos along with resumes to stand out.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center s-box">
                        <div class="me-3 flex-shrink-0">
                            <img src="{{asset('frontend/img/icon/realtime.png')}}" class="img-fluid" alt="">
                        </div>
                        <div>
                            <h4>Real-Time Status Updates</h4>
                            <p>Let candidates track the status of their applications.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <img src="{{asset('frontend/img/icon/s5.png')}}" class="img-fluid w-100 mt-5" alt="">
                </div>
                <div class="col-md-5 mt-5">
                    <img src="{{asset('frontend/img/icon/s6.png')}}" class="img-fluid w-100 mt-5" alt="">
                </div>
            </div>

        </div>
    </div>
    @if($partners->count())
        <div class="client">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel">
                            @foreach($partners as $partnerDatum)
                                <div class="item">
                                    <img src="{{asset($partnerDatum->image)}}" class="img-fluid" alt="">
                                </div>
                            @endforeach
                        </div>
                        <script>
                            $('.owl-carousel').owlCarousel({
                                loop: true,
                                nav: false,
                                margin: 80,
                                animateOut: 'fadeOut',
                                autoWidth: true,
                                responsive: {
                                    0: {
                                        items: 2
                                    },
                                    600: {
                                        items: 3
                                    },
                                    1000: {
                                        items: 5
                                    }
                                }
                            })
                        </script>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
