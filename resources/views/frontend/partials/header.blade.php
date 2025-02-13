<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="cube-desc" content=""/>
    <meta name="keywords" content="{{$page->meta_keywords??$course->meta_keywords??$blog->meta_keywords??''}}"/>
    <meta name="description"
          content="{{$page->meta_description??$course->meta_description??$blog->meta_description??''}}"/>
    <meta name="title" content="{{$page->meta_title??$course->meta_title??$blog->meta_title??''}}"/>
    {!! $page?->og_tags??'' !!}
    <link href="{{asset('assets/frontend/img/favicon.png')}}" rel="icon">
    <title> {{$page->meta_title??$course->meta_title??$blog->meta_title??getConfigTableData()?->company_name??''}}</title>
    <link href="{{asset('frontend/img/favicon.png')}}" rel="icon">
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"> -->
    <link rel="stylesheet"
          href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet"
          href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="{{asset('frontend/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{asset('frontend/css/hirelios.min.css')}}" rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js')}}"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <!<[endif]-->
</head>
