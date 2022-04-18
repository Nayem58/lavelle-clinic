<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $title = "Laser Hair Treatments | Lavelle Clinic";
  require_once 'inc/head.php';
  ?>
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
        <div class="row align-items-center">
          <div class="col-md-6 order-lg-last">
            <div class="img-box img-box--soprano-machine">
              <img src="images/soprano-titanium-machine.png" alt="Soprano Titanium Machine" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="common-heading">
              <div class="img-box"><img src="images/soprano-titanium-logo.png" alt="Soprano Titanium Logo"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="common-sec tile-bg">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-3 mb-md-0 order-md-last">
            <div class="vdo-box">
              <video width="320" height="240" controls>
                <source src="videos/alma-plus-subs.mp4" type="video/mp4">
                <source src="videos/alma-plus-subs-og.png" type="video/ogg">
              </video>
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

    <div class="common-sec">
      <div class="container">
        <div class="offer-grid">
          <div class="offer__card text-bg" id="thirtyPercentOff">
            <div class="img-box">
              <img class="lazyload" src="#" data-src="images/gallery/g-sm-2.jpg" alt="" />
            </div>
            <div class="offer__card__copy tile-bg">
              <div class="percent"><span>30</span>% <span>OFF</span></div>
              <div class="condition">3 Areas or More</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="common-sec tile-bg">
      <div class="container">
        <h2 class="common-heading text-center mb-50px">
          Sundes
          <span class="site-primary-color-text">Videos</span>
        </h2>
        <div class="row justify-content-center">
          <div class="col-6 col-md-4 mb-4 mb-md-0">
            <div class="img-box vdo-box">
              <img class="lazyload" src="#" data-src="images/gallery/vdo-thumb-2.jpg" alt="" />
              <a class="play-btn" data-fancybox="laser-hair-removal-videos" href="videos/vdo-2.mp4"></a>
            </div>
          </div>
          <div class="col-6 col-md-4 mb-4 mb-md-0">
            <div class="img-box vdo-box">
              <img class="lazyload" src="#" data-src="images/gallery/vdo-thumb-3.jpg" alt="" />
              <a class="play-btn" data-fancybox="laser-hair-removal-videos" href="videos/vdo-3.mp4"></a>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="img-box vdo-box">
              <img class="lazyload" src="#" data-src="images/gallery/vdo-thumb-4.jpg" alt="" />
              <a class="play-btn" data-fancybox="laser-hair-removal-videos" href="videos/vdo-4.mp4"></a>
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
</body>

</html>