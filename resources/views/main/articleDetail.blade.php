@extends('layouts.master')

@section('content')
    <h1>{{ $article->title }}</h1>
    <img src="{{ asset('images/'.$article->photo) }}" class="card-img-top" alt="...">
    {{ date('d M Y', strtotime($article->posted_date)) }} | by : {{ strstr($article->author->name, ' ', true )}}
    <p class="card-text">{{ substr($article->description, 0, 150) }}</p>
    {{-- @include('components.articleCard', ['articles' => $articles]) --}}
@endsection
