<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $title = "Thank You | Lavelle Clinic";
  require_once 'inc/head.php';
  ?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" integrity="sha512-DUC8yqWf7ez3JD1jszxCWSVB0DMP78eOyBpMa5aJki1bIRARykviOuImIczkxlj1KhVSyS16w2FSQetkD4UU2w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <!-- preloader -->
  <div class="preLoader">
    Loading<span>...</span>
  </div>

  <!-- header -->
  <?php include_once 'layouts/Header.php'; ?>

  <!-- main content -->
  <main>

    <?php

    include_once 'layouts/Form.php';

    if (isset($_POST['submit'])) {

      $url = 'https://www.google.com/recaptcha/api/siteverify';
      $secret = "6Lfr1IAgAAAAALvxsc4rhHDhNrj0Q11tJSgQu3n4";
      $response = $_POST['g-token'];
      $remoteip = $_POST['REMOTE_ADDR'];

      $request = file_get_contents($url . '?secret=' . $secret . '&response=' . $response);
      $result = json_decode($request);

      // print_r($result);

      if ($result->success == true) {
        $to = "info@lavelleclinic.co.uk";
        $subject = "Lead From Lavelle Clinic";
        $message =
          '<!DOCTYPE html>
            <html lang="en">
              <head>
                <meta charset="UTF-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>Lead</title>
                <style>
                  .common-box {
                    width: 100%;
                    max-width: 300px;
                    padding: 50px;
                    border-radius: 5px;
                    border: 1px solid #c899a1;
                  }

                  .common-box .img-box {
                    text-align: center;
                  }

                  .common-box .img-box img {
                    width: auto;
                    height: auto;
                    max-width: 100%;
                  }

                  .common-box > .img-box + .content {
                    margin-top: 10px;
                    padding-top: 10px;
                    border-top: 1px solid #c899a1;
                  }

                  .common-box .mail-sender-data {
                    color: #333f5c;
                  }

                  .common-box .mail-sender-data > span {
                    color: #c899a1;
                  }

                  .common-box .mail-body {
                    margin-top: 10px;
                    padding-top: 10px;
                    color: #c899a1;
                    border-top: 1px solid #c899a1;
                  }
                </style>
              </head>
              <body>
                <div class="common-box">
                  <div class="img-box">
                    <img
                      src="https://lavelle-clinic.jnayem.com/images/lavelle-clinic-logo.png"
                      alt="Lavelle Clinic Logo"
                    />
                  </div>
                  <div class="content">
                    <div class="mail-sender-data">
                      Name: <span class="site-primary-color">' . $_POST["name"] . '</span>
                    </div>
                    <div class="mail-sender-data">
                      Phone: <span class="site-primary-color">' . $_POST["phone"] . '</span>
                    </div>
                    <div class="mail-sender-data">
                      Email: <span class="site-primary-color">' . $_POST["email"] . '</span>
                    </div>
                    <div class="mail-body">' . $_POST["message"] . '</div>
                  </div>
                </div>
              </body>
            </html>
          ';
        $headers = implode("\r\n", [
          "MIME-Version: 1.0",
          "Content-type: text/html; charset=utf-8",
          "Cc: nayem.csm@gmail.com",
        ]);


        if (mail($to, $subject, $message, $headers)) { ?>
          <div class="common-sec">
            <div class="container">
              <h1 class="common-heading">Thank You For Contacting Us! We'll Get Back to You Soon.</h1>
            </div>
          </div>
        <?php

        } else { ?>
          <div class="common-sec">
            <div class="container">
              <h1 class="common-heading">The Form Was Not Submitted. Please, Try Again!</h1>
            </div>
          </div>
        <?php
        }
      } else { ?>
        <div class="common-sec">
          <div class="container">
            <h1 class="common-heading">Google re-Captcha Verification Failed</h1>
          </div>
        </div>
    <?php
      }
    }
    ?>

  </main>

  <!-- footer -->
  <?php include_once 'layouts/Footer.php'; ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>