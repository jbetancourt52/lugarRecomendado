<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlaceController extends Controller {

    public function search(Request $request)
    {
        //http://localhost/search?location=40.748817,-73.985428&radius=1500&type=tourist_attraction
        $location = $request->input('location');
        $radius = $request->input('radius', 1500);
        $type = $request->input('type', 'tourist_attraction');
        $apiKey = env('GOOGLE_MAPS_API_KEY');

        $response = Http::get('https://maps.googleapis.com/maps/api/place/nearbysearch/json', [
            'location' => $location,
            'radius' => $radius,
            'type' => $type,
            'key' => $apiKey,
        ]);

        print_r($response->json());
        die();

        $places = $response->json();

        return view('places', ['places' => $places]);
    }

}
