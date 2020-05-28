@include('layouts.app')
<body>
    <div class="content login-page">
        <div class="user-home">
            <div class="row">
                <div class="user-name">
                    @guest
                    @if (Route::has('register'))
                    <h3>Welcome Guest!</h3>
                    @endif
                    @else <h3>Welcome {{Auth::User()->name}}!</h3>
                    @endguest
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
        </div>
    </div>
    
    <div class="row">
        <div class="col">col</div>
        <div class="col">col</div>
        <div class="col">col</div>
        <div class="col">col</div>
    </div>
        <div class="row">
        <div class="col-8">col-8</div>
        <div class="col-4">col-4</div>
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
        marker.addListener('click', toggleBounce);

        function toggleBounce() {
            if (marker.getAnimation() !== null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }

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




