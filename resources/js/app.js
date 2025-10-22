import Plyr from 'plyr';

const plyrConfig = {
    controls: [
        'play-large',
        'play',
        'progress',
        'current-time',
        'duration',
        'mute',
        'volume',
        'settings',
        'pip',
        'fullscreen'
    ],
    settings: ['quality', 'speed'],
    quality: {
        default: 720,
        options: [1080, 720, 480, 360]
    },
    speed: {
        selected: 1,
        options: [0.5, 0.75, 1, 1.25, 1.5, 2]
    }
};
function initializePlyr() {
    const player = new Plyr('#player', plyrConfig);
}

document.addEventListener('DOMContentLoaded', initializePlyr);
document.addEventListener('livewire:navigated', initializePlyr);
