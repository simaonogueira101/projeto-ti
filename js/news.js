var xmlhttp = new XMLHttpRequest();

var title;
var subtitle;
var description;
var author;
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
    subtitle = textObject.feed.entry[i].gsx$subtitle.$t
    description = textObject.feed.entry[i].gsx$shortdescription.$t
    author = textObject.feed.entry[i].gsx$author.$t
    date = textObject.feed.entry[i].gsx$date.$t
    img = textObject.feed.entry[i].gsx$imglink1.$t

    var article = document.createElement("article");
    var container = document.createElement("div");

    var containerLeft = document.createElement("div");
    var newsTitle = document.createElement("div");
    var newsTitleOverlay = document.createElement("div");
    var newsTitleH2 = document.createElement("h2");

    var containerRight = document.createElement("div");
    var newsDate = document.createElement("h4");
    var newsSubtitle = document.createElement("h2");
    var newsDescription = document.createElement("p");
    var newsAuthor = document.createElement("h5");
    var newsLink = document.createElement("a");
    var linkLine = document.createElement("div");

    article.appendChild(container);

    container.appendChild(containerLeft);
    containerLeft.appendChild(newsTitle);
    newsTitle.appendChild(newsTitleOverlay);
    newsTitleOverlay.appendChild(newsTitleH2);

    container.appendChild(containerRight);
    containerRight.appendChild(newsDate);
    containerRight.appendChild(newsSubtitle);
    containerRight.appendChild(newsDescription);
    containerRight.appendChild(newsAuthor);
    containerRight.appendChild(newsLink);

    var articleNumberReal = i + 1;
    var link = "sections/news-article/article.html?id=" + articleNumberReal;
    // console.log(link);
    newsLink.setAttribute('href', link);

    container.classList.add('container');

    containerLeft.classList.add('container-left');
    newsTitle.classList.add('news-title');
    newsTitleOverlay.classList.add('news-title-overlay');
    newsTitleH2.classList.add('text-6', 'text-bold', 'light-text');

    containerRight.classList.add('container-right');
    newsDate.classList.add('text-8', 'press-start');
    newsSubtitle.classList.add('text-4', 'press-start');
    newsDescription.classList.add('text-6', 'text-thin');
    newsAuthor.classList.add('text-8', 'press-start');
    newsLink.classList.add('text-6', 'text-thin');
    linkLine.classList.add('link-line');


    if(colorChoice == 0) {
      newsTitleOverlay.classList.add('news-item-orange');
      colorChoice = 1;
    } else if(colorChoice == 1) {
      newsTitleOverlay.classList.add('news-item-purple');
      colorChoice = 2;
    } else if(colorChoice == 2) {
      newsTitleOverlay.classList.add('news-item-blue');
      colorChoice = 0;
    }

    var url = "url(" + img + ")";
    newsTitle.style.backgroundImage = url;

    newsTitleH2.innerHTML = title;
    newsDate.innerHTML = date;
    newsAuthor.innerHTML = author;
    newsDescription.innerHTML = description;
    newsSubtitle.innerHTML = subtitle;
    newsLink.innerHTML = "Read More...";

    newsLink.appendChild(linkLine);

    document.getElementById('section-news-each').appendChild(article);
  }
}
