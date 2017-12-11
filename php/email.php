<?php
  //Local
  //$EMAIL = 'simao.nogueira66@gmail.com';

  //Deploy
  //$EMAIL = getenv('8BitEmail');
  //echo $EMAIL;



  // Import PHPMailer classes into the global namespace
  // These must be at the top of your script, not inside a function
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  //Load composer's autoloader
  require 'vendor/autoload.php';

  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
  try {
      //Server settings
      $mail->SMTPDebug = 2;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = "ssl://stmp.gmail.com";  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;

      $myEmail = getenv('8BitEmail');
      echo $myEmail;                          // Enable SMTP authentication
      $mail->Username = $myEmail;                 // SMTP username
      $mail->Password = getenv('8BitPassword');                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      //Recipients
      $mail->setFrom('hello@8bit.com', 'Mailer');
      $mail->addAddress($EMAIL, $_POST['name']);     // Add a recipient
      //$mail->addAddress('ellen@example.com');               // Name is optional
      $mail->addReplyTo('hello@8bit.com', 'Information');
      $mail->addCC('cc@example.com');
      $mail->addBCC('bcc@example.com');

      //Attachments
      $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Contacto de ' . $_POST['name'];
      $mail->Body    = $_POST['message'] . "\n \n" . 'Responder para: ' . $_POST['email'];
      $mail->AltBody = $_POST['message'] . "\n \n" . 'Responder para: ' . $_POST['email'];

      if ($_POST['message']) {
        $mail->send();
      }
      echo 'Message has been sent';
  } catch (Exception $e) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
  }
?>
