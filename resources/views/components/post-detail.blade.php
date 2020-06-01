<div class="mb-48">
    <h1 class="mb-0">{{ $post->title }}</h1>
    <p class="text-sm">by {{ $post->user->name }} - {{ $post->created_at->diffForHumans() }}</p>

    <div class="markdown">
        <p>{{ $parsedMarkdown }}</p>
    </div>
</div>
