@extends('layouts.application')
@section('content')
    <h2></h2>
    <div class="row">
        <div class="col-lg-3 pull-left ">
            <div class="card shadow">
                <div class="card__body">
                    <h2>Categories</h2>
                    <div class="navigation__menu">
                        <ul>
                            @foreach($categories as $lang)
                                <a href="{{route('category.single',$lang->id)}}"> {{$lang->name}}</a><br>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card shadow">
                <div class="card__body">
                    <h2>Languages</h2>
                    <div class="navigation__menu">
                        <ul>
                            @foreach($languages as $lang)
                                <a href="{{route('language.single',$lang->id)}}"> {{$lang->name}}</a><br>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <div class="card__body">
                    <h2>Resources</h2>
                    <div class="navigation__menu">
                        <ul>
                            @foreach($types as $type)
                                <a href="{{route('type.single',$type->type)}}"> {{$type->type}}</a><br>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <div class="card__body">
                    <h2>Important Links</h2>
                    <div class="navigation__menu">
                        <ul>
                            <a href="typography.html"> Interview Questions</a><br>
                            <a href="{{route('articles.index')}}"> Articles</a><br>
                            <a href="typography.html"> FQA</a><br>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <h1 class="page-header">{{$category->name}}</h1>
        </div>
    @foreach($language as $lang)

        @if(count($lang->resources)!=0)
        <div class="col-lg-9 pull-right">

            <div class="card">
                <div class="card__header">
                    <h2 class="pull-left"> {{$lang->name}}<small>{{$lang->created_at}}</small></h2>


                    <hr style="background: #22313a;border:0;height:2px">
                </div>

                <div class="list-group row">
                    @foreach($lang->resources as $resource)
                        <div class=" col-lg-6" >
                            <a href="{{route('resource.single',$resource->slug)}}" class="list-group-item media" >
                                <div class="media-body" >
                                    <div class="list-group__heading">{{$resource->name}}</div>
                                    <small class="list-group__text">{{$resource->url}}</small>
                                    <small class="list-group__text">{{$resource->type->type}}</small>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="card__footer">

                </div>
            </div>
        </div>
        @endif
    @endforeach

    </div>
    <div class="clearfix"></div>
@endsection