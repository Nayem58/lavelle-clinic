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
  <div class="preLoader">Loading<span>...</span></div>

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
            <div class="img-box">
              <img src="images/soprano-titanium-logo.png" alt="Soprano Titanium Logo" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="common-sec tile-bg">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-3 mb-md-0 order-md-last">
            <div class="img-box vdo-box">
              <img src="videos/thumbs/alma-plus-subs-og.png" alt="Alma Plus Subs OG" />
              <a class="play-overlay" data-fancybox href="videos/alma-plus-subs.mp4"></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex mb-15px">
              <!-- <h1 class="common-heading mb-0 common-heading--line-height-0p8">
                ALMA <span class="visibility-hidden">Soprano Titanium</span>
              </h1> -->
              <img class="ms-1" src="images/soprano-titanium-black.png" alt="Soprano Titanium Logo" />
            </div>
            <ul class="check-square mb-0">
              <li>
                4cm2 hand piece for faster treatments and better patient
                experience
              </li>
              <li>
                Ice Plus contact cooling and in motion technique for a pain
                free treatment
              </li>
              <li>3 simultaneous wavelengths in 1 applicator</li>
              <li>
                Suitable for all skin types including dark and tanned skin
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <?php
    include_once 'layouts/LaserHairRemovalOffers.php';
    ?>

    <!-- laser-hair-removal-offers-sec -->
    <div class="common-sec videos-sliders-sec tile-bg">
      <div class="container">
        <div class="videos-sliders-carousel owl-carousel owl-theme">
          <div class="item">
            <div class="img-box vdo-box">
              <img class="lazyload" src="#" data-src="videos/thumbs/farywall.jpg" alt="Farywall thumbnail" />
              <a class="play-btn" data-fancybox href="videos/farywall.mp4"></a>
            </div>
          </div>
          <div class="item">
            <div class="img-box vdo-box">
              <img class="lazyload" src="#" data-src="videos/thumbs/maddison.jpg" alt="Madison thumbnail" />
              <a class="play-btn" data-fancybox href="videos/maddison.mp4"></a>
            </div>
          </div>
          <div class="item">
            <div class="img-box vdo-box">
              <img class="lazyload" src="#" data-src="videos/thumbs/neck-line-up.jpg" alt="Neck Line Up thumbnail" />
              <a class="play-btn" data-fancybox href="videos/neck-line-up.mp4"></a>
            </div>
          </div>
          <div class="item">
            <div class="img-box vdo-box">
              <img class="lazyload" src="#" data-src="videos/thumbs/before-and-after-face-3-sessions.jpg" alt="Before And After Face 3 Sessions thumbnail" />
              <a class="play-btn" data-fancybox href="videos/before-and-after-face-3-sessions.mp4"></a>
            </div>
          </div>
          <div class="item">
            <div class="img-box vdo-box">
              <img class="lazyload" src="#" data-src="videos/thumbs/doncaster-white-girl-laser.jpg" alt="Doncaster White Girl Laser thumbnail" />
              <a class="play-btn" data-fancybox href="videos/doncaster-white-girl-laser.mp4"></a>
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

      $(".videos-sliders-carousel").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: true,
        smartSpeed: 500,
        animateOut: "fadeOut",
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 2,
          },
          992: {
            items: 3,
          },
        },
      });
    });
  </script>
</body>

</html>