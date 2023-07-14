<div>
    <form wire:submit.prevent="createPoll">
        <div class="mb-4">
            <label>Poll Title</label>
            <input type="text" class="border-gray-400 border-solid border w-full" wire:model="title"/>
        </div>
        @error('title')
            <div class="text-red-500">{{ $message }}</div>
        @enderror

        <div class="mb-4">
            <button class="border border-gray-500 rounded-sm px-1.5 py-0.5" wire:click.prevent="addOption">Add Option</button>
        </div>

        <div class="mt-4 mb-4">
            @foreach ($options as $index => $option)
                <div class="mb-4">
                    <label>Option {{ $index + 1 }}</label>
                    <div class="flex gap-2">
                        <input type="text" class="border-gray-400 border-solid border" wire:model="options.{{ $index }}" />
                        @error("options." . $index)
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                        <button class="border border-gray-500 rounded-sm px-1.5 py-0.5" wire:click.prevent="removeOption({{ $index }})">Remove</button>
                    </div>
                </div>
            @endforeach
        </div>

        <button type="submit" class="border border-gray-500 rounded-sm px-1.5 py-0.5">Create Poll</button>
    </form>
</div>
