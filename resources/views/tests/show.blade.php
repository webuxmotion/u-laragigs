@extends('layout')

@section('content')

@empty($test)
<p>test item not found</p>
@else
<a href="{{ route('tests.index', ['search' => $test->from_search_query]) }}"
  class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
  <x-card class="p-10">
    <div class="flex flex-col items-center justify-center text-center">
      <p>{{ $test->id }}</p>

      <h3 class="text-2xl mb-2">{{ $test->title }}</h3>

    </div>
  </x-card>
</div>
@endif
@endsection