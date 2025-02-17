@extends('frontend.partials.master')
@section('content')
    <div class="ibanner">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6">
                    <div class="title p-0">
                        <h1>Discover Insights and Updates on Our Blog</h1>
                    </div>
                </div>
                <div class="col-md-5">
                    <p>We offer personalized job opportunities and connect talent with the right employers. Our platform
                        simplifies job searching and recruitment.</p>
                </div>
            </div>
        </div>

        <div class="img-area">
            <!-- <div class="fill" style="background-image: linear-gradient(rgba(0, 0, 0, 0) 0px, rgba(11, 11, 13, 0) 37%, rgba(29, 31, 36, 0.5) 100%), url('../img/1.avif');"></div> -->
            <!-- <img src="img/building.jpg" class="" alt="" title=""> -->
        </div>
    </div>

    <div class="main-cont">
        <div class="container">
            <div class="row g-5 news-list">
                @foreach($blogs as $blogDatum)
                    <div class="col-md-4">
                        <div class="img-area">
                            <a href="{{route('blogDetails',$blogDatum->slug)}}"><img src="{{asset(str_replace('.','-medium.',$blogDatum->image))}}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="n-wrap bg-light p-4">
                            <span>{{$blogDatum->created_at->format('F d, Y')}}</span>
                            <h4><a href="{{route('blogDetails',$blogDatum->slug)}}">{{$blogDatum->title}}</a></h4>
                            <p class="t-line mb-4">{!! trim(strip_tags(html_entity_decode(str_replace('&nbsp;', ' ', $blogDatum->body), ENT_QUOTES, 'UTF-8'))) !!}</p>
                            <a href="{{route('blogDetails',$blogDatum->slug)}}"><span class="readmore">Read More</span> <i
                                    class="fas fa-arrow-right fa-rotate-45"></i></a>
                        </div>
                    </div>
                @endforeach
                <div class="col-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
