@extends('layouts.app')

@section('content')
    <p>{{ $post->title }}</p>

    <p>{{ $post->description }}</p>

    <p>{{ $post->markdown }}</p>
@endsection
