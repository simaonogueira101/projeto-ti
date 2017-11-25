// Gets news-scroll width.
var scrollWidth = document.getElementById("news-scroll").scrollWidth;
var currentScroll;
var scrollSpeed = 10;

// DEBUGGING
//console.log(scrollWidth);

var leftInterval;
var rightInterval;

// Adds event listener to divs.
document.getElementById("scroll-left").addEventListener('mouseenter', function(){
  leftInterval = setInterval(function(){
    //console.log("bateu");
    scrollLeft()
  }, 17);
}, false);
document.getElementById("scroll-left").addEventListener('mouseleave', function(){
  clearInterval(leftInterval);
}, false);

document.getElementById("scroll-right").addEventListener('mouseenter', function(){
  rightInterval = setInterval(function(){
    //console.log("bateu");
    scrollRight()
  }, 17);
}, false);
document.getElementById("scroll-right").addEventListener('mouseleave', function(){
  clearInterval(rightInterval);
}, false);

document.getElementById("news-scroll").addEventListener("scroll", function() {
  currentScroll = document.getElementById("news-scroll").scrollLeft;
  //console.log(currentScroll);
});


function scrollRight() {
  currentScroll = document.getElementById("news-scroll").scrollLeft;
  if(currentScroll < scrollWidth) {
    currentScroll = currentScroll + scrollSpeed;
    //console.log(currentScroll);
    document.getElementById("news-scroll").scrollTo(currentScroll, 0);
    //console.log("going");
  }
}

function scrollLeft() {
  currentScroll = document.getElementById("news-scroll").scrollLeft;
  if(currentScroll > 0) {
    currentScroll = currentScroll - scrollSpeed;
    //console.log(currentScroll);
    document.getElementById("news-scroll").scrollTo(currentScroll, 0);
    //console.log("going");
  }
}
