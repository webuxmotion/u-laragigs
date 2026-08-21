@extends('layout')

@section('content')

<div class="p-4"><a href="{{ route('tests.create') }}">Create test +</a></div>

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

  @if (count($tests) == 0)
  <p>No tests found</p>
  @else

  @foreach ($tests as $test)
  <x-card class="p-6">
    <x-test-card :test="$test" />
  </x-card>
  @endforeach
  @endif

</div>
@endsection