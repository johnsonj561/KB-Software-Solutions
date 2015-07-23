<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contact KB Software Solutions to discuss your future website and
                                      request a free estimate">
    <meta name="author" content="KB Software Solutions">
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <link rel="icon" type="image/x-icon" href="../img/kb-favicon.png" />
    <title>KB Software Solutions | Contact</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/small-business.css" rel="stylesheet">
  </head>
  <body>
    <?php require_once('../template/navbar.html'); ?>
    <div class="container">
      <a name="top"></a>
      <div class="content-section-a">
        <div class="container contact">
          <div class="row">
            <div class="box">
              <div class="col-lg-12">
                <br>
                <h2 class="intro-text text-center">Contact KB Software Solutions to Discuss Design Ideas and Pricing</h2>
                <hr>
                <div class="col-lg-9">
                  <form role="form" action="../landing/message-landing.php" method = "post"
                        onsubmit = "return onContactSubmit()">
                    <div class="row">
                      <div class="form-group col-lg-3">
                        <label>Name</label>
                        <input type="text" class="form-control" name = "name" id = "name" autofocus required>
                      </div>
                      <div class="form-group col-lg-3">
                        <label>Email Address</label>
                        <input type="email" class="form-control" name = "email" id = "email">
                      </div>
                      <div class="form-group col-lg-3">
                        <label>Phone Number</label>
                        <input type="tel" class="form-control" name = "phoneNumber" id = "phoneNumber" required>
                      </div>
                      <div class="clearfix"></div>
                      <div class="form-group col-lg-9">
                        <label>Message</label>
                        <textarea class="form-control" rows="6" name = "message" id = "message" required></textarea>
                      </div>
                      <!-- Error element used to display error messages to user if fields are completed correctly -->
                      <div class="form-group col-lg-9">
                        <p class = "intro-text text-center" name = "errorElement" id = "errorElement"></p>
                      </div><br>
                      <div class="form-group col-lg-9 text-center">
                        <input type="hidden" name="save" value="contact">
                        <button type="submit" class="btn btn-default btn-lg grey-blue">Send Message</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-lg-3">
                  <h4 class="text-center">Contact Information</h4>
                  <div class="contact-info">
                    <p>Phone:
                      <strong><a href="tel:+15619097795" class="contact-link">561-909-7795</a></strong>
                    </p>
                    <p>Email:
                      <strong><a href="mailto:name@example.com" class="contact-link">johnsonj561@gmail.com</a></strong>
                    </p>
                    <p>Location:
                      <strong>Boynton Beach, FL 33435</strong>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr class="paragraph-divider">


          <div class="row">
            <div class="box">
              <div class="col-lg-12">
                <div class="col-md-6">
                  <img class="img-responsive wrap-image pull-right" src="../img/justin-johnson-photo.jpg"
                       alt="Owner and primary operator Justin Johnson"/>
                </div>
                <div class="col-md-6">
                  <img class="img-responsive wrap-image pull-left" src="../img/palm-beach-county-map.jpg"
                       alt="KB Software Solutions operates out of Palm Beach County"/>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>

        </div>
        <div class="row"><a href="contact.php">Back to Top</a><br></div>
      </div>
      <script src = "../js/validate.js"></script>
      <?php require_once('../template/social-media.html');?>
      <?php require_once('../template/footer.html'); ?>
      </body>
    </html>