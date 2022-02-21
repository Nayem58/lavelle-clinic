<!DOCTYPE html>
<html lang="en">

<head>
<?php
$title = "Laser & Skin Clinic | Lavelle Clinic";
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
<?php
include_once 'pages/homepage.php';
include_once 'layouts/WhyChoose.php';
include_once 'layouts/ReviewSec.php';
include_once 'layouts/Gallery.php';
?>
  </main>

  <!-- footer -->
  <?php include_once 'layouts/Footer.php';?>
</body>

</html>