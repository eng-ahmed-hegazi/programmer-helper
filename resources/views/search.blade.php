@extends('layouts.application')
@section('content')

    <span>Found {{$resource->count()}} Results in 2 second</span>
    <h1>Search Result Fore {{$search}}</h1>
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
    @foreach($resource as $lang)
    <div class="card wall__item">
        <div class="card__header">
            <div class="media">
                <div class="media-body">
                    <button class="btn btn-default btn--icon-text pull-right"><i class="zmdi zmdi-apps"></i> {{$lang->language->category->name}}</button>
                    <h2>{{$lang->language->name}}<small>Added on {{$lang->created_at}}</small></h2>
                </div>
            </div>
        </div>

        <div class="card__body">
           <strong>
               <p class="lead" style="font-weight: ">{{$lang->name}}</p>
           </strong>

            <a href="{{$lang->url}}">{{$lang->url}}</a>
            <small class="lead" style="font-size: 15px;display:block">{{$lang->description}}</small>
            <div class="wall__attrs">
                @if($typesId != null)
                <span class="badge pull-right">{{$lang->type->type}}</span>
                @endif
                <div class="wall__stats">
                    <span><i class="zmdi zmdi-comments"></i> 02</span>
                    <span><i class="zmdi zmdi-favorite"></i> 12</span>

                </div>
            </div>
        </div>
    </div>
    @endforeach
 </div>
    </div>
@endsection