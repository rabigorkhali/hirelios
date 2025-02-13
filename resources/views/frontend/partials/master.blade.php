<!doctype html>
<html>
@include('frontend.partials.header')
<body>

<!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Offcanvas - right <i class="las la-battery-three-quarters"></i></button> -->
@include('frontend.partials.navbar')

@yield('content')

@include('frontend.partials.footer')

@include('frontend.partials.script')
</body>
</html>
