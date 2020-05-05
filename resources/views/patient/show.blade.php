@include('layouts/header')

<!DOCTYPE html>
<body>
    <head>
        <!-- PLUGINS CSS STYLE -->
        <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/listtyicons/style.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/selectbox/select_option1.min.css')}}" rel="stylesheet" />

        <!-- Login and Registration Form Title and CSS -->
        <link rel="stylesheet" href="{{ asset('assets/style.css')}}">
        <title>Account</title>
        <link rel="stylesheet" href="style.css">
    </head>


    <div class="row">
        <div class="sidebar">
            <a href="#Home">Home</a>
            <a href="">Appointments</a>
            <a href="">Messaging</a>
            <a href="">Patient Forms</a>
            <a href="">Account Settings</a>

        </div>
        <div class="content">
            <div class="user-header"></div>
            <div class="user-home">
                <div class="hero-image"></div>
                <div class="row">
                    <div class="user-dashboard">
                        <h2>Welcome User</h2>
                        <div class="column">
                            <h3>Find Doctors</h3>
                            <div id="maps"></div>
                            <form action="">
                                <input type="text" class="maps-search" placeholder="Email"/>
                            </form>
                        </div>
                        <div class="column">
                            <h3>Added Doctors</h3>
                            <div class="doctor-list">
                                <div class="doctor-obj">
                                <p><a href="" ><h6>Dr. Exmample Name</h6></a>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus soluta ab, dolores eum similique debitis nisi rem aliquam ratione quod repudiandae aspernatur, fugit perferendis animi reprehenderit fugiat quia quibusdam itaque!</p>
                                </div>
                                <div class="doctor-obj">
                                <p><a href="" ><h6>Dr. Exmample Name</h6></a>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus soluta ab, dolores eum similique debitis nisi rem aliquam ratione quod repudiandae aspernatur, fugit perferendis animi reprehenderit fugiat quia quibusdam itaque!</p>
                                </div>
                                <div class="doctor-obj">
                                    <p><a href=""><h6>Dr. Exmample Name</h6></a>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus soluta ab, dolores eum similique debitis nisi rem aliquam ratione quod repudiandae aspernatur, fugit perferendis animi reprehenderit fugiat quia quibusdam itaque!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
