@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }} Bitches</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<html>
    <head>
        <title>Login and Registration Form Design</title>
        <link rel="stylesheet" href="assets/style.css"/>
        <link href="{{ asset('css/bootstrap.min.css') }}"/>
        <link href=" {{ asset('plugins/font-awesome/font-awesome.min.css') }}"/>
        <link href=" {{ asset('img/background1.jpg') }}"/>
    </head>
    <div class="header">
        <!--placeholder header-->
        <h1>E-Healthcare</h1>
        <h4>Better health</h4>
    </div>
    <body>
        <div class="login-page">
            <div class="form-box" id="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">{{ __('Login') }}</button>
                    <button type="button" class="toggle-btn" onclick="register()">{{ __('Register') }}</button>
                </div>
                {{-- <form id="login" class="input-group"  method="POST" action="{{ route('login') }}">
                    <i class = "fa fa-user" ></i>
                    <input type="text" class="input-field" id="email" placeholder="Email"/>
                    <i class="fa fa-lock"></i>
                    <input type="password" class="input-field" id="password" placeholder="Password"/>
                    <button type="submit" class="submit-btn" >{{ __('Login') }}</button>
                </form> --}}
                <div>
                    <form id="login" class="input-group" method="POST" action="{{ route('login') }}">
                        @csrf
                                <i class = "fa fa-user" ></i>
                                <input id="email" type="email text" class="form-control @error('email') is-invalid @enderror input-field" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <i class="fa fa-lock"></i>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror input-field" name="password" required autocomplete="current-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>

                                <button type="submit" class="submit-btn">
                                    {{ __('Login') }}
                                </button>
                    </form>


                    <form id="register" class="input-group" method="POST" action="{{ route('register') }}">
                        @csrf
                        <p>Are you a doctor or patient?</p>
                        <div class="button-box2">
                            <div id="btn2"></div>
                            <button type="button" class="toggle-btn2" onclick="patient()">Patient</button>
                            <button type="button" class="toggle-btn2" onclick="doctor()">Doctor</button>
                        </div>

                        <div class="col-md-6">
                            <input id="name" type="text" class="input-field @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- <input type="text" class="input-field" placeholder="Email"/> --}}
                        <input id="email" type="email" class="input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <input id="password password-confirm" type="password" class="input-field @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password"/>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        {{-- <input type="password" class="input-field" placeholder="Password"/> --}}
                        <input id="password-confirm" type="password" class="input-field" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                        {{-- <input type="password" class="input-field" placeholder="Confirm password"/> --}}
                        <input type="text" class="input-field" id="search-location" placeholder="Enter your location"/>
                        <div class="input-field" id="certFile-container"> <!-- yes, this id isnt great, if you wanna change it make sure to upadate css & JS -->
                            <p>Upload doctor certification</p>
                            <input type="file" id="certFile">
                        </div>
                        <button type="submit" class="submit-btn">
                            {{ __('Register') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer">
            <footer>
                This is just chillin here as a placeholder footer <!-- placeholder footer, doesnt do anything. check css -->
            </footer>
        </div>
        <script>
            //Acronyms IF = input field
            //variables to switch login & register objects
            var loginForm = document.getElementById("login");
            var regForm = document.getElementById("register");
            var toggleBtn = document.getElementById("btn");
            var formBox = document.getElementById("form-box");
            //register-form input fields. *fyi some of this code is pretty dodgy and basic, but it works
            var toggleBtn2 = document.getElementById("btn2");
            var certFileIF = document.getElementById("certFile-container");
            var locationIF = document.getElementById("search-location");

            //boolean checks if doctor form is selected, false by default becacuse patient is selected
            var doctorForm = false;

            function register(){
                //shift button and form to register;  login = Overflow:hidden; reduce form height
                loginForm.style.left="-400px"
                regForm.style.left="50px"
                toggleBtn.style.left="96px"
                //check if doctor is selected, without it the form will not extend to correct height
                if(doctorForm){
                    formBox.setAttribute("style","height:600px")
                }
                else {
                    formBox.setAttribute("style","height:450px")
                }
            }
            function login(){
                //shift button and form to login;  register = Overflow:hidden; extend form height
                loginForm.style.left="50px"
                regForm.style.left="500px"
                toggleBtn.style.left="0px"
                formBox.setAttribute("style","height:300px");
            }
            function patient(){
                //toggle btn to highlight patient
                toggleBtn2.style.left="0px"
                //hide doctor input fields; reduces form height
                locationIF.setAttribute("style","display:none");
                certFileIF.setAttribute("style","display:none");
                formBox.setAttribute("style","height:450px");
                doctorForm = false;
            }
            function doctor(){

                //toggle btn to highlight doctor
                toggleBtn2.style.left="96px"

                //show doctor input fields; extend form height
                locationIF.setAttribute("style","display:inline");
                certFileIF.setAttribute("style","display:inline-block");
                formBox.setAttribute("style","height:600px");
                doctorForm = true;
            }
        </script>
    </body>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js">
        </script>
        <script>
            $('.message a').click(function(){
                $('form').animate({height: "toggle", opcatity: "toggle"}, "slow")
            })
        </script>
    </body>
</html>
