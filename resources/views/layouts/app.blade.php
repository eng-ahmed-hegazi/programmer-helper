<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html class="ie9"><![endif]-->

<!-- Mirrored from bootstrapsale.com/projects/maed/v1/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Oct 2018 08:47:17 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>Material Admin</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- dataTables --}}
    <link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/buttons.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{asset('vendors/bower_components/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/summernote.css')}}" type="text/css">


    {{-- SweetAlert2 --}}
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
    <link href="{{ asset('css/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/navbar-fixed-top.css') }}" rel="stylesheet">
    <script src="{{ asset('js/ie-emulation-modes-warning.js') }}"></script>
    <link href="{{asset('css/app-1.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    @yield('style')
</head>
<body>
<!-- Header -->
<header id="header">
    <div class="logo">
        <a href="index-2.html" class="hidden-xs">
            PROGRAMMER HELPER
            <small>
                YOUR AIDE IN PROGRAMING WORLD
            </small>
        </a>
        <i class="logo__trigger zmdi zmdi-menu" data-mae-action="block-open" data-mae-target="#navigation"></i>
    </div>

    <ul class="top-menu">
        <li class="top-menu__trigger hidden-lg hidden-md">
            <a href="#"><i class="zmdi zmdi-search"></i></a>
        </li>

        <li class="top-menu__apps dropdown hidden-xs hidden-sm">
            <a data-toggle="dropdown" href="#">
                <i class="zmdi zmdi-apps"></i>
            </a>
            <ul class="dropdown-menu pull-right">
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-calendar"></i>
                        <small>Calendar</small>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="zmdi zmdi-file-text"></i>
                        <small>Files</small>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-email"></i>
                        <small>Mail</small>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-trending-up"></i>
                        <small>Analytics</small>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-view-headline"></i>
                        <small>News</small>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-image"></i>
                        <small>Gallery</small>
                    </a>
                </li>
            </ul>
        </li>
        <li class="dropdown hidden-xs">
            <a data-toggle="dropdown" href="#"><i class="zmdi zmdi-more-vert"></i></a>
            <ul class="dropdown-menu dropdown-menu--icon pull-right">
                <li class="hidden-xs">
                    <a data-mae-action="fullscreen" href="#"><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                </li>
                <li>
                    <a data-mae-action="clear-localstorage" href="#"><i class="zmdi zmdi-delete"></i> Clear Local Storage</a>
                </li>
                <li>
                    <a href="#"><i class="zmdi zmdi-face"></i> Privacy Settings</a>
                </li>
                <li>
                    <a href="#"><i class="zmdi zmdi-settings"></i> Other Settings</a>
                </li>
            </ul>
        </li>
        <li class="top-menu__alerts" data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__messages">
            <a href="#"><i class="zmdi zmdi-notifications"></i></a>
        </li>
        <li class="top-menu__profile dropdown">
            <a data-toggle="dropdown" href="#">
                <img src="demo/img/profile-pics/1.jpg" alt="">
            </a>

            <ul class="dropdown-menu pull-right dropdown-menu--icon">
                <li>
                    <a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>
                </li>
                <li>
                    <a href="{{route('settings.index')}}"><i class="zmdi zmdi-settings"></i> Settings</a>
                </li>
                <li>
                    <a href="{{ route('admin.logout') }}" class="text-white"
                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    </ul>

    <form class="top-search">
        <input type="text" class="top-search__input" placeholder="Search for people, files & reports" style="color: #fff;">
        <i class="zmdi zmdi-search top-search__reset"></i>
    </form>
</header>

<section id="main">
    <aside id="navigation">
        <div class="navigation__menu c-overflow">
            <ul>
                <li><a href="{{route('home')}}"><i class="zmdi zmdi-home"></i> Home</a></li>
                <li><a href="{{route('categories.index')}}"><i class="zmdi zmdi-view-list"></i> Categories List</a> </li>
                <li><a href="{{route('languages.index')}}"><i class="zmdi zmdi-view-list"></i> Languages List</a></li>
                <li><a href="{{route('types.index')}}"><i class="zmdi zmdi-view-list"></i> Types List</a></li>
                <li><a href="{{route('resources.index')}}"><i class="zmdi zmdi-view-list"></i> Resources List</a></li>
                <li><a href="{{route('tags.index')}}"><i class="zmdi zmdi-view-list"></i> Tags List</a></li>
                <li><a href="{{route('articles.index')}}"><i class="zmdi zmdi-view-list"></i>Articles List</a></li>
                <li><a href="{{route('interviews.index')}}"><i class="zmdi zmdi-view-list"></i> Interview Questions</a></li>
                <li><a href="{{route('settings.index')}}"><i class="zmdi zmdi-view-list"></i> Settings</a></li>
                <li><a href="{{route('users.index')}}"><i class="zmdi zmdi-view-list"></i> Usres</a></li>
            </ul>
        </div>
    </aside>
    <section id="content" >
        @yield('content')
    </section>

    <footer id="footer">
        Copyright &copy; 2019 AHMED HEGAZY
    </footer>

</section>

<script src="{{asset('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
{{-- dataTables --}}
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>

<script src="{{ asset('buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('buttons/jszip.min.js') }}"></script>
<script src="{{ asset('buttons/pdfmake.min.js') }}"></script>
<script src="{{ asset('buttons/vfs_fonts.js') }}"></script>

{{-- Validator --}}
<script src="{{ asset('js/validator.min.js') }}"></script>
<script src="{{ asset('vendors/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('vendors/fileinput/fileinput.min.js') }}"></script>
<script src="{{asset('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('js/app.min.js')}}"></script>
@yield('scripts')
</body>
</html>
