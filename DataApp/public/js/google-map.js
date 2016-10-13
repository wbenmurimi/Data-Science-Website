     function initialize() {
      var map;
      var position = new google.maps.LatLng(-1.94455,30.0874248);    // set your own default location.
      var myOptions = {
        zoom: 15,
        center: position
      };
      var map = new google.maps.Map(document.getElementById("map"), myOptions);

      // We send a request to search for the location of the user.  
      // If that location is found, we will zoom/pan to this place, and set a marker
      navigator.geolocation.getCurrentPosition(locationFound, locationNotFound);

      function locationFound(position) {
        // we will zoom/pan to this place, and set a marker
        var location = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
        // var accuracy = position.coords.accuracy;

        map.setCenter(location);
        var marker = new google.maps.Marker({
            position: location, 
            map: map, 
            draggable: true,
            title: "You are here! Drag the marker to the exact location of the property you want to list."
        });
        // set the value an value of the <input>
        updateInput(location.lat(), location.lng());

        // Add a "drag end" event handler
        google.maps.event.addListener(marker, 'dragend', function() {
          updateInput(this.position.lat(), this.position.lng());
        });


      }

      function locationNotFound() {
        // location not found, you might want to do something here
      }

    }
    function updateInput(lat, lng) {
      document.getElementById("longitude").value = lng;
       document.getElementById("latitude").value = lat;
    }
    google.maps.event.addDomListener(window, 'load', initialize);