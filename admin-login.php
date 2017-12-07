<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <title>8-Bit Forgers</title>
      <link rel="stylesheet" href="css/style.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,800|Press+Start+2P" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
      <link rel="icon" href="favicon.ico" type="image/x-icon">
  </head>
  <body id="body">
    <?php include 'sections/header-footer/header.html'; ?>

    <div class="main-footer" id="main">
        <main class="main-admin">
          <div class="contact-form">
            <div class="form">
              <div class="field">
                <label class="press-start">Name</label>
                <div class="control">
                  <input class="input" type="text" placeholder="Your Name">
                </div>
              </div>

              <div class="field">
                <label class="press-start">Email</label>
                <div class="control">
                  <input class="input" type="text" placeholder="youremail@yourprovider.com">
                </div>
              </div>

              <div class="field">
                <label class="press-start">Message</label>
                <div class="control">
                  <textarea class="textarea" placeholder="Hello 8Bit Forgers!"></textarea>
                </div>
              </div>

              <div class="field">
                <div class="control">
                  <input type="submit">
                </div>
              </div>
            </div>
          </div>
        </main>

        <?php include 'sections/header-footer/footer.html'; ?>

    </div>
    <script src="js/mobile-nav.js"></script>
    <script src="js/header-non-home.js"></script>
  </body>
</html>
