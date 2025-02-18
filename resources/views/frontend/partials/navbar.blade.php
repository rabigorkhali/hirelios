
<style>
    .owl-stage {
        max-width: 10000px;
    }
</style>

<div class="offcanvas offcanvas-end offcanvas-menu" tabindex="-1" id="offcanvasRight"
     aria-labelledby="offcanvasRightLabel">
    <div class="text-start p-3">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
        <div class="p-3">
            <div class="row">
                <div class="col-md-6 align-self-end">
                    <h4 class="mb-3">Contact Us</h4>
                    <p><a href="tel:+971-585199542">+971-585199542</a></p>
                    <hr>
                    <h4 class="mb-3">Find Us</h4>
                    <p><a href="#">G-35, Block 2A, Knowledge Park, Dubai</a></p>
                    <hr>
                    <h4 class="mb-3">Connect With Us</h4>
                    <ul class="social">
                        <li><a href="#" class="bg-fb"><i class="lab la-facebook-f"></i></a></li>
                        <li><a href="#" class="bg-tw"><i class="lab la-twitter"></i></a></li>
                        <li><a href="#" class="bg-li"><i class="lab la-linkedin"></i></a></li>
                        <li><a href="#" class="bg-yt"><i class="lab la-youtube"></i></a></li>
                        <li><a href="#" class="bg-ig"><i class="lab la-instagram"></i></a></li>
                        <li><a href="#" class="bg-pi"><i class="lab la-pinterest"></i></a></li>
                        <li><a href="#" class="bg-tt"><i class="lab la-tiktok"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-6 border-start">
                    <div class="p-3 rd-scroll-menu">
                        <h4 class="mb-3">Other Links</h4>
                        <ul>
                            <li><a href="#">Accessibility</a></li>
                            <li><a href="#">Accommodation</a></li>
                            <li><a href="#">Alumni</a></li>
                            <li><a href="#">Archive</a></li>
                            <li><a href="#">Clearing</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Graduation</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Library</a></li>
                            <li><a href="#">Merchandise</a></li>
                            <li><a href="#">MyBeckett</a></li>
                            <li><a href="#">MyHub</a></li>
                            <li><a href="#">Schools and Colleges</a></li>
                            <li><a href="#">Skills for Learning</a></li>
                            <li><a href="#">Sport and Active Lifestyles</a></li>
                            <li><a href="#">Staff Site</a></li>
                            <li><a href="#">Student information</a></li>
                            <li><a href="#">Students' Union</a></li>
                            <li><a href="#">Teaching and Learning Resources</a></li>
                            <li><a href="#">Accessibility</a></li>
                            <li><a href="#">Accommodation</a></li>
                            <li><a href="#">Alumni</a></li>
                            <li><a href="#">Archive</a></li>
                            <li><a href="#">Clearing</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Graduation</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Library</a></li>
                            <li><a href="#">Merchandise</a></li>
                            <li><a href="#">MyBeckett</a></li>
                            <li><a href="#">MyHub</a></li>
                            <li><a href="#">Schools and Colleges</a></li>
                            <li><a href="#">Skills for Learning</a></li>
                            <li><a href="#">Sport and Active Lifestyles</a></li>
                            <li><a href="#">Staff Site</a></li>
                            <li><a href="#">Student information</a></li>
                            <li><a href="#">Students' Union</a></li>
                            <li><a href="#">Teaching and Learning Resources</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> <!-- /Right Offcanvas-->

<div class="offcanvas offcanvas-top offset-search" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
    <div class="p-3 text-end">
        <button type="button" class="btn-close text-end" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            <div class="col-md-2">
                <img src="{{asset('frontend/img/5166950.jpg')}}" class="img-fluid" style="height:90vh; width: 100%; object-fit: cover;"
                     alt="">
            </div>
            <div class="col-md-10">
                <div class="p-4">
                    <p>I am looking for...</p>
                    <div class="mt-2">
                        <input type="radio" class="btn-check" name="type" id="search-type-course" autocomplete="off"
                               wire:model="type" wire:change="searchContent" value="course">
                        <label class="btn btn-outline-dark btn-lg ms-2" for="search-type-course">Courses</label>
                        <input type="radio" class="btn-check" name="type" id="search-type-news" autocomplete="off"
                               wire:model="type" wire:change="searchContent" value="news">
                        <label class="btn btn-outline-dark btn-lg ms-2" for="search-type-news">News</label>
                        <input type="radio" class="btn-check" name="type" id="search-type-page" autocomplete="off"
                               wire:model="type" wire:change="searchContent" value="page">
                        <label class="btn btn-outline-dark btn-lg ms-2" for="search-type-page">Page</label>
                        <input type="radio" class="btn-check" name="type" id="search-type-blog" autocomplete="off"
                               wire:model="type" wire:change="searchContent" value="blog">
                        <label class="btn btn-outline-dark btn-lg ms-2" for="search-type-blog">Blogs</label>
                        <input type="radio" class="btn-check" name="type" id="search-type-event" autocomplete="off"
                               wire:model="type" wire:change="searchContent" value="event">
                        <label class="btn btn-outline-dark btn-lg ms-2" for="search-type-event">Event</label>
                    </div>
                    <div class="my-5">
                        <input type="search" autocomplete="off" autocapitalize="on" wire:model="search" name="search"
                               class="form-control form-control-lg rd-search" autofocus=""
                               placeholder="Type here to search.." wire:keyup.debounce.500ms="searchContent">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>MOST POPULAR</p>
                        </div>
                        <div class="col-md-4">
                            <ul>
                                <li><a href="#">Short Courses and CPD</a></li>
                                <li><a href="#">Distance Learning Courses</a></li>
                                <li><a href="#">Subjects</a></li>
                                <li><a href="#">Postgraduate Courses</a></li>
                                <li><a href="#">Undergraduate Courses</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul>
                                <li><a href="#">Short Courses and CPD</a></li>
                                <li><a href="#">Distance Learning Courses</a></li>
                                <li><a href="#">Subjects</a></li>
                                <li><a href="#">Postgraduate Courses</a></li>
                                <li><a href="#">Undergraduate Courses</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /Search -->

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop"
     aria-labelledby="offcanvasWithBackdropLabel">
    <div class="offcanvas-header">
        <div class="logo">
            <a href="#"><img src="{{asset('frontend/img/logo.jpg')}}" class="img-fluid" alt=""></a>
        </div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Staff</a></li>
                    <li><a href="#">Message from Principal</a></li>
                </ul>
            </li>
            <li><a href="#">Courses</a></li>
            <li><a href="#">Admissions</a></li>
            <li><a href="#">Students</a></li>
            <li><a href="#">Scholarships</a></li>
            <li><a href="#">Apply</a></li>
            <li><a href="#">International</a></li>
        </ul>
    </div>
    <div class="offcanvas-footer">
        <ul class="social">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-facebook-messenger"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div>
</div> <!-- /nav mobile -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="600" src="https://www.youtube.com/embed/vWwHkgzJJGI"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<header class="show-mb">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-4 logo">
                <a href="{{url('/')}}"><img src="{{asset('frontend/img/hirelios.svg')}}" class="img-fluid" alt=""></a>
            </div>
            <div class="col-8">
                <ul class="justify-content-end">
                    <li>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        </div>
                    </li>
                    <li><a href="#"><i class="las la-search"></i></a></li>
                    <li><a href="#"><i class="las la-bars"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<header class="hide-mb rd-display">
    <div class="container">
        <div class="row d-flex align-items-stretch justify-content-center">
            <div class="col-md-2">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="{{asset('frontend/img/hirelios.svg')}}" class="img-fluid" alt=""></a>
                </div>
            </div>
            <nav class="col-md-10">
                <ul>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('services')}}">Services</a></li>
                    <li><a href="{{route('blogs')}}">Blogs</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
