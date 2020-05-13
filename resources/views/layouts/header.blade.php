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
        <!--placeholder header-->
        <div class="logo">
            <a href="{{ url('/') }}"><h2>E-Healthcare</h2></a>
            <h4 style="color:white;">Better Health, Online</h4>
        </div>
        <div class="navbar">
            <a href="/">Home</a>
            <a href="">Appointments</a>
            <a href="">Messaging</a>
            <a href="/patient">Patient Forms</a>
            <div class="nav-dropdown">
                <button class="drop-btn">Account <i class="fa fa-caret-down"></i></button>
                <div class="nav-dropdown-content">
                    <a href="">Settings</a>
                        @guest
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

                            @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

                            @endif
                            @else
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

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
