<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
  public function index()
  {
    return view('tests.index', [
      'tests' => Test::latest()
        ->filter(request(['search']))
        ->get()
    ]);
  }

  public function show(int $id)
  {
    return view('tests.show', [
      'test' => Test::find($id)
    ]);
  }

  public function create()
  {
    return view('tests.create');
  }

  public function store(Request $request)
  {
    $formFields = $request->validate([
      'title' => 'required',
    ]);

    Test::create($formFields);

    return redirect()->route('tests.index');
  }
}
