<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

Route::get('/listings', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'heading' => 'Single Listing with id: ' . $id,
        'id' => $id,
        'listing' => Listing::find($id)
    ]);
});

Route::get('/hello', function () {
    return response('<h1>Hello world!</h1>')
        ->header('Content-Type', 'text/plane')
        ->header('foo', 'bar');
});

Route::get('/posts/{id}', function($id) {
    dd($id);
    return response('Post ' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request) {
    return $request->name . ' from ' . $request->city;
});