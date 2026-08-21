<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TestController extends Controller
{
  public function index()
  {
    return view('tests.index', [
      'tests' => Test::latest()
        ->get()
    ]);
  }

  public function single(int $id)
  {
    return view('tests.single', [
      'test' => Test::find($id)
    ]);
  }

  public function create()
  {
    return view('tests.create');
  }

  public function store(Request $request) {
    $formFields = $request->validate([
      'title' => 'required',
    ]);

    Test::create($formFields);

    return redirect('/test');
  }
}
