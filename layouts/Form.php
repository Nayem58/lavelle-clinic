<div class="consultation tile-bg">
  <span class="closeIcon">
    <img src="../images/icons/close-icon.svg" alt="Close Icon" />
  </span>
  <div class="container px-5">
    <div class="text-center mb-2">
      <div class="img-box mb-3">
        <img src="../images/lavelle-clinic-logo.svg" alt="Lavelle Clinic Logo">
      </div>
      <p>Fill the <b>contact form</b> below and we'll contact you <b>ASAP!!</b>
      </p>
    </div>
    <form id="consultationForm" method="post" action="../form-submission.php">
      <div class="input-wrapper">
        <label for="name"><img src="../images/icons/user-icon.svg" alt="User Icon" />Name</label>
        <input type="text" name="name" id="name" placeholder="Your Name" />
      </div>
      <div class="input-wrapper">
        <label for="phone"><img src="../images/icons/phone-icon.svg" alt="Phone Icon" />Phone</label>
        <input type="tel" name="phone" id="phone" placeholder="Your Contact Number" />
      </div>
      <div class="input-wrapper">
        <label for="email"><img src="../images/icons/message-icon.svg" alt="Message Icon" />Email</label>
        <input type="email" name="email" id="email" placeholder="Your Email Address" />
      </div>
      <div class="input-wrapper">
        <textarea name="message" id="message" cols="30" rows="2" placeholder="Type Your Message"></textarea>
      </div>
      <button name="submit" type="submit" class="common-btn">Submit</button>
      <input type="hidden" name="g-token" id="g-token">
    </form>
  </div>
</div>
<div class="mask"></div>