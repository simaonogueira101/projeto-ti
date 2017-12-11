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

    <?php
      include 'php/login.php';
    ?>
    <div class="main-footer main-login" id="main">
      <form action="admin-login.php?login=false" method="POST">
          <main class="main-admin">
            <div class="contact-form">

              <h3 class="dark-orange-text text-1 press-start title">Login</h3>

              <div class="form">
                <div class="field">
                  <div class="control">
                    <input name="username" type="text" placeholder="username">
                  </div>
                </div>

                <div class="field">
                  <div class="control">
                    <input name="password" type="password" placeholder="password">
                  </div>
                </div>

                <div class="field">
                  <div class="control">
                    <input class="submit" type="submit">
                  </div>
                </div>

                <div class="invisible" id="error">Username and/or Password are invalid...</div>
              </div>
            </div>
          </main>
        </form>

        <?php include 'sections/header-footer/footer.html'; ?>

    </div>
    <script src="js/mobile-nav.js"></script>
    <script src="js/header-non-home.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>
