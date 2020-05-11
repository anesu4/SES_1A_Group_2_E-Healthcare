@include('layouts/header')
@extends('layouts.app')

<!DOCTYPE html>
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
                    <button type="button" class="toggle-btn" onclick="login()">Login</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>
                <div class="form">
                    <form id="login" class="input-group">
                        <i class = "fa fa-user" ></i>
                        <input type="text" class="input-field" id="email" placeholder="Email">{{ __('Login') }}</input>
                        <i class="fa fa-lock"></i>
                        <input type="password" class="input-field" id="password" placeholder="Password"/>
                        <button type="submit" class="submit-btn" >Login</button>
                    </form>
                    <form id="register" class="input-group">
                        <p>Are you a doctor or patient?</p>
                        <div class="button-box2">
                            <div id="btn2"></div>
                            <button type="button" class="toggle-btn2" onclick="patient()">Patient</button>
                            <button type="button" class="toggle-btn2" onclick="doctor()">Doctor</button>
                        </div>
                        <input type="text" class="input-field" placeholder="Email"/>
                        <input type="password" class="input-field" placeholder="Password"/>
                        <input type="password" class="input-field" placeholder="Confirm password"/>
                        <input type="text" class="input-field" id="search-location" placeholder="Enter your location"/>
                        <div class="input-field" id="certFile-container"> <!-- yes, this id isnt great, if you wanna change it make sure to upadate css & JS -->
                            <p>Upload doctor certification</p>
                            <input type="file" id="certFile">
                        </div>
                        <button type="submit" class="submit-btn">Register</button>
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

        <!-- //BootStrap Code for Beautified Form - Anesu 22/04 -->
        <!-- <form>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
                <option>NSW</option>
                <option>WA</option>
            </select>
            </div>
            <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
        </form> -->

        <script src="https://code.jquery.com/jquery-3.2.1.min.js">
        </script>
        <script>
            $('.message a').click(function(){
                $('form').animate({height: "toggle", opcatity: "toggle"}, "slow")
            })
        </script>
    </body>
</html>
