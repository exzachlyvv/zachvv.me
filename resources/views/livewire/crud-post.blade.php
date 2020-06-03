<div class="flex justify-center">
    <form class="w-1/2 max-w-xl">
        <div class="mb-6">
            <label class="block text-gray-500 mb-1 pr-4" for="inline-title">
                Title
            </label>
            <input wire:model="title" class="form-input" id="inline-title" type="text" placeholder="Post Title">
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-6">
            <label class="block text-gray-500 mb-1 pr-4" for="inline-description">
                Description
            </label>
            <textarea wire:model="description" class="form-input outline-none" id="inline-description" placeholder="Preview if post..." rows="4"></textarea>
            @error('description') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-6">
            <label class="block text-gray-500 mb-1 pr-4" for="inline-markdown">
                Markdown
            </label>
            <textarea wire:model="markdown" class="form-input outline-none" id="inline-markdown" placeholder="🕺" rows="8"></textarea>
            @error('markdown') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-6 flex">
            <label class="block text-gray-500 mb-1 pr-4" for="inline-public">
                <input wire:model="public" class="mr-2 leading-tight" type="checkbox" id="inline-public">
                Public?
            </label>
            @error('public') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="flex justify-end">
            <button wire:click="submit" wire:loading.attr="disabled" class="btn btn-primary" type="button">

                <div wire:loading.remove wire:target="submit">
                    @if($this->isUpdating)
                    Update
                    @else
                    Create
                    @endif
                </div>

                <div wire:loading wire:target="submit">
                    Saving...
                </div>
            </button>
        </div>
    </form>

    <div class="w-1/2 mx-2 px-2">
        <label class="block text-gray-500 mb-1 pr-4" for="inline-title">
            Preview:
        </label>
        <div class="border rounded h-full">
            <x-post-detail :post="$this->computedPost" />
        </div>
    </div>
</div>

