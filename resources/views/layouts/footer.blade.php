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
    <body>
        <div class="footer-layer">
            <p>
                Footer Info Here:
            </p>
        </div>
    </body>
</html>
@include("layouts.footer")
