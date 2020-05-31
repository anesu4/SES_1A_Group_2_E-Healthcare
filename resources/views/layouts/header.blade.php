<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- PLUGINS CSS STYLE -->
        <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/listtyicons/style.min.css')}}" rel="stylesheet" />
		<link href="{{ asset('assets/plugins/selectbox/select_option1.min.css')}}" rel="stylesheet"/>

        <!-- Login and Registration Form Title and CSS -->
        <link rel="stylesheet" href="{{ asset('assets/style.css')}}">
        <link rel="stylesheet" href="assets/style.css">

        <link href=" {{ asset('img/background1.jpg') }}"/>
    </head>
    <div class="header">
        
        <div class="logo">
            <a href="{{ url('/') }}"><h2>E-Healthcare</h2></a>
            <h4 style="color:white;">Your Online Healthcare Provider</h4>
        </div>
        <div class="navbar">
            <a href="/">Home</a>
            <a href="/appointment">Appointments</a>
            <a href="/messages">Messaging</a>
            <div class="nav-dropdown">
                @if (Route::has('register'))
                <button class="drop-btn">Account <i class="fa fa-caret-down"></i></button>
                @else
                <button class="drop-btn">{{ Auth::user()->name }} <img src="https://picsum.photos/70" alt="avatar"></button>
                @endif
                <div class="nav-dropdown-content">
                    <a href="">Account</a>
                        @guest
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

                            @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

                            @endif
                            @else
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <a class="nav-link" href="/patient-form">Patient Forms</a>

                            <div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                         @endguest
                </div>
            </div>
        </div>
    </div>
</html>
