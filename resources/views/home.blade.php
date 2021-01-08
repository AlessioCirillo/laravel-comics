@extends('layouts.main')

@section('content')
    
    @include('partials.hero-text')

    <section class="main">
        <div class="container">
            <ul>
                @foreach ($comics as $item)
                    <li>
                        <a href="{{ route('comic-detail', $item['slug']) }}">
                            <img src="{{ $item['image'] }}" alt="">
                            <div>{{ $item['title'] }}</div>
                        </a>
                    </li>
                @endforeach
            </ul>

            <a href="">
                <div class="button">
                    <p>load more</p>
                </div>
            </a>
        </div>
    </section>

    <section class="merch">

        <div class="container">
            <ul>
                <li>
                    <a href="">
                        <img src="{{ asset('img/digital-comics.png') }}" alt="">
                        <p>digital comics</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ asset('img/merchandise.png') }}" alt="">
                         <p>dc merchandise</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ asset('img/subscriptions.png') }}" alt="">
                         <p>subscription</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ asset('img/shop-locator.png') }}" alt="">
                         <p>comic shop locator</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ asset('img/power-visa.svg') }}" alt="">
                         <p>dc power visa</p>
                    </a>
                </li>
            </ul>
        </div>
    </section>
@endsection
