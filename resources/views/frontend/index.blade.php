@extends('frontend.partials.master')
@section('content')
    <div class="banner">
        <div class="owl-carousel owl-theme">
            <div class="item rd-item">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-5">
                            <h1>Redefining Recruitment by Empowering Connections</h1>
                            <p>We focus on creating strong connections, delivering innovative solutions, and
                                transforming
                                recruitment for businesses and job seekers.</p>
                            <a href="{{route('contact')}}" class="btn btn-theme-gradient">Join Now</a>
                        </div>
                        <div class="col-md-7">
                            <img src="{{asset('frontend/img/banner/1.jpg')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('.owl-carousel').owlCarousel({
                loop: false,
                nav: false,
                animateOut: 'fadeOut',
                responsive: {
                    0: {
                        items: 1
                    }
                }
            })
        </script>
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
    <div class="about rd-pad">
        <div class="container">
            <div class="row d-flex align-items-start">
                <div class="col-md-7">
                    <div class="position-relative">
                        <img src="{{asset('frontend/img/about/1.png')}}" class="img-fluid img1" alt="">
                        <img src="{{asset('frontend/img/about/2.png')}}" class="img-fluid img2" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="title">
                        <span>About Hirelios</span>
                        <h2>Transforming Careers and Connecting Talent to Success</h2>
                    </div>
                    <p class="mb-5">{{getConfigTableData()?->description}}</p>
                    <a href="#" class="btn btn-dark">Build with us <i class="fas fa-arrow-right fa-rotate-45"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="process">
        <div class="container">
            <div class="row g-0">
                <div class="col">
                    <div class="w-75">
                        <div class="step-box">
                            <span class="w-7px h-7px bg-dark-gray border-radius-100"></span>
                        </div>
                        <h3>Over 1336+ Successful Connections Across the Globe.</h3>
                        <p>We connect the right talent with the perfect job opportunities tailored to your skills and
                            goals.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="w-75">
                        <div class="step-box">
                            <span class="w-7px h-7px bg-dark-gray border-radius-100"></span>
                        </div>
                        <h3>Over 1336+ Successful Connections Across the Globe.</h3>
                        <p>We connect the right talent with the perfect job opportunities tailored to your skills and
                            goals.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="w-75">
                        <div class="step-box">
                            <span class="w-7px h-7px bg-dark-gray border-radius-100"></span>
                        </div>
                        <h3>Over 1336+ Successful Connections Across the Globe.</h3>
                        <p>We connect the right talent with the perfect job opportunities tailored to your skills and
                            goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="services rd-pad mb-5">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-4">
                    <div class="title">
                        <span>Our Services</span>
                        <h2>Empowering Job Seekers to Stand Out and Secure Top Opportunities</h2>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="true"
                                        aria-controls="flush-collapseOne">
                                    Job Seeker Support
                                </button>
                            </h3>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                 data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Personalized job matching, resume uploads, and
                                    career-building
                                    resources to help job seekers find the right fit.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                    Customized Employer Solutions
                                </button>
                            </h3>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion
                                    body. Let's imagine this being filled with some actual content.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                    Talent Pool Access
                                </button>
                            </h3>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                    accordion
                                    body. Nothing more exciting happening here in terms of content, but just filling up
                                    the
                                    space to make it look, at least at first glance, a bit more representative of how
                                    this
                                    would look in a real-world application.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseFour">
                                    Talent Pool Access
                                </button>
                            </h3>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                    accordion
                                    body. Nothing more exciting happening here in terms of content, but just filling up
                                    the
                                    space to make it look, at least at first glance, a bit more representative of how
                                    this
                                    would look in a real-world application.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cta">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Discover Your Dream Job and Take the Next Step Today!</h3>
                            <a href="#" class="btn btn-light mt-4">Build with us <i
                                    class="fas fa-arrow-right fa-rotate-45"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($testimonials->count())
        <section class="testimonials rd-pad mb-5">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-4">
                        <div class="title">
                            <span>Testimonials</span>
                            <h2>We are trusted by our clients</h2>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="owl-carousel owl-theme">
                            @foreach($testimonials as $tesimonialDatum)
                                <div class="item">
                                    <div class="row align-items-start g-5">
                                        <div class="col-11">
                                            <p>{{$tesimonialDatum->message}} </p>
                                            <span class="mt-3">— {{$tesimonialDatum->name}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <script>
                            $('.owl-carousel').owlCarousel({
                                loop: false,
                                nav: false,
                                animateOut: 'fadeOut',
                                responsive: {
                                    0: {
                                        items: 1
                                    }
                                }
                            })
                        </script>
                    </div>
                </div>
            </div>
        </section>
    @endif

@endsection
