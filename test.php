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
            google.maps.event.addListener(map, 'click', function() {
              if(c<=2){
                
            var marker = new google.maps.Marker({
              position: {lat: 23.777176, lng: 90.399452}, 
              map: map,
              draggable: true
              title: label;
              
          });
            marker.position
            google.maps.event.addListener(marker,'dragend',function(){
        var lat=marker.getPosition().lat();
        var long=marker.getPosition().lng();
            if(c==1)
            {

              document.getElementById('lat').value=lat;
              document.getElementById('long').value=long;

            }
            else if(c==2)
           {
              document.getElementById('lat1').value=lat;
              document.getElementById('long1').value=long;

              c=1;
           }

          });
        }
          c=c+1;
    });
    
       
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
   
    </form>
</body>
</html>
