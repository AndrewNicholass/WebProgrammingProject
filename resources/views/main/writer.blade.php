@extends('layouts.master')

@section('content')
    @include('components.writerCard', ['authors' => $authors])
@endsection
