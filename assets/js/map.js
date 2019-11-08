// Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      
      function initMap() {
        
	map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 55.604980, lng: 13.003822},
          zoom: 13
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
            map.setZoom(17);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }

	var stores = [
	{
		name: 'Store 1',
		location: {lat: 55.6065747, lng: 13.0188266},
		hours: '8AM to 10PM'
	},
	{
		name: 'Store 2',
		location: {lat: 55.5997093, lng: 12.999508},
		hours: '9AM to 9PM'
	}
	];

	function markStore(storeInfo){

	// Create a marker and set its position.
	var marker = new google.maps.Marker({
		map: map,
		position: storeInfo.location,
		title: storeInfo.name
	});

	// show store info when marker is clicked
	marker.addListener('click', function(){
		showStoreInfo(storeInfo);
	});
 }	

	// show store info in text box
	function showStoreInfo(storeInfo){
		var info_div = document.getElementById('info_div');
		infoWindow.setPosition(storeInfo.location);
        infoWindow.setContent(info_div.innerHTML = 'Store name: '
			+ storeInfo.name
			+ '<br>Hours: ' + storeInfo.hours);
        infoWindow.open(map);
        map.setCenter(storeInfo.location);
	}

	stores.forEach(function(store){
	markStore(store);
	});


}

