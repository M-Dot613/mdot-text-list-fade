document.addEventListener("DOMContentLoaded", function () {
  var container = document.querySelector(".text-list-fade");
  var words = container.querySelectorAll(".word");
  var duration = 5000;

  var index = 0;

  function animateWord() {
    words[index].style.opacity = 1;
    words[index].style.animation = "fadeInOut " + duration + "ms forwards";

    index++;
    if (index >= words.length) {
      index = 0;
    }

    setTimeout(function () {
      words[index - 1].style.opacity = 0;
      words[index - 1].style.animation = "none";
      setTimeout(animateWord, 1000); // Start fade out 1 second after fade in
    }, duration);
  }

  animateWord();
});
