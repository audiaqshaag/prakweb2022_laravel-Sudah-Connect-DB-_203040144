@extends('layouts.main')
@section('container')

    <article>

        <h2>{{ $post->title }}</h2>
        {{-- <h5>{{ $post['author'] }}</h5> --}}
        <p>By. <a class="text-decoration-none" href="">{{ $post->user->name }}</a> in <a
                href="/categories/{{ $post->Category->slug }}">{{ $post->Category->name }}</p></a>

        {!! $post->body !!}


    </article>

    <a href="/blog">Back to Post</a>
@endsection
