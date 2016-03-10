jQuery(function($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');
    script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
    document.body.appendChild(script);
});

function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'satellite'
    };
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    map.setTilt(45);
        
    // Multiple Markers
    var markers = [
        ['Weston Cricket Club, Weston-Super-Mare', 51.328431,-2.974566],
        ['Uphill Scout Hut, Weston-Super-Mare', 51.328221,-2.972480]
    ];
                        
    // Info Window Content
    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h3>Weston Cricket Club</h3>' +
        '<p>Karate lessons are held here on Saturdays 10:30 - 11:30 kids and 10:30 - 12:30 adults,<br/> please park on Devonshire road and use the side gate. Thank you</p>' +        '</div>'],
        ['<div class="info_content">' +
        '<h3>Uphill Scout Hut</h3>' +
        '<p>Karate lessons are held here on Wednesdays 18:00 - 19:00 for kids and 19:15 - 20:30 for adults. Parking is available.</p>' +
        '</div>']
    ];
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(17);
        google.maps.event.removeListener(boundsListener);
    });
    
}