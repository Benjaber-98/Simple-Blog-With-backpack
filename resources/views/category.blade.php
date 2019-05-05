@extends('layouts.layout')


@section('content')
    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--top-padding">

        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h1 class="display-1 display-1--with-line-sep">Category: {{ $category->name }}</h1>
            </div>
        </div>

        <div class="row entries-wrap add-top-padding wide">
            <div class="entries">

                @foreach($posts as $post)
                    <article class="col-block">

                        <div class="item-entry" data-aos="zoom-in">
                            <div class="item-entry__thumb">
                                <a href="/posts/{{ $post->id }}" class="item-entry__thumb-link">
                                    <img src=""
                                         srcset="{{ asset('images/thumbs/post/lamp-400.jpg') }} 1x, {{ asset('images/thumbs/post/lamp-800.jpg') }} 2x" alt="">
                                </a>
                            </div>

                            <div class="item-entry__text">
                                <div class="item-entry__cat">
                                    <a href="/category/{{ $category->id }}">{{ $category->name }}</a>
                                </div>

                                <h1 class="item-entry__title"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h1>

                                <div class="item-entry__date">
                                    <a href="/posts/{{ $post->id }}">{{ $post->created_at }}</a>
                                </div>
                            </div>
                        </div> <!-- item-entry -->

                    </article> <!-- end article -->

                @endforeach
            </div>
        </div>

        {{ $posts->links() }}

    </section> <!-- end s-content -->
@endsection
