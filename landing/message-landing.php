<?php
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$phoneNumber = strip_tags($_POST['phoneNumber']);
$message = strip_tags($_POST['message']);
$headers = "From: www.kbsoftwaresolutions.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$emailMessage = 
  "<table class='form-email-message'>
      <tr>
        <td>KB Software Solutions</td>
      </tr>
      <tr>
        <td>$message</td>
      </tr>
      <tr>
        <td>From: $name</td>
      </tr>
      <tr>
        <td>Phone Number: $phoneNumber</td>
      </tr>
      <tr>
        <td>Email: $email</td>
      </tr>
    </table>";

$result = mail("jjohnson@ambrosiatc.com", "KB Software Solutions", $emailMessage, $headers);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="KB Software Solutions - Thank you for your message, we appreciate your business.">
    <meta name="author" content="KB Software Solutions">
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
    <link rel="icon" type="image/x-icon" href="../img/kb-favicon.png" />
    <title>KB Software Solutions | Message Received</title>
    <link href="../css/kb-css.css" rel="stylesheet">
  </head>
  <body>
    <?php require_once('/template/navbar.html'); ?>
    <a  name="services"></a>
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-sm-6">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h1 class="section-heading text-center">Message Received</h1>
            <hr class="paragraph-divider">
            <h3 class="text-center">Thank you for your interest in KB Software Solutions</h3>
            <h3 class="text-center"><a href="../index.php">Return to Home Page</a></h3>
          </div>
          <div class="col-lg-5 col-lg-offset-2 col-sm-6">
            <img class="img-responsive" src="../img/mail-received.png" alt="Message Has Been Received">
          </div>
        </div>
        <hr class="paragraph-divider">
      </div>
      <?php require_once('../template/footer.html');?>
  </body>
</html>