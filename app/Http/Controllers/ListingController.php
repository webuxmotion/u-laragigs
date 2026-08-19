<?php

namespace App\Http\Controllers;

use App\Models\Listing;

class ListingController extends Controller
{
  public function index() {
    return view('listings.index', [
        'listings' => Listing::all()
    ]);
  }

  public function show(int $id) {
    return view('listings.show', [
        'listing' => Listing::find($id)
    ]);
  }
}
