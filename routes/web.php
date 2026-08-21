<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [ListingController::class, 'index']);
Route::get('/listings', [ListingController::class, 'index']);

// Show create form
Route::get('/listings/create', [ListingController::class, 'create']);
Route::post('/listings', [ListingController::class, 'store']);

Route::get('/listings/{id}', [ListingController::class, 'show'])->whereNumber('id');

// test
Route::get('/test', [TestController::class, 'index']);
Route::get('/test/create', [TestController::class, 'create']);
Route::post('/test/create', [TestController::class, 'store']);
Route::get('/test/{id}', [TestController::class, 'single']);


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
