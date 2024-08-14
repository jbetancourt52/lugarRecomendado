<!DOCTYPE html>
<html>
<head>
    <title>Google Maps Integration</title>
    <style>
        #map {
            height: 500px; /* Altura del mapa */
            width: 100%;   /* Ancho del mapa */
        }
    </style>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}"></script>
    <script>
        function initMap() {
            // Configura las coordenadas iniciales y el mapa
            var mapOptions = {
                center: new google.maps.LatLng(40.748817, -73.985428), // Coordenadas de ejemplo (Times Square, NYC)
                zoom: 12,
            };

            // Crea el mapa y lo coloca en el div con id "map"
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);

            // Agrega un marcador en el mapa
            var marker = new google.maps.Marker({
                position: { lat: 40.748817, lng: -73.985428 },
                map: map,
                title: 'Times Square, NYC'
            });
        }
    </script>
</head>
<body onload="initMap()">
    <h1>Mi Mapa de Google</h1>
    <div id="map"></div>
</body>
</html>
