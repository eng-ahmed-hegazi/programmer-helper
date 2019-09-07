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
                <h2 class="card__header" style="color: #fff">Login</h2>
                <div class="card__body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input id="email" type="text" class="form-control input" placeholder="Enter Email Address | Phone" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            <i class="form-group__bar"></i>
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" placeholder="Enter Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} input" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                            <i class="form-group__bar"></i>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                <i class="input-helper"></i>
                            </label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
@endsection
