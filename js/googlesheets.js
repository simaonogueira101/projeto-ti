var xmlhttp = new XMLHttpRequest();

var path = window.location.pathname;
var page = path.split("/").pop();
var article = path.split("article").pop();
var articleNumber = article.substring(0, article.length - 5);
// console.log(article);
// console.log(articleNumber);
var sheetsArticleNumber = articleNumber - 1;
// console.log("Sheeets Article Number: " + sheetsArticleNumber);

var originalText;

var date;
var author;
var authorPosition;

var title;
var subtitle;
var shortDesc;

var par = [];

var quote = [];

var img = [];

var imgDesc = [];

xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == XMLHttpRequest.DONE) {
    if (xmlhttp.status == 200) {
      editText();
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

function editText() {
  originalText = xmlhttp.responseText;
  var textObject = JSON.parse(originalText);

  //console.log(textObject.feed.entry[sheetsArticleNumber]);

  date = textObject.feed.entry[sheetsArticleNumber].gsx$date.$t
  document.getElementById("article-date").innerHTML = date;

  author = textObject.feed.entry[sheetsArticleNumber].gsx$author.$t
  document.getElementById("article-author").innerHTML = author;

  authorPosition = textObject.feed.entry[sheetsArticleNumber].gsx$authorposition.$t
  document.getElementById("article-authorposition").innerHTML = authorPosition;

  title = textObject.feed.entry[sheetsArticleNumber].gsx$title.$t
  document.getElementById("article-title").innerHTML = title;
  document.title = title;

  subtitle = textObject.feed.entry[sheetsArticleNumber].gsx$subtitle.$t

  shortDesc = textObject.feed.entry[sheetsArticleNumber].gsx$shortdescription.$t

  document.getElementById("article-number").innerHTML = articleNumber;

  var parNumber;
  var quoteNumber;
  var imgNumber;
  var imgDescNumber;

  for(var i = 1; i<7; i++) {
    parNumber = "gsx$paragraph" + i;
    par.push(textObject.feed.entry[sheetsArticleNumber][parNumber].$t)
    var id = "article-par" + i;
    document.getElementById(id).innerHTML = par[i - 1];
  }

  for(var i = 1; i<4; i++) {
    quoteNumber = "gsx$quote" + i;
    quote.push(textObject.feed.entry[sheetsArticleNumber][quoteNumber].$t)
    var id = "article-quote" + i;
    document.getElementById(id).innerHTML = quote[i - 1];
  }

  for(var i = 1; i<3; i++) {
    imgNumber = "gsx$imglink" + i;
    img.push(textObject.feed.entry[sheetsArticleNumber][imgNumber].$t)
    var id = "article-img" + i;
    var url = "url(" + img[i - 1] + ")";
    document.getElementById(id).style.backgroundImage = url;
  }

  for(var i = 1; i<3; i++) {
    imgDescNumber = "gsx$imgdesc" + i;
    imgDesc.push(textObject.feed.entry[sheetsArticleNumber][imgDescNumber].$t)
    var id = "article-imgDesc" + i;
    document.getElementById(id).innerHTML = imgDesc[i - 1];
  }

/*
  console.log(articleNumber);
  console.log(date);
  console.log(author);
  console.log(authorPosition);
  console.log(title);
  console.log(subtitle);
  console.log(shortDesc);
  console.log(par);
  console.log(quote);
  console.log(img);
  console.log(imgDesc);
*/
}
