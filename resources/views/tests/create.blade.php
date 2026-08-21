@extends('layout')

@section('content')

<x-card
    class="p-10 rounded max-w-lg mx-auto mt-24"
>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
              Create a Test
          </h2>
          <p class="mb-4">Post a test to test the test module</p>
      </header>

      <form method="POST" action="/test/create">
  @csrf
          

          <div class="mb-6">
              <label for="title" class="inline-block text-lg mb-2"
                  >Title</label
              >
              <input
                  type="text"
                  class="border border-gray-200 rounded p-2 w-full"
                  name="title"
                  placeholder="Example: Some title"
              />
@error('title')
  <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror

          </div>

          

          <div class="mb-6">
              <button
                  class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
              >
                  Create Test
              </button>

              <a href="/test" class="text-black ml-4"> Back </a>
          </div>
      </form>
  </x-card>

@endsection
