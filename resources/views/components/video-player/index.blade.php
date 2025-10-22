@props([
    'videoUrl' => null,
])

<div {{ $attributes->merge(['class' => 'w-full']) }}>
  <div class="plyr__video-embed" id="player">
    <iframe
            src="{{ $videoUrl }}"
            allowfullscreen
            allowtransparency
            allow="autoplay"
        ></iframe>
    </div>
</div>
