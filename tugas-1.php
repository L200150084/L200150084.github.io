<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Using MySQL and PHP with Google Maps</title>
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

     function initMap() {
        var uluru = {lat: -7.5592076, lng: 110.7837924};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: uluru
        });

        var marker = new google.maps.Marker({
          position: {lat: -7.557920, lng: 110.771630},
          map: map
        });
        var marker = new google.maps.Marker({
         position: {lat: -7.544359, lng: 110.762548},
          map: map
        });
        var marker = new google.maps.Marker({
         position: {lat: -7.546878, lng: 110.766994},
          map: map
        });
        var marker = new google.maps.Marker({
         position: {lat: -7.557236, lng: 110.769317},
          map: map
        });
        var marker = new google.maps.Marker({
         position: {lat: -7.561749, lng: 110.768506},
          map: map
        });
      }
      
    

      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMimCTVEwZJovoX-3sORcV9Gwv1T-QSOM&callback=initMap">
    </script>
  </body>
</html>