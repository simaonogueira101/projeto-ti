// Gets viewport width
var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
//console.log(width);


function mobileNavAdd() {
    document.getElementById("nav").classList.add("active-mobile");
  //console.log("bateu");
}

function mobileNavRemove() {
    document.getElementById("nav").classList.remove("active-mobile");
  //console.log("bateu2");
}
