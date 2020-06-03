<div class="mb-48">
    <div class="flex flex-row justify-between">
        <h1 class="mb-0 text-gray-900">{{ $post->title }}</h1>

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

    <p class="text-sm">by {{ $post->user->name }} - {{ optional($post->created_at)->diffForHumans() }}</p>

    <div class="markdown">
        <p>{{ $parsedMarkdown }}</p>
    </div>
</div>
