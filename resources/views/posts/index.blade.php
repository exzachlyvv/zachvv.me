@extends('layouts.app')

@section('content')
    <div class="flex flex-row justify-between">
        <h1 class="text-4xl mb-8">Posts</h1>

        @auth
            <a class="btn btn-primary" href="{{ route('posts.create') }}">Create</a>
        @endauth

    </div>

    @forelse ($posts as $post)
        <div class="flex flex-row justify-between">
            <p>{{ $post->title }}</p>

            @if (Auth::id() === $post->user_id)
                <div class="flex flex-row">
                    <a class="btn btn-secondary mr-4" href="{{ route('posts.edit', ['post' => $post]) }}">Edit</a>
                    <form action="{{ route('posts.destroy', ['post' => $post]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            @endif
        </div>

    @empty
        <p class="text-gray-700 italic">No posts yet...</p>
    @endforelse
@endsection
