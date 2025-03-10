<?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!DOCTYPE html>
<body>
    <head>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABZr8y9YuOF9eQhxoC_P70V73zuJjFbkc&callback=initMap"></script>
        <!-- PLUGINS CSS STYLE -->
        <link href="<?php echo e(asset('assets/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('assets/plugins/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('assets/plugins/listtyicons/style.min.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('assets/plugins/selectbox/select_option1.min.css')); ?>" rel="stylesheet" />

        <!-- Login and Registration Form Title and CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/style.css')); ?>">
        <title>Account</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="content">
        <div class="hero-image"></div>
        <div class="user-home">
            <div class="row">
                <div class="user-name">
                    <h3>Welcome User</h3></div>
                <div class="column">
                    <div class="container">
                        <h3>Find Doctors</h3>
                        <div id="maps"></div>
                        <form action="">
                            <input type="text" class="maps-search" id="search" placeholder="search"/>
                        </form>
                    </div>
                </div>
                <div class="column">
                    <div class="container">
                        <h3>Added Doctors</h3>
                        <div class="doctor-list">
                            <div class="doctor-obj">
                            <a href="" ><h6>Dr. Exmample Name</h6></a>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus soluta ab, dolores eum similique debitis nisi rem aliquam ratione quod repudiandae aspernatur, fugit perferendis animi reprehenderit fugiat quia quibusdam itaque!</p>
                            </div>
                            <div class="doctor-obj">
                            <a href="" ><h6>Dr. Exmample Name</h6></a>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus soluta ab, dolores eum similique debitis nisi rem aliquam ratione quod repudiandae aspernatur, fugit perferendis animi reprehenderit fugiat quia quibusdam itaque!</p>
                            </div>
                            <div class="doctor-obj">
                            <a href=""><h6>Dr. Exmample Name</h6></a>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus soluta ab, dolores eum similique debitis nisi rem aliquam ratione quod repudiandae aspernatur, fugit perferendis animi reprehenderit fugiat quia quibusdam itaque!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function initMap(){
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
</script>
<?php /**PATH D:\Git Repo\SES_1A_Group_2_E-Healthcare\resources\views/random.blade.php ENDPATH**/ ?>