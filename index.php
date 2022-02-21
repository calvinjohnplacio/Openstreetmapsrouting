
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.css" />
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body style='border:0; margin: 0'>
        <div id='map'></div>
        <div class="formBlock">
 <script type="text/javascript">
     function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  //x.innerHTML = "Latitude: " + position.coords.latitude + 

  document.getElementById("destination").value = position.coords.latitude+","+position.coords.longitude;
}
getLocation();
 </script>
            <form id="form">

                <input type="text" name="start" class="input" id="start" placeholder="Input your destination"/>
                <input type="hidden" name="end" class="input" id="destination" placeholder="Choose starting point" readonly/><br>
                <button style="width: 100%" type="submit">Get Directions</button>
            </form>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js"></script>
        <script src="https://www.mapquestapi.com/sdk/leaflet/v2.2/mq-map.js?key=S8d7L47mdyAG5nHG09dUnSPJjreUVPeC"></script>
        <script src="https://www.mapquestapi.com/sdk/leaflet/v2.2/mq-routing.js?key=S8d7L47mdyAG5nHG09dUnSPJjreUVPeC"></script>
        <script src="app.js"></script>
    </body>
</html>