@include('layouts.app')
<head>
    <style>
        #maps {
            height: 74%;
            width: 100%;
            
        }
        #floating-panel {
            position: absolute;
            top: 13%;
            right: 2%;
            width: 20%;
            z-index: 5;
            background-color: #fff;
            padding: 5px;
            border: 1px solid #999;
            text-align: center;
            font-family: 'Roboto','sans-serif';
            line-height: 20px;
            padding-left: 10px;
        }
        #floating-panel {
            margin-left: -52px;
        }

    </style>
</head>
<body>
    <div class="content login-page">
        <div class="user-home">
            <div class="row">
                <div class="user-name">
                    @guest
                    @if (Route::has('register'))
                    <h4>Welcome Guest!</h4>
                    @endif
                    @else <h3>Welcome {{Auth::User()->name}}!</h3>
                    @endguest
                    <h3>Find Doctors</h3>
                </div>  

            </div>
                <div id="floating-panel">
                    <h4>Added Doctors</h4>
                        <!-- <button id="drop" onclick="drop()">Drop Markers</button> -->
                        <div class="floating-panel" id="history">
                          {{-- messages.js handles the messages displayed here --}}
                      </div>
                    </div>
                <div id="maps">
                        
            </div>
        </div>
    </div>
<script>

    var locations = [
        {lat: -33.8651430, lng: 151.206},
        {lat: -33.8652, lng: 151.21},
        {lat: -33.79, lng: 151.2091},
        {lat: -33.84, lng: 151.2098},
        {lat: -33.9, lng: 149.6},
        {lat: -35.9, lng: 149.2}
        
    ];
    var names = ['John Smith', 'Nota Relnam', 'Faik Naem', 'Doctor Tim', 'Dr Bingo','wow'];
    var markers = [];
    var map;
    var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';

    function initMap() {
        map = new google.maps.Map(document.getElementById('maps'), {
          zoom: 12,
          center: {lat: -33.8651430, lng: 151.209900},
          streetViewControl: false,
          rotateControl: false,
          fullscreenControl: false,
          styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#746855'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ]

        });
      }
      function drop() {
        clearMarkers();
        for (var i = 0; i < locations.length; i++) {
          addMarkerWithTimeout(locations[i], i * 200, i, names[i]);
          
        }
    }
    drop();

    function createMarker(point,map,index,name) {
        var markerOpts = {
            position: point,
            map: map,
            animation: google.maps.Animation.DROP,
            label: name.charAt(0),
            title: name
        };

        var marker = new google.maps.Marker(markerOpts);

        google.maps.event.addListener(marker, 'click', function() {
            window.alert(marker.getTitle());
            messageIn(marker.getTitle());
        });
        google.maps.event.addListener(marker, 'mouseover', function() {
            //messageIn(marker.getTitle());
        });
    }

    function addMarkerWithTimeout(position, timeout, index,name) {
        clearMarkers();
        window.setTimeout(function() {
        markers.push(createMarker(position,map,index,name));
        }, timeout);
        //window.alert(index);
    }

      function clearMarkers() {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(null);
        }
        markers = [];
      }

      function messageIn(message){
        var messageDiv = document.createElement("div"); // create <div>
        messageDiv.style.clear = 'both';
        messageDiv.className = "inbox-message in";
        // create text for message div
        var messageP = document.createElement("p"); //create <p> tag
        
        // append text to message div
        messageDiv.appendChild(messageP); // add <p> to <div>
        messageP.appendChild(document.createTextNode(message)); // insert text into <p>
        //append message div to chat history
        document.getElementById("history").appendChild(messageDiv);
      }





// function initMap() {
//     var location =	{lat: -33.868820, lng: 151.209290};
//     var map = new google.maps.Map(document.getElementById('map'), {
//     zoom: 12,
//     center: location
// });

// var marker = new google.maps.Marker({
//     position: location,
//     map: map
//     //animation: google.maps.Animation.DROP,
// });
// marker.addListener('click', toggleBounce);

// function toggleBounce() {
//     window.alert(5);
// //   if (marker.getAnimation() !== null) {
// //     marker.setAnimation(null);
// //   } else {
// //     marker.setAnimation(google.maps.Animation.BOUNCE);
// //   }
// }


// var searchbox = new google.maps.places.SearchBox(document.getElementById('search'));

// google.maps.event.addListener(searchbox, 'places_changed', function(){

//     var places = searhbox.getPlaces();
//     var bounds = new google.maps.LatLngBounds();
//     var i, place;

//     for(i=0; place=places[i];i++){
//         bounds.extend(place.geometry.location);
//         marker.setPosition(place.geometry.location);
//     }

//     map.fitBounds(bounds);
//     map.setZoom(15);

// });
// }
// google.maps.event.addDomListener(window,'load', initMap);
</script>
<!-- google maps api key -->
<script async defer 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABZr8y9YuOF9eQhxoC_P70V73zuJjFbkc&libraries=places&callback=initMap">
    </script>

</body>