@extends('frontend.partials.master')
@section('content')
    <div class="ibanner">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-12">
                    <div class="title p-0">
                        <h1>{{$page->title}}</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="img-area">
            <!-- <div class="fill" style="background-image: linear-gradient(rgba(0, 0, 0, 0) 0px, rgba(11, 11, 13, 0) 37%, rgba(29, 31, 36, 0.5) 100%), url('../img/1.avif');"></div> -->
            <!-- <img src="img/building.jpg" class="" alt="" title=""> -->
        </div>
    </div>


    <div class="main-cont pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    {!! $page->body !!}

                </div>
            </div>
        </div>
    </div>
@endsection
