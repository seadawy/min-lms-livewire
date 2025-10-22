<div>
    @if($isOpen)
        <x-dialog wire:model="isOpen">
            <x-dialog.content class="sm:max-w-[800px]">
                <div class="grid gap-4">
                    <x-dialog.header>
                        <x-dialog.title>
                            {{ $lessonTitle }}
                        </x-dialog.title>
                        <x-dialog.description>
                            Free Preview
                        </x-dialog.description>
                    </x-dialog.header>
                    <div class="grid gap-4 py-4">
                        <x-video-player
                            :video-url="$videoUrl"
                        ></x-video-player>
                    </div>
                    <x-dialog.footer>
                        <x-button wire:click="closeDialog" variant="secondary">
                            Close
                        </x-button>
                    </x-dialog.footer>
                </div>
            </x-dialog.content>
        </x-dialog>
    @endif
</div>
