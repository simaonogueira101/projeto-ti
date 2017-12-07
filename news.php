<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>8-Bit News</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,800|Press+Start+2P" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body id="body">
  <?php include 'sections/header-footer/header.html'; ?>

  <div class="main-footer" id="main">
    <main>
        <section class="section-news">
          <div class="title">
            <h3 class="dark-orange-text text-6">Listen up!</h3>
            <h1 class="text-large light-text">8-Bit News</h1>
            <div class="container">
              <h2 class="text-6 light-text text-thin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
            </div>
          </div>

          <section class="section-news-each" id="section-news-each">
            <img src="images/bits/corner-black.svg" alt="card-corner" class="corner-dark-top-left">
            <img src="images/bits/corner-black.svg" alt="card-corner" class="corner-dark-top-right">
            <img src="images/bits/corner-black.svg" alt="card-corner" class="corner-dark-bottom-left">
            <img src="images/bits/corner-black.svg" alt="card-corner" class="corner-dark-bottom-right">
          </section>
        </section>
    </main>

    <?php include 'sections/header-footer/footer.html'; ?>

  </div>
  <script src="js/mobile-nav.js"></script>
  <script src="js/header-non-home.js"></script>
  <script src="js/news.js"></script>
</body>
</html>
