@extends('layout')

@section('ttile','Portfolio')

@section('content')

    <p> Portfolio </p>
    <ul>
        @if ($portfolio)
            @foreach ($portfolio as $portfolioItem)
                <li>{{ $portfolioItem['title'] }}</li>
            @endforeach
        @else
            <li>No hay elementos</li>
        @endif
    </ul>
@endsection
