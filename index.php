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
  <?php include_once 'layouts/header.html';?>

  <!-- main content -->
  <main>
  <?php include_once 'pages/homepage.php';?>
  </main>

  <!-- footer -->
  <?php include_once 'layouts/footer.html';?>
</body>

</html>