@extends('layouts.app')

@section('content')
    <div class="flex flex-row justify-between">
        <h1 class="text-4xl mb-8 mx-2">Posts</h1>

        @auth
            <a class="btn btn-primary" href="{{ route('posts.create') }}">Create</a>
        @endauth

    </div>

    @forelse ($posts as $post)
        <div class="mb-16">
            <x-post-preview :post="$post" />
        </div>
    @empty
        <p class="text-gray-700 italic">No posts yet...</p>
    @endforelse
@endsection
