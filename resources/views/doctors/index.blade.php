@include('layouts.app')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <?php echo 'You are logged in!'; ?>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<body>
    <div class="content login-page">
        <div class="user-home">
            <div class="row">
                <div class="user-name">
                    @guest
                    @if (Route::has('register'))
                    <h4>Welcome Doctor!</h4>
                    @endif
                    @else <h3>Welcome {{Auth::User()->name}}!</h3>
                    @endguest
                    <h3>View Messages</h3>
                </div>
                        <!-- <form action="">
                            <input type="text" class="maps-search" id="search" placeholder="Search"/>
                        </form> -->

                <div class="column">
                    <div class="col-container">
                        <h3>Added Doctors</h3>
                        <div class="doctor-list">
                            <div class="doctor-obj">
                            <a href="" ><h6>Dr. Example Name</h6></a>
                            <p>Lorem ipsum dolor</div>
                            <div class="doctor-obj">
                            <a href="" ><h6>Dr. Example Name</h6></a>
                            <p>Lorem ipsum dolor</div>
                            <div class="doctor-obj">
                            <a href=""><h6>Dr. Example Name</h6></a>
                            <p>Lorem ipsum dolor</div>
                        </div>
                    </div>
                </div>
            </div>
                <div id="floating-panel">
                    <h4>Added Doctors</h4>
                        <!-- <button id="drop" onclick="drop()">Drop Markers</button> -->
                    </div>
                <div id="maps">

            </div>
        </div>
    </div>

<!-- google maps api key -->
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABZr8y9YuOF9eQhxoC_P70V73zuJjFbkc&libraries=places&callback=initMap">
    </script>

</body>

@include('layouts.footer')
