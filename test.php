<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Testing</title>
  <script src="https://www.google.com/recaptcha/api.js?render=6Lfr1IAgAAAAAHUVL_6PUm4minu5v8SHMCpUhWXS"></script>
</head>

<body>
  <div class="consultation tile-bg">
    <div class="container px-5">
      <div class="text-center mb-2">
        <div class="img-box mb-3">
          <img src="../images/lavelle-clinic-logo.svg" alt="Lavelle Clinic Logo">
        </div>
        <p>Fill the <b>contact form</b> below and we'll contact you <b>ASAP!!</b>
        </p>
      </div>
      <form id="consultationForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="input-wrapper">
          <label for="name"><img src="../images/icons/user-icon.svg" alt="User Icon" />Name</label>
          <input type="text" name="name" id="name" placeholder="Your Name" />
        </div>
        <div class="input-wrapper">
          <label for="phone"><img src="../images/icons/phone-icon.svg" alt="Phone Icon" />Phone</label>
          <input type="tel" name="phone" id="phone" placeholder="Your Contact Number" />
        </div>
        <div class="input-wrapper">
          <label for="mail"><img src="../images/icons/message-icon.svg" alt="Message Icon" />Email</label>
          <input type="email" name="mail" id="mail" placeholder="Your Email Address" />
        </div>
        <div class="input-wrapper">
          <textarea name="message" id="message" cols="30" rows="2" placeholder="Type Your Message"></textarea>
        </div>
        <button name="submit" type="submit" class="common-btn">Submit</button>
        <input type="hidden" name="g-token" id="g-token">
      </form>
    </div>
  </div>

  <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('6Lfr1IAgAAAAAHUVL_6PUm4minu5v8SHMCpUhWXS', {
        action: 'submit'
      }).then(function(token) {
        var response = document.getElementById("g-token");
        response.value = token;
      });
    });
  </script>
</body>

</html>

<?php

if (isset($_POST['submit'])) {

  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $secret = "6Lfr1IAgAAAAALvxsc4rhHDhNrj0Q11tJSgQu3n4";
  $response = $_POST['g-token'];
  $remoteip = $_POST['REMOTE_ADDR'];

  $request = file_get_contents($url . '?secret=' . $secret . '&response=' . $response);
  $result = json_decode($request);

  // print_r($result);

  if ($result->success == true) {
    $to = "nayem.csm@gmail.com";
    $subject = "Testing Email";
    $message =
      "Name: " . $_POST['name'] . "\r\n" .
      "Phone: " . $_POST['phone'] . "\r\n" .
      "Email: " . $_POST['email'] . "\r\n\r\n\r\n" .
      $_POST['message'];
    // $from = "sw.nayem58@gmail.com";
    // $headers = "From : $from";

    if (mail($to, $subject, $message)) {
      echo "Mail Sent";
    } else {
      echo "Verified Successfully but Mail Not Sent";
    }
  } else {
    echo "Not Verified";
  }
}
