<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class=>
    <div class="content login-page">
        <div class="user-home">
            <div class="row">
                <div class="user-name">
                    <?php if(auth()->guard()->guest()): ?>
                    <?php if(Route::has('register')): ?>
                    <h3>Welcome Guest!</h3>
                    <?php endif; ?>
                    <?php else: ?> <h3>Welcome <?php echo e(Auth::User()->name); ?>!</h3>
                    <?php endif; ?>
                </div>
                <div class="column">
                    <div class="col-container">
                        <h3>Find Doctors</h3>
                        <div id="maps"></div>
                        <form action="">
                            <input type="text" class="maps-search" id="search" placeholder="Search"/>
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
            <div class="row">
                <div class="col">cols</div>
                <div class="col">col</div>
                <div class="col">col</div>
                <div class="col">col</div>
            </div>
                <div class="row">
                <div class="col-8">col-8</div>
                <div class="col-4">col-4</div>
            </div>
        </div>
    </div>
</div>
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

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\Anesu\OneDrive\UTS\Semester 1\Software Studio\E-Healthcare\SES_1A_Group_2_E-Healthcare\resources\views/dashboard.blade.php ENDPATH**/ ?>