let playButton = document.querySelectorAll('.ecouter');
let pauseButton = document.querySelectorAll('.pause');
let audios = document.querySelectorAll('audio');

for (let i = 0; i < playButton.length; i++) {
    playButton[i].addEventListener('click', function () {
        audios[i].play();
    });
}

for (let i = 0; i < pauseButton.length; i++) {
    pauseButton[i].addEventListener('click', function () {
        audios[i].pause();
    });
}
