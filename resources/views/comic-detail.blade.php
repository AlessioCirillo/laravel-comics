@extends('layouts.main')

@section('content')

    <section class="comic">
    
        <section class="hero" style="background-image: url({{ $comic['image-hero'] }})">
            <div class="container">
                <img src="{{ $comic['image-cover']}}" alt="{{ $comic['title'] }}">
            </div>

            <div class="blue-bar">
            </div>
        </section>

        <div class="container">
            <h1>{{ $comic['title'] }}</h1>
            <div class="price">{{ $comic['price'] }}</div>
            <div class="text">{!! $comic['body'] !!}</div>
        </div>
    </section>
@endsection