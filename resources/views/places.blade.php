<!DOCTYPE html>
<html>
<head>
    <title>Lugares Recomendados</title>
</head>
<body>
    <h1>Lugares Recomendados</h1>
    <ul>
        @foreach ($places['results'] as $place)
            <li>
                <strong>{{ $place['name'] }}</strong><br>
                {{ $place['vicinity'] }}<br>
                <a href="https://www.google.com/maps/search/?api=1&query={{ $place['geometry']['location']['lat'] }},{{ $place['geometry']['location']['lng'] }}" target="_blank">Ver en Google Maps</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
