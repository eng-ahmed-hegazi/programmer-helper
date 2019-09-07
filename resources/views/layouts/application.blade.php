<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html class="ie9"><![endif]-->

<!-- Mirrored from bootstrapsale.com/projects/maed/v1/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Oct 2018 08:47:17 GMT -->
<head>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
    <link href="{{asset('css/ct-navbar.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <!-- Material Design Icons -->
    <link href="{{asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}" rel="stylesheet">


    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/app-1.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.custom.js"></script>

    @yield('style')
</head>
<style>
    .input{
        background: #11181d;
        padding:15px;
        height: 50px
    }
    .input:focus {
        background: #22313a;
    }

</style>
<body>
<div id="navbar-full shadow" >
    <div id="navbar">
        <!--
         navbar-default can be changed with navbar-ct-blue navbar-ct-azzure navbar-ct-red navbar-ct-green navbar-ct-orange
         -->
        <nav class="navbar navbar-ct-blue" role="navigation">

            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand navbar-brand-logo" href="http://www.creative-tim.com">
                        <div class="logo">
                            <img src="{{asset('img/logo2.png')}}" alt="" class="img-responsive">
                        </div>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">

                        <li>
                            <a href="javascript:void(0);" data-toggle="search" class="hidden-xs">
                                <i class="pe-7s-search"></i>
                                <p>Search</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/contact')}}" class="hidden-xs">
                                <i class="pe-7s-users"></i>
                                <p>Contcat Us</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="pe-7s-global" >
                                </i>
                                <p>English</p>
                                <ul class="dropdown-menu pull-right dropdown-menu--icon" style="position: absolute;top: 70px;background: #fff">
                                    <div class="tab-pane active" id="notifications__updates">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item media">
                                                <div class="pull-right">
                                                    <img class="avatar-img" src="img/flags/us.jpg" alt="" style="height:20px;border-radius: 0">
                                                </div>
                                                <div class="media-body" >
                                                    <div class="list" style="color:#333;">English</div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item media">
                                                <div class="pull-right">
                                                    <img class="avatar-img" src="img/flags/fr.jpg" alt="" style="height:25px;border-radius: 0">
                                                </div>
                                                <div class="media-body" >
                                                    <div class="list-" style="color:#333;">France</div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item media">
                                                <div class="pull-right">
                                                    <img class="avatar-img" src="img/flags/it.jpg" alt="" style="height:25px;border-radius: 0">
                                                </div>
                                                <div class="media-body" >
                                                    <div class="list-" style="color:#333;">Italy</div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item media">
                                                <div class="pull-right">
                                                    <img class="avatar-img" src="img/flags/ru.jpg" alt="" style="height:25px;border-radius: 0">
                                                </div>
                                                <div class="media-body" >
                                                    <div class="list-" style="color:#333;">Russia</div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item media">
                                                <div class="pull-right">
                                                    <img class="avatar-img" src="img/flags/sp.jpg" alt="" style="height:25px;border-radius: 0">
                                                </div>
                                                <div class="media-body" >
                                                    <div class="list-" style="color:#333;">Spanish</div>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </ul>
                            </a>
                        </li>

                        <li>
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="pe-7s-target" >

                                </i>
                                <p>Categories</p>
                                <ul class="dropdown-menu pull-right dropdown-menu--icon" style="position: absolute;top: 70px;background: #fff">
                                    <div class="tab-pane active" id="notifications__updates">
                                        @foreach($categories as $category)
                                            <div class="list-group">

                                                <a href="{{route('category.single',$category->id)}}" class="list-group-item media">
                                                    {{$category->name}}
                                                </a>

                                            </div>
                                        @endforeach
                                    </div>
                                </ul>
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="pe-7s-bell" >
                                    <span class="label">23</span>
                                </i>
                                <p>Notifications</p>
                                <ul class="dropdown-menu pull-right dropdown-menu--icon" style="position: absolute;top: 70px;background: #fff">
                                    <div class="tab-pane active" id="notifications__updates">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item media">
                                                <div class="pull-right">
                                                    <img class="avatar-img" src="demo/img/gallery/thumbs/1.jpg" alt="">
                                                </div>

                                                <div class="media-body" >
                                                    <div class="list-group__heading" style="color:#333;">David Villa Jacobs</div>
                                                    <small class="list-group__text"  style="color:#999;">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                                                </div>
                                            </a>

                                            <a href="#" class="list-group-item media">
                                                <div class="pull-right">
                                                    <img class="avatar-img" src="demo/img/gallery/thumbs/2.jpg" alt="">
                                                </div>

                                                <div class="media-body" >
                                                    <div class="list-group__heading" style="color:#333;">David Villa Jacobs</div>
                                                    <small class="list-group__text"  style="color:#999;">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                                                </div>
                                            </a>

                                            <a href="#" class="list-group-item media">
                                                <div class="pull-right">
                                                    <img class="avatar-img" src="demo/img/gallery/thumbs/3.jpg" alt="">
                                                </div>

                                                <div class="media-body" >
                                                    <div class="list-group__heading" style="color:#333;">David Villa Jacobs</div>
                                                    <small class="list-group__text"  style="color:#999;">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                                                </div>
                                            </a>

                                            <a href="#" class="list-group-item media">
                                                <div class="pull-right">
                                                    <img class="avatar-img" src="demo/img/gallery/thumbs/4.jpg" alt="">
                                                </div>

                                                <div class="media-body" >
                                                    <div class="list-group__heading" style="color:#333;">David Villa Jacobs</div>
                                                    <small class="list-group__text"  style="color:#999;">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                                                </div>
                                            </a>

                                            <a href="#" class="list-group-item media">
                                                <div class="pull-right">
                                                    <img class="avatar-img" src="demo/img/gallery/thumbs/5.jpg" alt="">
                                                </div>

                                                <div class="media-body" >
                                                    <div class="list-group__heading" style="color:#333;">David Villa Jacobs</div>
                                                    <small class="list-group__text"  style="color:#999;">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                                                </div>
                                            </a>


                                        </div>
                                    </div>
                                </ul>
                            </a>
                        </li>
                        <li class="top-menu__profile dropdown">
                            @guest
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="pe-7s-user"></i>
                                    <p>Account</p>
                                </a>
                                <ul class="dropdown-menu pull-right dropdown-menu--icon" style="position: absolute;top: 70px;">
                                    <li><a href="{{route('login')}}">Login</a></li>
                                    <li><a href="{{route('register')}}">Register</a></li>
                                </ul>
                            @else
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"  >
                                    <i class="pe-7s-user"></i>
                                    <div>
                                        <p class="bg-success" style="width: 10px;height: 10px;border-radius: 50%;display: inline-block";></p>
                                        <p style="display: inline-block">{{Auth::user()->name}}</p>
                                    </div>
                                </a>
                                <ul class="dropdown-menu pull-right dropdown-menu--icon"  style="position: absolute;top: 70px;">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </li>
                                </ul>
                            @endif

                        </li>
                    </ul>
                    <form class="navbar-form navbar-right navbar-search-form" role="search">
                        <div class="form-group" style="margin-bottom: 0;padding-top: 40px">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                        </div>
                    </form>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <!--  end navbar -->
</div>

<div class="container">
    @yield('content')
</div>
<div class="clearfix"></div>
<div id="footer" style="background: #11181d" >

    <p> Copyright &copy; 2019 AHMED HEGAZY</p>
</div>




<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/ct-navbar.js"></script>
<script src="js/typed.js"></script>
<script type="text/javascript">
    $(".element").each(function() {
        var $this = $(this);
        $this.typed({
            strings: $this.attr('data-elements').split(','),
            typeSpeed: 100, // typing speed
            backDelay: 3000 // pause before backspacing
        });
    });
</script>
</body>
</html>
