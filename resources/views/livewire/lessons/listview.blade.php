<div>
    @if(!$lessons->isEmpty())
    @foreach ($lessons as $lesson)
        <div class="w-full flex justify-between items-center p-2 mt-1">
            <div class="flex items-center gap-2">
                <x-icon name="play-circle" class="size-5" />
                <h1 class="text-lg">{{ $lesson->title }}</h1>
            </div>
            @if($lesson->is_free_preview)
                <x-button
                    wire:click="startPreview({{ $lesson->id }})"
                    class="w-24 p-4 bg-green-800 text-white"
                >
                    Play
                </x-button>
            @endif
        </div>
    @endforeach
    @else
        <h1>No lessons found</h1>
    @endif
</div>
