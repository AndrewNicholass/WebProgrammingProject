@extends('layouts.master')

@section('content')
    @include('components.articleCard', ['articles' => $articles])
@endsection
