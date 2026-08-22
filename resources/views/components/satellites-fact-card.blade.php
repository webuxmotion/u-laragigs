@props(['fact'])

<div class="flex">
  <div>
    <h3 class="text-2xl">
      <a href="{{ route('satellites-facts.show', ['satellites_fact' => $fact->id]) }}">{{ $fact->title }}</a>
    </h3>
    <p>{{ $fact->description }}</p>
  </div>

</div>