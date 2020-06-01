<div class="flex flex-col justify-between hover:bg-gray-100 rounded-lg p-2">
    <a class="flex-col" href="{{ route('posts.show', ['post' => $post]) }}">
        <h2 class="mb-0 text-gray-900 ">{{ $post->title }}</h2>
        <p class="text-sm text-gray-600 mb-1">by {{ $post->user->name }} - {{ $post->created_at->diffForHumans() }}</p>
        <p>{{ $post->description }}</p>
    </a>


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
