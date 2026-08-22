<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
  public function index()
  {
    $search = request('search');

    $tests = Test::latest()->filter(['search' => $search])->get();

    if ($search) {
      foreach ($tests as $test) {
        $test->from_search_query = $search;
      }
    }

    return view('tests.index', compact('tests'));
  }

  public function show(int $id)
  {
    $from_search_query = request('from_search_query');
    $test = Test::find($id);

    if ($from_search_query && $test) {
      $test->from_search_query = $from_search_query;
    }

    return view('tests.show', compact('test'));
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

    return redirect()->route('tests.index')->with('message', 'Test created successfully!');
  }
}
