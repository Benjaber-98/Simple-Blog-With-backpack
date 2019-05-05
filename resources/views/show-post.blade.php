@extends('layouts.layout')


@section('content')

    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--top-padding s-content--narrow">

        <article class="row entry format-standard">

            <div class="entry__media col-full">
                <div class="entry__post-thumb">
                    <img src="{{ asset('images/thumbs/single/standard/standard-1000.jpg') }}"
                         srcset="{{ asset('images/thumbs/single/standard/standard-2000.jpg') }} 2000w,
                                 {{ asset('images/thumbs/single/standard/standard-1000.jpg') }} 1000w,
                                 {{ asset('images/thumbs/single/standard/standard-500.jpg') }} 500w"
                         sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                </div>
            </div>

            <div class="entry__header col-full">
                <h1 class="entry__header-title display-1">
                    {{ $post->title }}.
                </h1>
                <ul class="entry__header-meta">
                    <li class="date">{{ $post->created_at }}</li>
                    <li class="byline">
                        By
                        <a href="#0">Jonathan Doe</a>
                    </li>
                </ul>
            </div>

            <div class="col-full entry__main">

                <p class="lead drop-cap">{{ $post->description }}</p>
            </div>
        </article>
    </section>



@endsection
