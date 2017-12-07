// Gets news-scroll width.
var scrollWidth;
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

////////////////////////////////////////////////////////////////////////////////

// Dinamically GETs article cards to display on scroll

var xmlhttp = new XMLHttpRequest();

var title;
var date;

xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == XMLHttpRequest.DONE) {
    if (xmlhttp.status == 200) {
      editScroll();
    }
    else if (xmlhttp.status == 400) {
      console.log('There was an error 400');
    }
    else {
      console.log('something else other than 200 was returned');
    }
  }
};

xmlhttp.open("GET", 'https://spreadsheets.google.com/feeds/list/1DGEyOb81Uc_XWBdii4wAB8f5f5azdG_dnmnQ2Mo7VtM/od6/public/values?alt=json', true);
xmlhttp.send();

function editScroll() {
  originalText = xmlhttp.responseText;
  var textObject = JSON.parse(originalText);
  var scrollTotal = textObject.feed.entry.length;
  // console.log(scrollTotal);

  var colorChoice = 0;

  for( var i = 0; i < scrollTotal; i++) {
    title = textObject.feed.entry[i].gsx$title.$t
    date = textObject.feed.entry[i].gsx$date.$t
    img = textObject.feed.entry[i].gsx$imglink1.$t

    var outter = document.createElement("a");
    var inner = document.createElement("div");
    var overlay = document.createElement("div");
    var article = document.createElement("article");
    var p = document.createElement("p");
    var pDate = document.createElement("p");

    outter.appendChild(inner);
    inner.appendChild(overlay);
    overlay.appendChild(article);
    article.appendChild(p);
    article.appendChild(pDate);

    var articleNumberReal = i + 1;
    var link = "sections/news-article/article.php?id=" + articleNumberReal;
    // console.log(link);
    outter.setAttribute('href', link);

    outter.classList.add('news-item-link');
    inner.classList.add('news-item');

    if(colorChoice == 0) {
      overlay.classList.add('news-item-overlay', 'news-item-orange');
      colorChoice = 1;
    } else if(colorChoice == 1) {
      overlay.classList.add('news-item-overlay', 'news-item-purple');
      colorChoice = 2;
    } else if(colorChoice == 2) {
      overlay.classList.add('news-item-overlay', 'news-item-blue');
      colorChoice = 0;
    }

    p.classList.add('text-6', 'margin-none');
    pDate.classList.add('text-7', 'margin-none');

    var url = "url(" + img + ")";
    inner.style.backgroundImage = url;

    p.innerHTML = title;
    pDate.innerHTML = date;

    document.getElementById('news-scroll').appendChild(outter);
  }

  scrollWidth = document.getElementById("news-scroll").scrollWidth;
}
