@extends('layouts.app')
@section('content')
    @include('admin.includes.errors')
    <div class="card" style="margin-bottom: 0;">
        <div class="card__header">
            <h4>Settings

            </h4>
        </div>
        <div class="card__body">
            <form action="{{route('settings.update')}}" method="post" class="form">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="site_name">SITE NAME</label>
                    <input type="text" value="{{$settings->site_name}}" name="site_name" placeholder="enter site name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="contact_number">CONTACT NUMBER</label>
                    <input type="text" value="{{$settings->contact_number}}" name="contact_number" placeholder="enter contact number" class="form-control">
                </div>
                <div class="form-group">
                    <label for="contact_email">CONTACT EMAIL</label>
                    <input type="email" value="{{$settings->contact_email}}" name="contact_email" placeholder="enter email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="contact_address">ADDRESS</label>
                    <input type="text" value="{{$settings->contact_address}}" name="contact_address" placeholder="enter name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="contact_facebook">FACEBOOK</label>
                    <input type="text" value="{{$settings->contact_facebook}}" name="contact_facebook" placeholder="enter name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="contact_twitter">TWITTER</label>
                    <input type="text" value="{{$settings->contact_twitter}}" name="contact_twitter" placeholder="enter name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="contact_youtube">YOUTUBE</label>
                    <input type="text" value="{{$settings->contact_youtube}}" name="contact_youtube" placeholder="enter name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="about">ABOUT</label>
                    <textarea placeholder="enter about" id="about" name="about" cols="5" rows="10" class="form-control">{{$settings->about}}</textarea>
                </div>
                <div class="formgroup text-center">
                    <input type="submit" value="Update Settings" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection
@section('style')
    <link rel="stylesheet" href="{{asset('css/summernote.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
@endsection
@section('scripts')
    <script src="{{asset('js/summernote.js')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('#about').summernote();
        });
    </script>
@endsection