<footer>
    <div class="container">
        <div class="row g-5 justify-content-center">
            <div class="col-md-4">
                <a href="#"><img src="{{asset('frontend/img/hirelios.svg')}}" class="img-fluid w-50" alt=""></a>
                <p class="my-3">Lorem ipsum dolor sit amet consectetur adipiscing elit aliquam</p>
                <ul class="social">
                    <li><a href="{{getConfigTableData()?->facebook_url}}"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="{{getConfigTableData()?->twitter_url}}"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="{{getConfigTableData()?->instagram_url}}"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="{{getConfigTableData()?->linkedin_url}}"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="{{getConfigTableData()?->youtube_url}}"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <span class="title">Menu</span>
                        <ul class="category">
                            <li><a href="#">Work with Us</a></li>
                            <li><a href="#">Partner with Us</a></li>
                            <li><a href="#">International Internship</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Downloads</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <span class="title">Legal</span>
                        <ul class="category">
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Enquire Now</a></li>
                            <li><a href="#">Apply Now</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Coronavirus Information</a></li>
                            <li><a href="#">International Mobility Programme</a></li>
                            <li><a href="#">Data Protection Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <span class="title">Contact Us</span>
                        <address>
                            <div class="d-flex align-items-center mb-4">
                                <i class="fas fa-phone me-2 fa-2x"></i>
                                <p>
                                    {{getConfigTableData()?->primary_phone_number}}
                                </p>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <i class="fas fa-envelope me-2 fa-2x"></i>
                                <p>{{getConfigTableData()?->email}}
                                </p>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-map-marker me-2 fa-2x"></i>
                                <p>{{getConfigTableData()?->address_line_1}}
                                </p>
                            </div>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <div class="fbtm py-3">
            <div class="row d-flex align-items-center">
                <div class="col-auto">
                    <span>{{getConfigTableData()?->all_rights_reserved_text}} </span>
                </div>
                <div class="col">
                    <ul>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</footer>

<a href="javascript:void(0)" class="back-to-top bounce" id="back-top"> <i class="las la-arrow-up"></i></a>
<!-- /back to top -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body bg-dark p-5 text-white">
                <div class="position-absolute top-0 start-100 translate-middle rd-close-btn">
                    <button type="button" class="btn btn-sm" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fas fa-times"></i></button>
                </div>
                <p class="fs-3 py-3">Search</p>
                <div class="input-group search" itemscope itemtype="https://schema.org/WebSite">
                    <meta itemprop="url" content="https://www.thebritishcollege.edu.np/"/>
                    <form class="d-flex w-100" itemprop="potentialAction" itemscope
                          itemtype="https://schema.org/SearchAction">
                        <meta itemprop="target"
                              content="https://www.thebritishcollege.edu.np/search?q={search_term_string}"/>
                        <button class="btn" type="button" id="search"><i class="fas fa-search"></i></button>
                        <input itemprop="query-input" type="text" id="Search" name="search_term_string"
                               class="form-control" placeholder="type here.." aria-describedby="search" required>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/techie.js"></script>
<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r83/three.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script> -->
