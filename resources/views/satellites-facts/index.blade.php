@extends('layout')

@section('content')

<div class="p-4"><a href="{{ route('satellites-facts.create') }}">Create Satellites Fact +</a></div>

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

  @empty($satellitesFacts)
  <p>No Satellites Facts found</p>
  @else

  @foreach ($satellitesFacts as $fact)
  <x-card class="p-6">
    <x-satellites-fact-card :fact="$fact" />
  </x-card>
  @endforeach
  @endif

</div>
@endsection