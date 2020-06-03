<div class="flex flex-col justify-between hover:bg-gray-100 rounded-lg p-2 -mx-2">
        <div class="flex flex-row justify-between">

            <a class="flex-col" href="{{ route('posts.show', ['post' => $post]) }}">
                <h2 class="mb-0 text-gray-900 ">{{ $post->title }}</h2>
            </a>

            @if (Auth::id() === $post->user_id)
                <div class="flex flex-row">
                    @if(! $post->public)
                        <div class="py-2 px-4 mr-4 text-sm text-gray-600 flex items-center">
                            <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                            </svg>
                            Private
                        </div>
                    @endif

                    <a class="btn btn-secondary mr-4" href="{{ route('posts.edit', ['post' => $post]) }}">Edit</a>
                    <form action="{{ route('posts.destroy', ['post' => $post]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            @endif
        </div>
        <p class="text-sm text-gray-600 mb-1">by {{ $post->user->name }} - {{ $post->created_at->diffForHumans() }}</p>
        <p class="mb-0">{{ $post->description }}</p>
    <a href="{{ route('posts.show', ['post' => $post]) }}">Read</a>
</div>
