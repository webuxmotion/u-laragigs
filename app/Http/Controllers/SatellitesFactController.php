<?php

namespace App\Http\Controllers;

use App\Models\SatellitesFact;
use Illuminate\Http\Request;

class SatellitesFactController extends Controller
{
  public function index()
  {
    return view('satellites-facts.index', ['satellitesFacts' => SatellitesFact::latest()->get()]);
  }

  public function show(SatellitesFact $satellites_fact)
  {
    return view('satellites-facts.show', [
      'fact' => $satellites_fact
    ]);
  }

  public function create()
  {
    return view('satellites-facts.create');
  }

  public function store(Request $request)
  {
    $formFields = $request->validate([
      'title' => 'required',
      'description' => 'required',
    ]);

    SatellitesFact::create($formFields);

    return redirect()->route('satellites-facts.index');
  }
}
