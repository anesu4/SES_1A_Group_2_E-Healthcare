<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <!-- google maps api key -->
        <script type="text/javascript"async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABZr8y9YuOF9eQhxoC_P70V73zuJjFbkc&libraries=places&callback=initMap"></script>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Scripts -->
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <div class="content">
            <div class="user-home">
                <div class="row">
                    <div class="user-name">
                        <h3>Welcome Guest!</h3>
                    </div>
                    <div class="column">
                        <div class="col-container">
                            <h3>Find Doctors</h3>
                            <div id="maps"></div>
                            <form action="">
                                <input type="text" class="maps-search" id="search" placeholder="search"/>
                            </form>
                        </div>
                    </div>
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
            </div>
        </div>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <?php echo e(config('app.name', 'Laravel')); ?>

                    </a>

                            <!-- Authentication Links -->
                            <?php if(auth()->guard()->guest()): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                                <?php if(Route::has('register')): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php else: ?>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                    </a>

                                    <div >
                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            <?php echo e(__('Logout')); ?>

                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </div>
                                </li>
                            <?php endif; ?>
                        <!-- </ul>
                    </div> -->
                </div>
            </nav>

            <main class="py-4">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </body>
    <script>
        function initMap() {
	    var location =	{lat: -33.868820, lng: 151.209290};
        var map = new google.maps.Map(document.getElementById('maps'), {
        zoom: 12,  
        center: location
        });

	    var marker = new google.maps.Marker({
		position: location,
		map: map
        });

        var searchbox = new google.maps.places.SearchBox(document.getElementById('search'));

        google.maps.event.addListener(searchbox, 'places_changed', function(){

            var places = searhbox.getPlaces();
            var bounds = new google.maps.LatLngBounds();
            var i, place;
            
            for(i=0; place=places[i];i++){
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location);
            }

            map.fitBounds(bounds);
            map.setZoom(15);

        });
    }
    google.maps.event.addDomListener(window,'load', initMap);
    </script>
</html>



<?php /**PATH D:\Git Repo\SES_1A_Group_2_E-Healthcare\resources\views/layouts/app.blade.php ENDPATH**/ ?>