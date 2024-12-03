@extends('layouts.master')

@section('content')
    <div class="d-flex flex-column" style="width: 18rem;">
        <img src="{{ asset('images/'.$author->photo) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $author->name }}</h5>
            {{-- {{ date('d M Y', strtotime($item->posted_date)) }} | by : {{ strstr($item->author->name, ' ', true )}} --}}
            <p class="card-text">{{ $author->specialist }}</p>
            {{-- <a href="#" class="btn btn-primary">Read More...</a> --}}
        </div>
    </div>

    @include('components.articleCard', ['articles' => $author->articles])

    {{-- {{ $article->title }}
    <img src="{{ asset('images/'.$article->photo) }}" class="card-img-top" alt="...">
    {{ date('d M Y', strtotime($article->posted_date)) }} | by : {{ strstr($article->author->name, ' ', true )}}
    <p class="card-text">{{ substr($article->description, 0, 150) }}</p> --}}
    {{-- @include('components.articleCard', ['articles' => $articles]) --}}
@endsection
