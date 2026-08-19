@extends('layout')

@section('content')
@include('partials._search')

@if ($listing)
<h1>{{ $heading }}</h1>
<h2>{{ $listing['title'] }}</h2>
<p>{{ $listing['description'] }}</p>
@else
<p>Listing with id {{ $id }} not found</p>
@endif
@endsection