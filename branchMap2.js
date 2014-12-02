

      function initialize() {
        var mapOptions = {
          center: { lat: 35.20839, lng: -78.199115},
          zoom: 7
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
        
        
        
        var markerRaleigh = new google.maps.Marker({
      position: { lat: 35.831438, lng: -78.607163},
      map: map,
      title: 'Raleigh Branch'
        });
        
         var markerGreenville = new google.maps.Marker({
      position: { lat: 35.570839, lng: -77.441115},
      map: map,
      title: 'Greenville Branch'
        });
         
         var markerDurham = new google.maps.Marker({
      position: { lat: 35.977454, lng: -78.871522},
      map: map,
      title: 'Durham Branch'
        });
         
          var markerNewBern = new google.maps.Marker({
      position: { lat: 35.135262, lng: -77.074389},
      map: map,
      title: 'New Bern Branch'
        });
          
           var markerSandhills = new google.maps.Marker({
      position: { lat: 35.158863, lng: -79.416124},
      map: map,
      title: 'Sandhills Branch'
        });
           
           var markerWilmington = new google.maps.Marker({
      position: { lat: 34.221480, lng: -77.930915},
      map: map,
      title: 'Wilmington Branch'
        });
        
         var infowindow = new google.maps.InfoWindow({
      content: '<p id="windowStyle"><a href="http://www.foodbankcenc.org/site/PageServer?pagename=branch_raleigh" target="_blank">Raleigh Branch</a><br>3808 Tarheel Drive, Raleigh, NC 27609</p>'
      });
         
         var infowindowGreenville = new google.maps.InfoWindow({
        content: '<p id="windowStyle"><a href="http://www.foodbankcenc.org/site/PageServer?pagename=branch_greenville" target="_blank">Greenville Branch</a><br>1712 Union Street, Greenville, NC 27834</p>'
        });
         
          var infowindowDurham = new google.maps.InfoWindow({
        content: '<p id="windowStyle"><a href="http://www.foodbankcenc.org/site/PageServer?pagename=branch_durham" target="_blank">Durham Branch</a><br>2700 Angier Avenue, Suite A Durham, NC 27703</p>'
        });
          
           var infowindowNewBern = new google.maps.InfoWindow({
        content: '<p id="windowStyle"><a href="http://www.foodbankcenc.org/site/PageServer?pagename=Branch_NewBern" target="_blank">New Bern Branch</a><br>205 South Glenburnie Rd, New Bern, NC 28560</p>'
        });

        var infowindowSandhills = new google.maps.InfoWindow({
        content: '<p id="windowStyle"><a href="http://www.foodbankcenc.org/site/PageServer?pagename=branch_sandhills" target="_blank">Sandhills Branch</a><br>195 Sandy Avenue, Southern Pines, NC 28387</p>'
        });
        
        var infowindowWilmington = new google.maps.InfoWindow({
        content: '<p id="windowStyle"><a href="http://www.foodbankcenc.org/site/PageServer?pagename=branch_wilmington" target="_blank">Wilmington Branch</a><br>1314 Marstellar Street, Wilmington, NC 28401</p>'
        });
  
        google.maps.event.addListener(markerRaleigh, 'click', function() {
         infowindow.close() ;
         infowindow.open(map,markerRaleigh);
        });
        google.maps.event.addListener(markerGreenville, 'click', function() {
        infowindowGreenville.close() ;
        infowindowGreenville.open(map,markerGreenville);
        });
        google.maps.event.addListener(markerDurham, 'click', function() {
        infowindowDurham.close() ;
        infowindowDurham.open(map,markerDurham);
        });
        google.maps.event.addListener(markerNewBern, 'click', function() {
        infowindowNewBern.close() ;
        infowindowNewBern.open(map,markerNewBern);
        });
        google.maps.event.addListener(markerSandhills, 'click', function() {
        infowindowSandhills.close() ;
        infowindowSandhills.open(map,markerSandhills);
        });
         google.maps.event.addListener(markerWilmington, 'click', function() {
        infowindowWilmington.close() ;
        infowindowWilmington.open(map,markerWilmington);
        });
      }
      
      google.maps.event.addDomListener(window, 'load', initialize);
