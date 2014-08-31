@extends('layouts.base')

@section('content')

<h2>Latest posts</h2>

@foreach ($posts as $post)
    <h3>{{ $post->meta['title'] }}</h3>
    <p class="lead">{{ $post->meta['excerpt'] }}</p>
    <p>{{ link_to_route('posts.show', '&raquo; Read post', [$post->meta['slug']]) }}</p>
@endforeach

@stop
