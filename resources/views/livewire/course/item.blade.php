<div>
<x-card>
    <x-card.content class="p-2">
        <div class="p-2 space-y-2">
            <img
                src="{{ $course->image }}"
                alt="{{ $course->title }}"
                class="w-full max-h-72 rounded-lg"
            />
            <h1>{{ $course->title }}</h1>
            <h1>{{ $course->level->title }}</h1>
        </div>
    </x-card.content>
    <x-card.footer class="p-2">
        <x-link
            wire:navigate
            herf="{{ route('course.show', $course->slug) }}"
            class="w-full text-center bg-primary rounded no-underline text-white py-1 hover:bg-primary/90"
        >
            View details
        </x-link>
    </x-card.footer>
</x-card>
</div>
