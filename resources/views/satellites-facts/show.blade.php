@extends('layout')

@section('content')

@empty($fact)
<p>test item not found</p>
@else
<a href="{{ route('satellites-facts.index') }}"
  class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
</a>

<div class="mx-4">
  <x-card class="p-10">
    <div class="flex flex-col items-center justify-center text-center">
      <p>{{ $fact->id }}</p>

      <h3 class="text-2xl mb-2">{{ $fact->title }}</h3>
      <p>{{ $fact->description }}</p>
    </div>
  </x-card>
</div>
@endif
@endsection