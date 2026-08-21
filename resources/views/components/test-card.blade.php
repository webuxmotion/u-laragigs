@props(['test'])

<div class="flex">
  <div>
    <h3 class="text-2xl">
      <a href="/test/{{ $test->id }}">{{ $test->title }}</a>
    </h3>
  </div>
</div>