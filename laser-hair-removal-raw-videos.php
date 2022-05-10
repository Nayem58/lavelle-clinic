<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $title = "Laser Hair Treatments | Lavelle Clinic";
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
    <!-- hero-banner-sec -->
    <div class="common-sec common-sec--hero-banner common-sec--laser-hair-removal-banner py-0 flex-hv-center">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-5 col-lg-4 order-lg-last text-center">
            <div class="img-box img-box--soprano-machine">
              <img src="images/soprano-titanium-machine.png" alt="Soprano Titanium Machine" />
            </div>
          </div>
          <div class="col-md-5 col-lg-4 text-center">
            <div class="img-box"><img src="images/soprano-titanium-logo.png" alt="Soprano Titanium Logo"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="common-sec tile-bg">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-3 mb-md-0 order-md-last">
            <div class="img-box vdo-box">
              <img class="lazyload" src="#" data-src="videos/thumbs/alma-plus-subs-og.png" alt="Alma Plus Subs OG" />
              <a class="play-button" data-fancybox href="videos/alma-plus-subs.mp4"></a>
            </div>
          </div>
          <div class="col-md-6">
            <h1 class="common-heading">
              ALMA
              <span class="site-primary-color-text">Soprano Titanium</span>
            </h1>
            <ul class="check-square mb-0">
              <li>4cm2 hand piece for faster treatments and better patient experience</li>
              <li>Ice Plus contact cooling and in motion technique for a pain free treatment</li>
              <li>3 simultaneous wavelengths in 1 applicator</li>
              <li>Suitable for all skin types including dark and tanned skin</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <?php
    include_once 'layouts/LaserHairRemovalOffers.php';
    ?>

    <!-- laser-hair-removal-offers-sec -->
    <div class="common-sec laser-hair-removal-videos-sec">
      <div class="container">
        <div class="laser-hair-removal-videos-sliders laser-hair-removal-videos-sliders--raw owl-carousel owl-theme">
          <div class="item">
            <div class="vdo-box">
              <video width="320" height="240" controls>
                <source src="videos/head-to-toe-offer.mp4" type="video/mp4">
                <source src="videos/thumbs/head-to-toe-offer.jpg" type="video/ogg">
              </video>
            </div>
          </div>
          <div class="item">
            <div class="vdo-box">
              <video width="320" height="240" controls>
                <source src="videos/video-3.mp4" type="video/mp4">
                <source src="videos/thumbs/video-3.jpg" type="video/ogg">
              </video>
            </div>
          </div>
          <div class="item">
            <div class="vdo-box">
              <video width="320" height="240" controls>
                <source src="videos/bianca-armpit.mp4" type="video/mp4">
                <source src="videos/thumbs/bianca-armpit.jpg" type="video/ogg">
              </video>
            </div>
          </div>
          <div class="item">
            <div class="vdo-box">
              <video width="320" height="240" controls>
                <source src="videos/doncaster-white-girl-laser.mp4" type="video/mp4">
                <source src="videos/thumbs/doncaster-white-girl-laser.jpg" type="video/ogg">
              </video>
            </div>
          </div>
          <div class="item">
            <div class="vdo-box">
              <video width="320" height="240" controls>
                <source src="videos/farywall.mp4" type="video/mp4">
                <source src="videos/thumbs/farywall.jpg" type="video/ogg">
              </video>
            </div>
          </div>
          <div class="item">
            <div class="vdo-box">
              <video width="320" height="240" controls>
                <source src="videos/before-and-after-face-3-sessions.mp4" type="video/mp4">
                <source src="videos/thumbs/before-and-after-face-3-sessions.jpg" type="video/ogg">
              </video>
            </div>
          </div>
          <div class="item">
            <div class="vdo-box">
              <video width="320" height="240" controls>
                <source src="videos/mixed-race-belly-shaving.mp4" type="video/mp4">
                <source src="videos/thumbs/mixed-race-belly-shaving.jpg" type="video/ogg">
              </video>
            </div>
          </div>
          <div class="item">
            <div class="vdo-box">
              <video width="320" height="240" controls>
                <source src="videos/neck-line-up.mp4" type="video/mp4">
                <source src="videos/thumbs/neck-line-up.jpg" type="video/ogg">
              </video>
            </div>
          </div>
          <div class="item">
            <div class="vdo-box">
              <video width="320" height="240" controls>
                <source src="videos/video-1.mp4" type="video/mp4">
                <source src="videos/thumbs/video-1.jpg" type="video/ogg">
              </video>
            </div>
          </div>
          <div class="item">
            <div class="vdo-box">
              <video width="320" height="240" controls>
                <source src="videos/zora-back-shaving.mp4" type="video/mp4">
                <source src="videos/thumbs/zora-back-shaving.jpg" type="video/ogg">
              </video>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    include_once 'layouts/ReviewSec.php';
    ?>
  </main>

  <!-- footer -->
  <?php include_once 'layouts/Footer.php'; ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    $(document).ready(function() {
      $(".laser-hair-removal-offers-sliders").owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        smartSpeed: 2500,
        animateOut: "fadeOut",
        responsive: {
          0: {
            items: 1,
          },
        },
      });

      $(".laser-hair-removal-videos-sliders").owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        dots: false,
        smartSpeed: 2500,
        animateOut: "fadeOut",
        responsive: {
          0: {
            items: 1,
          },
          576: {
            items: 2,
          },
          768: {
            items: 3,
          },
          992: {
            items: 4,
          },
        },
      });
    });
  </script>
</body>

</html>