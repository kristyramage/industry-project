var map, userLocation, allMarkers, closestMarker, beaches;

document.addEventListener("DOMContentLoaded", function() {
	// Get a reference to the map container
	// jQuery returns an object rather than the element
	// .get(0) says get the first element from the result
	var mapContainer = $('#map-container').get(0);
	console.log(mapContainer);

	// Prepare the map options
	var options = {
		center: {
			lat: -41.223969, 
      		lng: 174.859291
		},
		zoom: 10
	}

	// Create the map
	map = new google.maps.Map( mapContainer, options );

});


}