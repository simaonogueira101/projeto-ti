<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project Title</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,800|Press+Start+2P" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
</head>
<body id="body">
  <?php include '../../sections/header-footer/header.html'; ?>

  <div class="main-footer" id="main">
      <?php

      ?>
      <form action="admin-login.php?login=false" method="POST">
          <main class="main-admin-page">

            <section class="section-news section-small">
              <div class="title">
                <h1 class="text-large dark-text">Welcome Admins!</h1>
                <div class="container">
                  <h2 class="text-6 dark-text text-thin">
                    This section exists so you can execute the hardest tasks on this website: managing
                    content and moderate posts. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua.
                  </h2>
                </div>
              </div>

              <div class="contact-form">

                <h3 class="dark-orange-text text-3 press-start title">Register new user:</h3>

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
            </section>
          </main>
        </form>

    <?php include '../../sections/header-footer/footer.html'; ?>

  </div>
  <script src="../../js/header-non-home.js"></script>
  <script src="../../js/mobile-nav.js"></script>
</body>
</html>
