<div class="flex justify-center">
    <form class="w-full max-w-xl">
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 md:text-right mb-1 md:mb-0 pr-4" for="inline-title">
                    Title
                </label>
            </div>
            <div class="md:w-2/3">
                <input wire:model="title" class="form-input" id="inline-title" type="text" placeholder="Post Title">
                @error('title') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 md:text-right mb-1 md:mb-0 pr-4" for="inline-description">
                    Description
                </label>
            </div>
            <div class="md:w-2/3">
                <input wire:model="description" class="form-input" id="inline-description" type="text" placeholder="jane@doe.com">
                @error('description') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 md:text-right mb-1 md:mb-0 pr-4" for="inline-markdown">
                    Markdown
                </label>
            </div>
            <div class="md:w-2/3">
                <textarea wire:model="markdown" class="form-input outline-none" id="inline-markdown" placeholder="🕺"></textarea>
                @error('markdown') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
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
        </div>
    </form>
</div>

