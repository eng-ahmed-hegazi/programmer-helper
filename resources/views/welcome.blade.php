@extends('front')
@section('content')
    <div class="logo">
        @guest
            <a  href="{{ route('login') }}"  style="color: #fff;">دخـول</a>
            <a  href="{{ route('register') }}"  style="color: #fff;">تسجـيل</a>
        @else
                <a id="navbarDropdown " class="dropdown-toggle" style="color: #fff" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-capitalize">{{ Auth::user()->name }}</span>
                </a>

                <ul class="dropdown-menu list-unstyled" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"  style="color: #000;"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            خـــــــــــــروج
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('profile.create') }}"  style="color: #000;">
                            بروفايل
                        </a>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </li>
        @endguest
    </div>
@endsection
