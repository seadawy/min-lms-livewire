<div>
    <div class="bg-indigo-50 w-full flex justify-between p-5">
        <div class="w-1/2 space-y-4 flex flex-col justify-around">
            <div>
                <h1 class="text-3xl font-bold p-2 rounded-2xl bg-indigo-950 text-center text-white">{{ $course->title }}</h1>
            </div>
            <p class="px-4">
                {{ $course->description }}
                <div class="flex">
                    <x-badge class="w-fit mx-4 rounded-full px-4 bg-blue-800">{{ $course->level->title }}</x-badge>
                    <div class="flex items-center gap-2 bg-indigo-200 p-1 rounded-full px-4">
                        <x-icon name="user" class="size-5" />
                        {{ $course->user->name }}
                    </div>
                </div>
            </p>
            <div class="flex justify-end">
                <x-button
                wire:click="enroll"
                class="p-6 max-w-72 text-2xl bg-indigo-950 hover:bg-indigo-900 text-white"
                >
                Enroll Now
            </x-button>
        </div>
        </div>
        <div class="w-1/2">
            <center>
                <img
                    class="size-72 rounded shadow"
                    src="{{ $course->image }}"
                    alt="{{ $course->slug }}"
                />
            </center>
        </div>
    </div>
    <div class="w-full p-5">
        <h1 class="text-5xl font-bold text-indigo-950 my-3">
            Course content
        </h1>
        <x-card>
            <x-card.content>
                <livewire:lessons.listview :lessons="$course->lessons" />
            </x-card.content>
        </x-card>
    </div>
</div>
