$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pauseOnHover: true,
    interval: 1000,
  });
    }); 

function vidFade() {
    vid.classList.add("stopfade");
}
vid.addEventListener('ended', function() {
    // only functional if "loop" is removed 
     vid.pause();
	// to capture IE10
	vidFade();
});
pauseButton.addEventListener("click", function() {
    vid.classList.toggle("stopfade");
	if (vid.paused) {
vid.play();
		pauseButton.innerHTML = "Pause";
	} else {
        vid.pause();
        pauseButton.innerHTML = "Paused";
	}
})