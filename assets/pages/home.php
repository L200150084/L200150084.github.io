
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
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
      #floating-panel {
        background-color: #fff;
        border: 1px solid #999;
        left: 25%;
        padding: 5px;
        position: absolute;
        top: 10px;
        z-index: 5;
      }
    </style>

    <div id="floating-panel">
      <button onclick="toggleHeatmap()">Toggle Heatmap</button>
      <button onclick="changeGradient()">Change gradient</button>
      <button onclick="changeRadius()">Change radius</button>
      <button onclick="changeOpacity()">Change opacity</button>
    </div>
    <div id="map"></div>
    <script>
      // This example requires the Visualization library. Include the libraries=visualization
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=visualization">
      var citymap = {
        chicago: {
          center: {lat: -7.687588, lng: 110.834854},
          population: 10000
        }
      };
      var map, heatmap;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: {lat: -7.5592076, lng: 110.7837924},
          mapTypeId: 'satellite'
        });
        heatmap = new google.maps.visualization.HeatmapLayer({
          data: getPoints(),
          map: map
        });
      
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });
        for (var city in citymap) {
          // Add the circle for this city to the map.
          var cityCircle = new google.maps.Circle({
            strokeColor: '#FF0000',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#FF0000',
            fillOpacity: 0.35,
            map: map,
            center: citymap[city].center,
            radius: Math.sqrt(citymap[city].population) * 100
          });
        }
        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }
      function toggleHeatmap() {
        heatmap.setMap(heatmap.getMap() ? null : map);
      }
      function changeGradient() {
        var gradient = [
          'rgba(0, 255, 255, 0)',
          'rgba(0, 255, 255, 1)',
          'rgba(0, 191, 255, 1)',
          'rgba(0, 127, 255, 1)',
          'rgba(0, 63, 255, 1)',
          'rgba(0, 0, 255, 1)',
          'rgba(0, 0, 223, 1)',
          'rgba(0, 0, 191, 1)',
          'rgba(0, 0, 159, 1)',
          'rgba(0, 0, 127, 1)',
          'rgba(63, 0, 91, 1)',
          'rgba(127, 0, 63, 1)',
          'rgba(191, 0, 31, 1)',
          'rgba(255, 0, 0, 1)'
        ]
        heatmap.set('gradient', heatmap.get('gradient') ? null : gradient);
      }
      function changeRadius() {
        heatmap.set('radius', heatmap.get('radius') ? null : 20);
      }
      function changeOpacity() {
        heatmap.set('opacity', heatmap.get('opacity') ? null : 0.2);
      }
      // Heatmap data: 500 Points
      function getPoints() {
        return [
          new google.maps.LatLng(-7.533825, 110.482803),
          new google.maps.LatLng(-7.533845, 110.482903),
          new google.maps.LatLng(-7.533855, 110.483203),
          new google.maps.LatLng(-7.533865, 110.483503),
          new google.maps.LatLng(-7.533875, 110.483703),
          new google.maps.LatLng(-7.533895, 110.483903),
          new google.maps.LatLng(-7.533995, 110.484003),
          new google.maps.LatLng(-7.534095, 110.484103),
          new google.maps.LatLng(-7.534195, 110.484203),
          new google.maps.LatLng(-7.534295, 110.484303),
          new google.maps.LatLng(-7.534395, 110.484403),
          new google.maps.LatLng(-7.534495, 110.484503),
          new google.maps.LatLng(-7.534595, 110.484603),
          new google.maps.LatLng(-7.534695, 110.484703),
          new google.maps.LatLng(-7.534795, 110.484803),
          new google.maps.LatLng(-7.534895, 110.484903),
          new google.maps.LatLng(-7.534995, 110.485003),
          new google.maps.LatLng(-7.535095, 110.485103),
          new google.maps.LatLng(-7.535195, 110.485203),
          new google.maps.LatLng(-7.535295, 110.485303),
          new google.maps.LatLng(-7.535395, 110.485403),
          new google.maps.LatLng(-7.535495, 110.485503),
          new google.maps.LatLng(-7.535595, 110.485603),
          new google.maps.LatLng(-7.535695, 110.485703)
          
          ];
      }
      var locations = [
        {lat: -7.557920, lng: 110.771630},
        {lat: -7.544359, lng: 110.762548},
        {lat: -7.546878, lng: 110.766994},
        {lat: -7.557236, lng: 110.769317},
        {lat: -7.561749, lng: 110.768506},
        {lat: -7.682676, lng: 110.841270},
        {lat: -7.677998, lng: 110.840884},
        {lat: -7.694669, lng: 110.848244}
      ];
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMimCTVEwZJovoX-3sORcV9Gwv1T-QSOM&libraries=visualization&callback=initMap">
    </script>
  