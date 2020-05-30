<div class="flex justify-center">
    <form class="w-full max-w-xl">
        @if (session()->has('message'))
        <div class="border-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-8" role="alert">
            {{ session('message') }}
        </div>
        @endif

        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 md:text-right mb-1 md:mb-0 pr-4" for="inline-name">
                    Name
                </label>
            </div>
            <div class="md:w-2/3">
                <input wire:model="name" class="form-input" id="inline-name" type="text" placeholder="Jane Doe">
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 md:text-right mb-1 md:mb-0 pr-4" for="inline-email">
                    Email
                </label>
            </div>
            <div class="md:w-2/3">
                <input wire:model="email" class="form-input" id="inline-email" type="text" placeholder="jane@doe.com">
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 md:text-right mb-1 md:mb-0 pr-4" for="inline-subject">
                    Subject
                </label>
            </div>
            <div class="md:w-2/3">
                <input wire:model="subject" class="focus:shadow-none form-input" id="inline-subject" type="text" placeholder="👋">
                @error('subject') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 md:text-right mb-1 md:mb-0 pr-4" for="inline-body">
                    Message
                </label>
            </div>
            <div class="md:w-2/3">
                <textarea wire:model="body" class="form-input outline-none" id="inline-body" placeholder="🕺"></textarea>
                @error('body') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
                <button wire:click="submit" wire:loading.attr="disabled" class="btn btn-primary" type="button">
                    <div wire:loading.remove wire:target="submit">
                        Submit
                    </div>
                    <div wire:loading wire:target="submit">
                        Sending...
                    </div>
                </button>
            </div>
        </div>
    </form>
</div>
