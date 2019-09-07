@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card__header">
            <h2>Sales Statistics <small>Vestibulum purus quam scelerisque, mollis nonummy metus</small></h2>

            <div class="actions">
                <a href="#"><i class="zmdi zmdi-check-all"></i></a>
                <a href="#"><i class="zmdi zmdi-trending-up"></i></a>
                <div class="dropdown">
                    <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#">Change Date Range</a></li>
                        <li><a href="#">Change Graph Type</a></li>
                        <li><a href="#">Other Settings</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card__body">
            <div class="row">
                <div class="col-lg-3 text-center">
                    <div class="card shadow" style="background: #22313a">
                        <div class="card__header" style="background: #131d22;padding-bottom: 10px">
                            <h3>CATEGORIES</h3>
                            <div class="actions">
                                <a href="#"><i class="zmdi zmdi-check-all"></i></a>
                                <a href="#"><i class="zmdi zmdi-trending-up"></i></a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Change Date Range</a></li>
                                        <li><a href="#">Change Graph Type</a></li>
                                        <li><a href="#">Other Settings</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card__body">
                            <h1>{{$categories->count()}}</h1>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 text-center">
                    <div class="card shadow" style="background: #22313a">
                        <div class="card__header" style="background: #131d22;padding-bottom: 10px">
                            <h3>RESOURCES</h3>
                            <div class="actions">
                                <a href="#"><i class="zmdi zmdi-check-all"></i></a>
                                <a href="#"><i class="zmdi zmdi-trending-up"></i></a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Change Date Range</a></li>
                                        <li><a href="#">Change Graph Type</a></li>
                                        <li><a href="#">Other Settings</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card__body">
                            <h1>{{$resources}}</h1>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 text-center">
                    <div class="card shadow" style="background: #22313a">
                        <div class="card__header" style="background: #131d22;padding-bottom: 10px">
                            <h3>LANGUAGES</h3>
                            <div class="actions">
                                <a href="#"><i class="zmdi zmdi-check-all"></i></a>
                                <a href="#"><i class="zmdi zmdi-trending-up"></i></a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Change Date Range</a></li>
                                        <li><a href="#">Change Graph Type</a></li>
                                        <li><a href="#">Other Settings</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card__body">
                            <h1>{{$languages->count()}}</h1>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 text-center">
                    <div class="card shadow" style="background: #22313a">
                        <div class="card__header" style="background: #131d22;padding-bottom: 10px">
                            <h3>TYPES</h3>
                            <div class="actions">
                                <a href="#"><i class="zmdi zmdi-check-all"></i></a>
                                <a href="#"><i class="zmdi zmdi-trending-up"></i></a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Change Date Range</a></li>
                                        <li><a href="#">Change Graph Type</a></li>
                                        <li><a href="#">Other Settings</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card__body">
                            <h1>{{$types->count()}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card shadow" style="background: #22313a">
                        <div class="card__header" style="background: #131d22;padding-bottom: 10px">
                            <h3>TAGS</h3>
                            <div class="actions">
                                <a href="#"><i class="zmdi zmdi-check-all"></i></a>
                                <a href="#"><i class="zmdi zmdi-trending-up"></i></a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Change Date Range</a></li>
                                        <li><a href="#">Change Graph Type</a></li>
                                        <li><a href="#">Other Settings</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card__body">
                            <h1>{{$tags}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card shadow" style="background: #22313a">
                        <div class="card__header" style="background: #131d22;padding-bottom: 10px">
                            <h3>INTERVIEW</h3>
                            <div class="actions">
                                <a href="#"><i class="zmdi zmdi-check-all"></i></a>
                                <a href="#"><i class="zmdi zmdi-trending-up"></i></a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Change Date Range</a></li>
                                        <li><a href="#">Change Graph Type</a></li>
                                        <li><a href="#">Other Settings</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card__body">
                            <h1>{{$interview}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card shadow" style="background: #22313a">
                        <div class="card__header" style="background: #131d22;padding-bottom: 10px">
                            <h3>Articles</h3>
                            <div class="actions">
                                <a href="#"><i class="zmdi zmdi-check-all"></i></a>
                                <a href="#"><i class="zmdi zmdi-trending-up"></i></a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Change Date Range</a></li>
                                        <li><a href="#">Change Graph Type</a></li>
                                        <li><a href="#">Other Settings</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card__body">
                            <h1>{{$articles}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
