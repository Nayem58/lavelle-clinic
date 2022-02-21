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

<?php
include_once 'layouts/ReviewSec.php';
include_once 'layouts/Gallery.php';
?>

  </main>

  <!-- footer -->
  <?php include_once 'layouts/Footer.php';?>
</body>

</html>