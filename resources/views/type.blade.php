@extends('layouts.application')
@section('content')
    @foreach($resources as $resource)
        <h1 class="page-header">
            {{$resource->type->type}}

        </h1>
        @break
    @endforeach
    <div class="row" style="min-height: 403px">
@foreach($resources as $resource)
        <div class="col-md-4">
            <div class="card">
                <div class="card__header">
                    <a href="{{route('resource.single',$resource->slug)}}"><h2>{{$resource->name}}</h2></a>
                    <span>{{$resource->language->category->name}} / {{$resource->language->name}}</span>
                </div>
                <div class="card__body">

                    <div class="wall__img lightbox">
                        <div class="wall__img__item" data-src="{{asset('img/15607006431.png')}}" style="background-image: url({{asset('img/15607006431.png')}});">
                            <img src="{{asset('img/15607006431.png')}}" alt="" class="img-responsive">
                        </div>
                    </div>
                <div>{{str_limit($resource->description,200)}}
                    <a data-ui-sref="pages.profile.profile-about"><small>Read more</small></a>
                </div>

                    <div class="wall__attrs">
                        <div class="wall__stats">
                            <span><i class="zmdi zmdi-comments"></i> 36</span>
                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                            <span><i class="fa fa-thumbs-up"></i> 25</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endforeach
    </div>
    @endsection