@extends('layouts.application')
@section('content')
    <div class="card">
        <div class="card__header">
            <div class="media">
                <div class="media-body">
                    <h2>{{$resource->name}} <small>{{$resource->created_at}}</small></h2>
                    <span>{{$resource->language->category->name}}</span> /
                    <span>{{$resource->language->name}}</span>

                </div>
            </div>
        </div>

        <div class="card__body">
            <p>{{$resource->description}}</p>
            <p>The url of the resoucrce <a href="{{$resource->url}}">{{$resource->url}}</a></p>
            <div class="wall__attrs">
                <div class="wall__stats pull-left">
                    <span><i class="zmdi zmdi-comments"></i> 36</span>
                    <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                </div>
                <div class="wall__stats pull-right">
                    <span><span class="glyphicon glyphicon-random"></span>  {{$resource->type->type}}</span>
                </div>
            </div>
        </div>

        <div class="wall__comments">

            <div class="wall__comments__lists">
                <div class="media">

            @foreach($resource->comments as $comment)
                    <div class="media-body">
                        <a>David Nathan</a> <small class="m-l-10">3 mins ago...</small>
                        <p>Maecenas dignissim in neque id commodo. Nam pretium a tortor a convallis. Curabitur in arcu quis nulla aliquam condimentum. Morbi eu cursus diam, vitae tristique dui.</p>

                        <div class="actions">
                            <div class="dropdown">
                                <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Report</a></li>
                                    <li><a href="#">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            @endforeach
                </div>
            @if(Auth::user())
            <form class="wall__comments__input">
                <div class="form-group">
                    <textarea class="textarea-autosize" placeholder="Write something..."></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn--light">comment</button>
                </div>
            </form>
            @endif
        </div>
    </div>
    </div>
@endsection