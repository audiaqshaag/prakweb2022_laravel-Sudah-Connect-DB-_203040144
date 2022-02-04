@extends('layouts/main')
@section('container')

    <h1>Halaman {{ $title }}</h1>
    <br>
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-4">
            <h2>
                <a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post['title'] }}</a>

            </h2>

            <p>By. <a class="text-decoration-none" href="">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->Category->slug }}" class="text-decoration-none">{{ $post->Category->name }}</p></a>



            {{-- <h5>By : {{ $post->author }}</h5> --}}
            <p>{{ $post->excerpt }}</p>

            <a href="/post/{{ $post->slug }}">Read more..</a>
        </article>
    @endforeach

@endsection
