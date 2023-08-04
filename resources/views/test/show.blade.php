@extends('layouts.layout')

@section('content')



    <div class="row gy-4">

        <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">

                    <div class="swiper-slide">
                        <img src="{{ $post->img }}" alt="">
                    </div>


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
                <p>
                    Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                </p>
            </div>
        </div>

    </div>


@endsection
