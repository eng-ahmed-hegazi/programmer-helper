@extends('layouts.application')
@section('content')
    <div class="col-lg-6">
        <div class="card">
            <h2 class="card__header" style="color: #fff">Join Our Community </h2>
            <div class="card__body">
                <div class="photos photos--profile">
                    <div class="lightbox">

                        <div data-src="demo/img/gallery/1.jpg" class="col-md-2 col-sm-3 col-xs-4">
                            <div class="lightbox__item">
                                <img src="demo/img/gallery/thumbs/1.jpg" alt="">
                            </div>
                        </div>

                        <div data-src="demo/img/gallery/2.jpg" class="col-md-2 col-sm-3 col-xs-4">
                            <div class="lightbox__item">
                                <img src="demo/img/gallery/thumbs/2.jpg" alt="">
                            </div>
                        </div>

                        <div data-src="demo/img/gallery/3.jpg" class="col-md-2 col-sm-3 col-xs-4">
                            <div class="lightbox__item">
                                <img src="demo/img/gallery/thumbs/3.jpg" alt="">
                            </div>
                        </div>

                        <div data-src="demo/img/gallery/4.jpg" class="col-md-2 col-sm-3 col-xs-4">
                            <div class="lightbox__item">
                                <img src="demo/img/gallery/thumbs/4.jpg" alt="">
                            </div>
                        </div>

                        <div data-src="demo/img/gallery/5.jpg" class="col-md-2 col-sm-3 col-xs-4">
                            <div class="lightbox__item">
                                <img src="demo/img/gallery/thumbs/5.jpg" alt="">
                            </div>
                        </div>
                        <div data-src="demo/img/gallery/6.jpg" class="col-md-2 col-sm-3 col-xs-4">
                            <div class="lightbox__item">
                                <img src="demo/img/gallery/thumbs/6.jpg" alt="">
                            </div>
                        </div>
                        <div data-src="demo/img/gallery/7.jpg" class="col-md-2 col-sm-3 col-xs-4">
                            <div class="lightbox__item">
                                <img src="demo/img/gallery/thumbs/7.jpg" alt="">
                            </div>
                        </div>
                        <div data-src="demo/img/gallery/8.jpg" class="col-md-2 col-sm-3 col-xs-4">
                            <div class="lightbox__item">
                                <img src="demo/img/gallery/thumbs/8.jpg" alt="">
                            </div>
                        </div>
                        <div data-src="demo/img/gallery/9.jpg" class="col-md-2 col-sm-3 col-xs-4">
                            <div class="lightbox__item">
                                <img src="demo/img/gallery/thumbs/9.jpg" alt="">
                            </div>
                        </div>
                        <div data-src="demo/img/gallery/10.jpg" class="col-md-2 col-sm-3 col-xs-4">
                            <div class="lightbox__item">
                                <img src="demo/img/gallery/thumbs/10.jpg" alt="">
                            </div>
                        </div>
                        <div data-src="demo/img/gallery/11.jpg" class="col-md-2 col-sm-3 col-xs-4">
                            <div class="lightbox__item">
                                <img src="demo/img/gallery/thumbs/11.jpg" alt="">
                            </div>
                        </div>
                        <div data-src="demo/img/gallery/12.jpg" class="col-md-2 col-sm-3 col-xs-4">
                            <div class="lightbox__item">
                                <img src="demo/img/gallery/thumbs/12.jpg" alt="">
                            </div>
                        </div>
                        <div data-src="demo/img/gallery/8.jpg" class="col-md-2 col-sm-3 col-xs-4">
                            <div class="lightbox__item">
                                <img src="demo/img/gallery/thumbs/8.jpg" alt="">
                            </div>
                        </div>
                        <div data-src="demo/img/gallery/9.jpg" class="col-md-2 col-sm-3 col-xs-4">
                            <div class="lightbox__item">
                                <img src="demo/img/gallery/thumbs/9.jpg" alt="">
                            </div>
                        </div>
                        <div data-src="demo/img/gallery/10.jpg" class="col-md-2 col-sm-3 col-xs-4">
                            <div class="lightbox__item">
                                <img src="demo/img/gallery/thumbs/10.jpg" alt="">
                            </div>
                        </div>
                        <div data-src="demo/img/gallery/11.jpg" class="col-md-2 col-sm-3 col-xs-4">
                            <div class="lightbox__item">
                                <img src="demo/img/gallery/thumbs/11.jpg" alt="">
                            </div>
                        </div>
                        <div data-src="demo/img/gallery/12.jpg" class="col-md-2 col-sm-3 col-xs-4">
                            <div class="lightbox__item">
                                <img src="demo/img/gallery/thumbs/12.jpg" alt="">
                            </div>
                        </div>
                        <div data-src="demo/img/gallery/12.jpg" class="col-md-2 col-sm-3 col-xs-4">
                            <div class="lightbox__item">
                                <img src="demo/img/gallery/thumbs/12.jpg" alt="">
                            </div>
                        </div>



                    </div>
                </div>

                <div class="text-center m-t-30">
                    <a href="#" class="btn btn--icon-text btn-default"><i class="zmdi zmdi-refresh-alt"></i> Load More...</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">

        <div class="card">
            <h2 class="card__header" style="color: #fff">Register New Vistor</h2>
            <div class="card__body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                            <input id="name" type="text" class="input form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required placeholder="Enter The Username">

                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif

                    </div>

                    <div class="form-group row">
                            <input id="email" type="email" class="input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Enter The Email Address">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                    </div>
                    <div class="form-group row">
                        <input id="phone" type="text" class="input form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required placeholder="Enter Your Phone">

                        @if ($errors->has('phone'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="form-group row">

                            <input id="password" type="password" class="input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Enter Strong Password">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif

                    </div>

                    <div class="form-group row">
                            <input id="password-confirm" type="password" class="input form-control" name="password_confirmation" required placeholder="Enter Password Again">
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
