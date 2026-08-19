@extends('layout')

@section('content')
    <?php echo $heading ?? 'Listings'; ?>

    <?php foreach($listings ?? [] as $listing): ?>
    <h2><?php echo $listing['title']; ?></h2>
    <p><?php echo $listing['description']; ?></p>
    <?php endforeach; ?>

    @php
        $test = 1;
    @endphp

    @if (count($listings) == 0)
        <p>No listings found</p>
    @else
        <h1>{{ $heading }}</h1>
        <span>{{ $test }}</span>

        @foreach ($listings as $listing)
            <a href="/listings/{{ $listing['id'] }}">
                <h2>{{ $listing['title'] }}</h2>
                <p>{{ $listing['description'] }}</p>
            </a>
        @endforeach
    @endif
@endsection
