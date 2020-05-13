<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- PLUGINS CSS STYLE -->
        <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/listtyicons/style.min.css')}}" rel="stylesheet" />
		<link href="{{ asset('assets/plugins/selectbox/select_option1.min.css')}}" rel="stylesheet" />

        <!-- Login and Registration Form Title and CSS -->
        <link rel="stylesheet" href="{{ asset('assets/style.css')}}">
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <div class="header">
        <!--placeholder header-->
        <div class="logo">
            <h2>E-Healthcare</h2>
        </div>
        <div class="navbar">
            <a href="patient-home.html">Home</a>
            <a href="">Appointments</a>
            <a href="">Messaging</a>
            <a href="patient-form.html">Patient Forms</a>
            <div class="dropdown">
                <button class="drop-btn">Account <i class="fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="">Settings</a>
                    <a href="Index.html">Log out</a>
                </div>
            </div>
        </div>
    </div>
</html>
