@extends('frontend.partials.master')
@section('content')
    <div class="ibanner">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-12">
                    <div class="title p-0">
                        <h1>{{$blog->title}}</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="img-area">
            <!-- <div class="fill" style="background-image: linear-gradient(rgba(0, 0, 0, 0) 0px, rgba(11, 11, 13, 0) 37%, rgba(29, 31, 36, 0.5) 100%), url('../img/1.avif');"></div> -->
            <!-- <img src="img/building.jpg" class="" alt="" title=""> -->
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="img-area">
                    <img src="{{asset($blog->image)}}" class="img-fluid"
                         style="object-fit: cover; height: 50vh; width: 100%;" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="main-cont pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    {!! $blog->body !!}
                    @if($blogs->count())
                        <div class="related-news">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Related News</h3>
                                </div>
                                @foreach($blogs as $blogDatum)

                                    <div class="col-md-4">
                                        <div class="img-area">
                                            <a href="{{route('blogDetails',$blogDatum->slug)}}"><img
                                                    src="{{asset(str_replace('.','-medium.',$blogDatum->image))}}"
                                                    class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="n-wrap">
                                            <h4 class="d-line"><a
                                                    href="{{route('blogDetails',$blogDatum->slug)}}">{{$blogDatum->title}}</a>
                                            </h4>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
