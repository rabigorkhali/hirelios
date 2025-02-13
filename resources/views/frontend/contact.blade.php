@extends('frontend.partials.master')
@section('content')
    <div class="ibanner">
        <div class="container-fluid ">
            <div class="row align-items-center">
                <div class="col-md-6 ps-0">
                    <img src="img/contact.png" class="img-fluid w-100" alt="">
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center order-2">
                    <div class="title">
                        <h1>We'd love to hear from you!</h1>
                        <form action="{{route('contactSave')}}" method="post">
                            @csrf
                            <div class="input-group my-4">
                                <input type="text" required placeholder="First Name" name="first_name"
                                       class="form-control" value="{{ old('first_name') }}">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>

                                @if ($errors->has('first_name'))
                                    <small class="text-danger">{{ $errors->first('first_name') }}</small>
                                @endif
                            </div>
                            <div class="input-group my-4">
                                <input type="text" required placeholder="Last Name" name="last_name"
                                       class="form-control" value="{{ old('last_name') }}">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                @if ($errors->has('last_name'))
                                    <small class="text-danger">{{ $errors->first('last_name') }}</small>
                                @endif
                            </div>
                            <div class="input-group my-4">
                                <input type="text" required placeholder="Mobile Number" name="mobile_number"
                                       class="form-control" value="{{ old('mobile_number') }}">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>

                                @if ($errors->has('mobile_number'))
                                    <small class="text-danger">{{ $errors->first('mobile_number') }}</small>
                                @endif
                            </div>
                            <div class="input-group my-4">
                                <input type="email" required placeholder="Email" name="email"
                                       class="form-control" value="{{ old('email') }}">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                @if ($errors->has('email'))
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                @endif
                            </div>
                            <div class="input-group my-4">
                                <textarea required placeholder="Message" name="message" id="" rows="5"
                                          class="form-control">{{ old('message') }}</textarea>
                                <span class="input-group-text"><i class="fas fa-comment-alt"></i></span>

                                @if ($errors->has('message'))
                                    <small class="text-danger">{{ $errors->first('message') }}</small>
                                @endif
                            </div>

                            <input type="submit" value="Submit" class="btn btn-dark mt-4">
                        </form>
                    </div>
                    <div class="v-title">
                        <p>Contact</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="img-area">
            <!-- <div class="fill" style="background-image: linear-gradient(rgba(0, 0, 0, 0) 0px, rgba(11, 11, 13, 0) 37%, rgba(29, 31, 36, 0.5) 100%), url('../img/1.avif');"></div> -->
            <!-- <img src="img/building.jpg" class="" alt="" title=""> -->
        </div>
    </div>

    <div class="map mt-5">
        <iframe
            src="{{getConfigTableData()?->map_url??'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d310.5202199509973!2d0.06405!3d51.491899!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a90649b8f7a5%3A0x92769279b4fd0982!2sThe%20Woolwich%20College!5e0!3m2!1sen!2sus!4v1733390624346!5m2!1sen!2sus'}}"
            width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
