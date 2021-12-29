

function checkForm(form) // Submit button clicked
{
  //
  // check form input values
  //

  form.submit_button.disabled = true;
  form.submit_button.value = "กำลังสร้าง โปรดรอซักครู่... | Please wait...";
  return true;
}

var audio = document.getElementById("audioID");
audio.volume = 0.3;
var myaudio = document.getElementById("audioID");
function PlayStop() {
return myaudio.paused ? myaudio.play() : myaudio.pause();
}

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
});
