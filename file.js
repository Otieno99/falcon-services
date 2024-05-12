// this is a video contralling fuction
var video =
document.getElementById("myVideo");
var playPauseButton =
document.getElementById("playPause");

playPauseButton.addEventListerner("click" . 
function() {
    if (video.pause) {
        video.play();
        playPauseButton.textContent = "Pause";
    } else {
        video.pause();
        playPauseButton.textContent = "Play";
    }
});