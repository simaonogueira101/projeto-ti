<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About...</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,800|Press+Start+2P" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body id="body">
  <?php include 'sections/header-footer/header.html'; ?>

  <div class="main-footer" id="main">
    <main class="about-main">
      <div class="contact-overlay invisible" id="contact">
        <div class="contact-form">

          <form class="form" action="about.php?contact=true" method="POST">
            <div class="field">
              <label class="press-start">Name</label>
              <div class="control">
                <input class="input" type="text" placeholder="Your Name" name="name">
              </div>
            </div>

            <div class="field">
              <label class="press-start">Email</label>
              <div class="control">
                <input class="input" type="text" placeholder="youremail@yourprovider.com" name="email">
              </div>
            </div>

            <div class="field">
              <label class="press-start">Message</label>
              <div class="control">
                <textarea class="textarea" placeholder="Hello 8Bit Forgers!" name="message"></textarea>
              </div>
            </div>

            <div class="field">
              <div class="control">
                <input type="submit">
              </div>
            </div>
          </form>

          <?php

            include 'php/config.php';
            $subject = 'Contacto de ' . $_POST['name'];
            $message = $_POST['message'] . "\n \n" . 'Responder para: ' . $_POST['email'];

            /*

            $to      = $EMAIL;
            $subject = 'Contacto de ' . $_POST['name'];
            $message = $_POST['message'] . "\n \n" . 'Responder para: ' . $_POST['email'];
            $headers = 'From: ' . $_POST['email'] . "\r\n" .
                       'Reply-To: ' . $_POST['email'] . "\r\n" .
                       'X-Mailer: PHP/' . phpversion();

            if ($_POST['message']) {
              mail($to, $subject, $message, $headers);
            }

            */

          ?>

          <a class="text-6 text-bold press-start contact-button exit-button" id="contact-exit" href="about.php?contact=false">
            x
          </a>
        </div>
      </div>
        <section class="section-about">
          <h3 class="dark-orange-text text-6">What's this, you ask?</h3>
          <h1 class="light-text text-large">About</h1>
            <div class="container">
                <div class="container-left">
                    <h1 class="light-text">8-Bit who?</h1>
                    <p class="light-text text-thin">
                        8-Bit Forgers is an University of Coimbra-based game development club, founded in late 2016, by
                        a few Masters and PhD students, in order to create a space where people can learn and experiment
                        with game development. Our main goal is to provide a hands-on approach that allows members to work,
                        as a team, and develop videogames.
                    </p>
                    <p class="light-text text-thin">
                        Additionally, we also aim to organize field trips, workshops and lectures as a means to increase
                        the University’s students knowledge base and provide awareness to the field of game-development.
                    </p>
                    <p class="light-text text-thin">
                        Currently, we have 24 members working, and sharing experiences, in Testing, Sound Design,
                        Programming, Graphics Design and Marketing and are developing our very first prototype as a team: Biomorphs.
                    </p>
                    <br>
                    <a class="text-bold text-6 contact-button" id="contact-button" href="about.php?contact=true">
                      Get in touch!
                    </a>
                    <br>
                </div>
                <div class="container-right container-height">

                </div>
            </div>
        </section>
        <section class="section-ti">
          <h3 class="dark-orange-text text-6">Projeto de TI?</h3>
          <h1 class="light-text text-large">Como assim?</h1>
            <div class="container">
                <div class="container-left">
                  <h1 class="light-text">É isso mesmo!</h1>
                  <p class="light-text text-thin">
                      Entrámos em contacto com os nossos colegas da direção do 8-Bit Forgers
                      a quem sugerimos desenvolver o seu website. Recolhemos informações, imagens
                      e fotografias, e estamos constantemente a encontrar maneiras de conjugar
                      o que a disciplina requer do projeto e aquilo que nos pediu o nosso cliente.
                  </p>
                  <br>
                  <a href="https://github.com/simaonogueira101/projeto-ti" class="text-bold text-5 light-text">
                    Our Github page...
                    <div class="link-line"></div>
                  </a>
                  <br>
                  <a href="https://trello.com/b/qkfHIKa3" class="text-bold text-5 light-text">
                    Our trello board...
                    <div class="link-line"></div>
                  </a>
                </div>
                <div class="container-right container-height container-ti-1">

                </div>
            </div>
            <div class="container">
              <div class="container-left container-height container-ti-2">

              </div>
              <div class="container-right container-height container-ti-3">

              </div>
            </div>
            <div class="container">
              <div class="container-left container-height container-ti-4">

              </div>
              <div class="container-right container-height container-ti-5">

              </div>
            </div>
        </section>
    </main>

    <?php include 'sections/header-footer/footer.html'; ?>

  </div>
  <script src="js/header-non-home.js"></script>
  <script src="js/mobile-nav.js"></script>
  <script src="js/about.js"></script>
</body>
</html>
