@props(['test'])

<div class="flex">
  <div>
    <h3 class="text-2xl">
      <a href="{{ route('tests.show', $test->id) }}">{{ $test->title }}</a>
    </h3>
  </div>
</div>