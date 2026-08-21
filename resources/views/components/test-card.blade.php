@props(['test'])

<div class="flex">
  <div>
    <h3 class="text-2xl">
      <a href="{{ route('tests.show', ['test' => $test->id, 'from_search_query' => $test->from_search_query]) }}">{{ $test->title }}</a>
    </h3>
  </div>
</div>