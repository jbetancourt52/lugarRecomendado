<?php
use App\Http\Controllers\PlaceController;

Route::get('/search', [PlaceController::class, 'search']);
Route::get('/map', function () {
    return view('map');
});
