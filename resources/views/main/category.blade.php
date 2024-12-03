@extends('layouts.master')

@section('content')
    <h1>{{ $category->name }} </h1>
    @include('components.articleCard', ['articles' => $category->articles])
@endsection
