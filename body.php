<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
        html {  height: 100%; }
        
        #map_canvas { 
        height: 400px;
          width: 1160px;}
    </style>
    <script type="text/javascript">
        function initialize() {
            var latlng = new google.maps.LatLng(23.777176, 90.399452);
            var myOptions = {
                zoom: 18,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map_canvas"),
        myOptions);
            var c=0;
              var x=0;
            google.maps.event.addListener(map, 'click', function(event) {
              

              if(c<=2){
              placeMarker(event.latLng);
              }
    });
            var count = 1;
            var e1=0.0;
            var e2=0.0;
            var e3=0.0;
            var e4=0.0;
    function placeMarker(location) {
          if(count <= 2) {
           
          var marker = new google.maps.Marker({
              position: location, 
              map: map,
              draggable: true,
              title: 'First'
          });
          google.maps.event.addListener(marker,'dragend',function(){
        var lat=marker.getPosition().lat();
        var long=marker.getPosition().lng();
            if(count==2)
            {

              document.getElementById('lat').value=lat;
              document.getElementById('long').value=long;
              e1=e1+2;
            }
            else if(count>2)
           {
              document.getElementById('lat1').value=lat;
              document.getElementById('long1').value=long;
              e1=e1+1;

           }

          });
        
      }
      
      count = count + 1;


    
    }
       
      }
        var myKey = "AIzaSyCpqv9MH85KjKuZDJ89VH5mpmjrSsKb_JE";
        function loadScript() {
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = "https://maps.googleapis.com/maps/api/js?key=" + myKey + "&sensor=false&callback=initialize";
            document.body.appendChild(script);
        }
    </script>
</head>
<body onload="loadScript()">
<div class="body_wrapper">
    <div class="body">
      <div class="body_left">
            <nav>
                <ul>
                   <li><a href="index.php" class="current">Home</a></li>
                   <li><a href="login.php">Log In</a></li>
                   <li><a href="signup.php">Sign Up</a></li>
                </ul>
            </nav>
        </div>

    <div id="map_canvas" >
    </div>
    </div>
    <form action="">
      <input type="hidden" name="lat" id="lat">
      <input type="hidden" name="long" id="long">
       <input type="hidden" name="lat1" id="lat1">
      <input type="hidden" name="long1" id="long1">
      <input type="submit" value="Show Me the routes">
    </form>
</body>
</html>
