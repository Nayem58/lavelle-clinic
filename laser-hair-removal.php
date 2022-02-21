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
  <?php include_once 'layouts/Header.php';?>

  <!-- main content -->
  <main>
  <!-- hero-banner-sec -->
  <div class="common-sec common-sec--hero-banner py-0 flex-hv-center">
    <div class="img-box common-sec--hero-banner__cover-img">
      <img src="images/backgrounds/laser-hair-removal-machine-bg.jpg" alt="Laser Hair Removal Machine">
    </div>
  </div>

  <div class="common-sec tile-bg">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-3 mb-md-0">
          <div class="img-box vdo-box">
            <img class=" lazyloaded" src="images/gallery/g-thumb-1.jpg" data-src="images/gallery/g-thumb-1.jpg" alt="">
            <a class="play-btn" data-fancybox="" href="videos/vdo-1.mp4"></a>
          </div>
        </div>
        <div class="col-md-6">
          <h1 class="common-heading">
          ALMA
          <span class="site-primary-color-text">Soprano Titanium</span>
        </h1>
        </div>
      </div>
    </div>
  </div>

<?php
include_once 'layouts/ReviewSec.php';
include_once 'layouts/Gallery.php';
?>

  </main>

  <!-- footer -->
  <?php include_once 'layouts/Footer.php';?>
</body>

</html>