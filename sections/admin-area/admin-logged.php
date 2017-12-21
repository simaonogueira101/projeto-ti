<?php session_start(); ?>

<form action="create-user.php" method="POST">
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
            <input name="usernameNEW" type="text" placeholder="username">
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input name="passwordNEW" type="password" placeholder="password">
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input class="admin-submit" type="submit">
          </div>
        </div>
        <div class="invisible sign" id="user-pass-id">Please insert username and password!</div>
        <div class="invisible error" id="repeat-id">User <span id="repeat-user"></span> already exists...</div>
        <div class="invisible info" id="user-info">User <span id="info-user"></span> created!</div>
      </div>
    </div>
  </section>
</form>
