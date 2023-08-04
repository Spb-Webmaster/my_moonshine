@extends('layouts.layout')



@section('content')

    <div class="row gy-4">

        <div class="col-lg-12">
            @foreach ($posts as $post)
                <div class="portfolio-info mb-3">
                    <h3><a href="{{ route('test.show', $post->id) }}">{{ $post->title }}</a></h3>
                    <div class="row gy-4">
                        <div class="col-lg-9">

                            <ul>
                                <li><strong>Category</strong>: {{ $post->category }}</li>
                                <li><strong>Client</strong>: {{ $post->client }}</li>
                                <li><strong>Project date</strong>: {{ $post->projectdate }}</li>
                                <li><strong>Project URL</strong>: {{ $post->projecturl }}</li>
                            </ul>
                        </div>
                        <div class="col-lg-3">

                            <img src="{{ $post->img }}" width="200"/>

                        </div>
                    </div>

                </div>
            @endforeach


            <div class="portfolio-description">
                <h2>This is an example of portfolio detail</h2>
                <p>
                    Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia
                    quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem
                    officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum
                    deserunt eius.
                </p>
            </div>
        </div>

    </div>

@endsection
