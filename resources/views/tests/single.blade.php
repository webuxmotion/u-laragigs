@extends('layout')

@section('content')

@if ($test)
<a href="/test" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
  <x-card class="p-10">
    <div class="flex flex-col items-center justify-center text-center">
      <p>{{  $test->id }}</p>

      <h3 class="text-2xl mb-2">{{ $test->title }}</h3>

    </div>
  </x-card>
</div>
@else
<p>test item not found</p>
@endif
@endsection