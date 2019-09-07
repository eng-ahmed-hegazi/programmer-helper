@extends('layouts.application')
@section('content')
    <div class="row">
        <div class="row text-center">
            <img src="{{asset('img/logo.png')}}" alt="">
            <h1 class="home-heading-text" style="color: #fff;">
                <span class="element" data-elements="PROGRAMMER HELPER,YOUR AIDE IN PROGRAMMING WHORLED"></span>
            </h1>
        </div>
    </div>
    <div class="clearfix"></div>
    <form class="top-search" action="{{route('search.post')}}" method="post">
        {{csrf_field()}}
        <div class="row">
            <div class="col-lg-10 col-lg-push-1">
                <input class="top-search__input" placeholder="Search for Languages , Pelase Check on Resoucrce Type &amp; press ENTER" style="color: #fff;" type="text" name="search">
                <i class="zmdi zmdi-search top-search__reset"></i>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-lg-10 col-lg-push-1 ">
                <br>
                    <h5 class="home-heading-text" style="color: #fff;">
                        PLEASE SELECT THE TYPE OF RESOURCES
                    </h5>
                    @foreach($types as $type)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="{{$type->id}}" name="id[]" >
                                {{$type->type}}
                                <i class="input-helper"></i>
                            </label>

                        </div>
                    </div>
                    @endforeach

            </div>
        </div>
    </form>
    <div class="clearfix"></div>
    <div class="row">
        <div class="main1 clearfix col-lg-10 col-lg-push-1">
            <h1 class="page-header">RESOURCES</h1>
            <div class="main1 clearfix">
                <nav id="menu" class="nav1">
                    <ul>
                        @foreach($types as $type)
                            <li>
                                <a href="{{route('type.single',$type->type)}}">
								<span class="icon">
									<i aria-hidden="true" class="fa fa-pagelines"></i>
								</span>
                                    <span>{{$type->type}}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>

        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-lg-10 col-lg-push-1">
            <h2 class="page-header">Famous Tags</h2>
            <div class="row">
                @foreach($tags as $tag)
                    <h6 class="col-lg-2">
                        <span class="fa fa-tags"></span> {{$tag->name}}
                    </h6>
                @endforeach
            </div>
        </div>
    </div>
@endsection