@props(['tags'])

@php
$tags_arr = $tags ? array_map('trim', explode(',', $tags)) : [];
@endphp

@if(!empty($tags_arr))
<ul class="flex">
  @foreach($tags_arr as $tag)
  @if(filled($tag))
  <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
    <a href="/?tag={{ $tag }}">{{ $tag }}</a>
  </li>
  @endif
  @endforeach
</ul>
@endif