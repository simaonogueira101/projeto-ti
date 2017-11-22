// var to keep track of Stage
var scrolled = 0;

window.onscroll = function (oEvent) {
  var heroPos = document.getElementById("hero-indication").offsetTop;
  var scrollPos = window.scrollY;
  var mainPos = document.getElementById("main").offsetTop;
  var welcomePos = document.getElementById("welcome").offsetTop;

  /*
  // DEBUGGING PRINTS
  console.log("Page scroll: " + scrollPos);
  console.log("Div scroll: " + heroPos);
  console.log("main scroll: " + mainPos);
  */

  // First Stage
  if(scrollPos >= heroPos) {
    document.getElementById("hero-indication").classList.add("active", "fixed");
    document.getElementById("nav").classList.add("active");
    document.getElementById("main").classList.add("active");
    setTimeout(function(){
       document.getElementById("hero-indication").classList.add("invisible");
    }, 800);
    if(scrolled == 0) {
      scroll();
    }
  }

  // Second Stage
  if(scrollPos >= welcomePos) {
    if(scrolled == 1) {
      document.getElementById("hero").classList.add("invisible");
      document.body.scrollTop = document.documentElement.scrollTop = 0;
      scrolled = 2;
    }
  }

  function scroll() {
    window.scroll({
      top: welcomePos,
      left: 0,
      behavior: 'smooth'
    });
    scrolled = 1;
  }
};
