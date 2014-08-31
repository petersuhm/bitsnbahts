@extends('layouts.base')

@section('content')

<h1>{{ $post->meta['title'] }}</h1>
<p class="lead">{{ $post->content }}</p>

<p>{{ link_to_route('home', '&laquo; Back') }}</p>

@stop
