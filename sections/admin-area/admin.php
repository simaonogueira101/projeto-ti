<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
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
      //echo $_SESSION[‘logged’];
    ?>

    <?php if (isset($_SESSION[‘logged’]) && $_SESSION[‘logged’] == "true"): ?>
      <main class="main-admin-page">
        <?php include 'admin-logged.php'; ?>
        <div class="logout-container">
          <form action="logout.php" method="POST">
            <input type="submit" value="Logout" class="logout">
          </form>
        </div>
      </main>

    <?php elseif ($_SESSION[‘logged’] == "false"): ?>
      <?php include 'admin-not-logged.html'; ?>
    <?php endif; ?>

    <?php include '../../sections/header-footer/footer.html'; ?>

  </div>
  <script src="../../js/header-non-home.js"></script>
  <script src="../../js/mobile-nav.js"></script>
  <script src="../../js/new-user.js"></script>
</body>
</html>
