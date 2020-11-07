<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCpqv9MH85KjKuZDJ89VH5mpmjrSsKb_JE&libraries=places"></script>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
        google.maps.event.addListener(map, 'click', function(event) {
		   placeMarker(event.latLng);
		});
		var count = 1;
		function placeMarker(location) {
	        if(count <= 2) {
			    var marker = new google.maps.Marker({
			        position: location, 
			        map: map
			    });
			}
			count = count + 1;
		}
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpqv9MH85KjKuZDJ89VH5mpmjrSsKb_JE&callback=initMap"
    async defer></script>
  </body>
</html>