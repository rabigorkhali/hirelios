@extends('frontend.partials.master')
@section('content')
    <div class="ibanner">
        <div class="container-fluid ">
            <div class="row align-items-center">
                <div class="col-md-6 ps-0">
                    <img src="{{asset('frontend/img/about/img.png')}}" class="img-fluid w-100" alt="">
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center order-2">
                    <div class="title">
                        <h1>Transforming Careers and Connecting Talent to Success</h1>
                        <p>{{getConfigTableData()->description??'We offer personalized job opportunities and connect talent with the right employers. Our
                            platform simplifies job searching and recruitment.Together, we drive success for both job
                            seekers and employers. Our platform simplifies job searching and recruitment.'}}</p>
                    </div>
                    <div class="v-title">
                        <p>About Hirelios</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="img-area">
            <!-- <div class="fill" style="background-image: linear-gradient(rgba(0, 0, 0, 0) 0px, rgba(11, 11, 13, 0) 37%, rgba(29, 31, 36, 0.5) 100%), url('../img/1.avif');"></div> -->
            <!-- <img src="{{asset('frontend/img/building.jpg')}}" class="" alt="" title=""> -->
        </div>
    </div>

    <div class="main-cont">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="title">
                        <h2>Years of Expertise, Delivering Recruitment Excellence</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="border-bottom py-4">
                        <div class="row">
                            <div class="col-md-5">
                                <h3>Personalized Job Matching</h3>
                            </div>
                            <div class="col-md-7">
                                <p>We offer tailored recruitment services for businesses, including temporary,
                                    permanent, and executive placements across industries.</p>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom py-4">
                        <div class="row">
                            <div class="col-md-5">
                                <h3>Customized Staffing Solutions</h3>
                            </div>
                            <div class="col-md-7">
                                <p>We offer tailored recruitment services for businesses, including temporary,
                                    permanent, and executive placements across industries.</p>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom py-4">
                        <div class="row">
                            <div class="col-md-5">
                                <h3>Career Development Support</h3>
                            </div>
                            <div class="col-md-7">
                                <p>Empowering job seekers with resume building, skill-enhancement resources, and
                                    personalized job search strategies.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        @foreach($teams as $teamDatum)
                            <div class="item">
                                <div class="img-area">
                                    <a href="#"><img src="{{asset($teamDatum->image)}}"
                                                     class="img-fluid w-100"
                                                     alt=""></a>
                                    <div class="team-info d-flex justify-content-between">
                                        <p><strong>{{$teamDatum->name}}</strong></p>
                                        <span>{{$teamDatum->designation}}</span>
                                    </div>
                                    <div class="t-social">
                                        <ul>
                                            <li><a href="{{$teamDatum->linkedin_url}}"><i
                                                            class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <script>
                        $('.owl-carousel').owlCarousel({
                            loop: true,
                            nav: false,
                            margin: 50,
                            animateOut: 'fadeOut',
                            responsive: {
                                0: {
                                    items: 2
                                },
                                600: {
                                    items: 3
                                },
                                1000: {
                                    items: 4
                                }
                            }
                        })
                    </script>
                </div>
            </div>
        </div>
    </div>

    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="border-start p-5">
                        <div>Placing Talent, Creating Opportunities</div>
                        <span class="number">1,336+</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="border-start p-5">
                        <div>Global Partnerships, Customized Solutions</div>
                        <span class="number">250+</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="border-start p-5">
                        <div>Expanding Talent, Meeting Demands</div>
                        <span class="number">1,500+</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="border-start p-5">
                        <div>Ensuring Excellence, Delivering Satisfaction</div>
                        <span class="number">95%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
