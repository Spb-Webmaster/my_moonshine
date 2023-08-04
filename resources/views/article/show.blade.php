@extends('layouts.layout')

@section('content')

    <div class="row gy-4">

        <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">


                    @if(isset($post->img))
                        <img src="{{ asset('storage/' . $post->img) }}" alt="">

                    @endif

                    @if(isset($post->gallery))
                        @foreach(json_decode($post->gallery) as $json)
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/' . $json->img) }}" alt="{{$json->title}}">
                            </div>
                        @endforeach
                    @endif


                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="portfolio-info">
                <h3>{{ $post->title }}</h3>
                <ul>
                    <li><strong>Category</strong>: {{ $post->category }}</li>
                    <li><strong>Client</strong>: {{ $post->client }}</li>
                    <li><strong>Project date</strong>: {{ $post->projectdate }}</li>
                    <li><strong>Project URL</strong>: {{ $post->projecturl }}</li>
                </ul>
            </div>
            <div class="portfolio-description">
                <h2>This is an example of portfolio detail</h2>
                {!! $post->description !!}
            </div>
            @if(json_decode($post->data))
                <div class="portfolio-info">
                    <ul>

                        @foreach(json_decode($post->data) as $json)
                            <li><strong>  {{$json->title}}</strong>: {{$json->value}}</li>

                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

    </div>

@endsection



