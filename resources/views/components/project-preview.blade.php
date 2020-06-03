@props(['url', 'title', 'subtitle', 'description', 'date'])

<div class="flex flex-col justify-between hover:bg-gray-100 rounded-lg p-2 -mx-2 mb-12">
    <a class="flex-col" href="{{ $url }}">
        <div class="flex flex-row justify-between">
            <h2 class="text-gray-900 mb-0">{{ $title }}</h2>
        </div>
    </a>
    <p class="mb-4"><span class="text-gray-600">{{ $date }}</span><span class="text-gray-800"> • </span><span class="text-gray-600">{{ $subtitle }}</span></p>
    <p class="text-sm mb-0">{{ $description }}</p>
    <a href="{{ $url }}">More</a>
</div>
