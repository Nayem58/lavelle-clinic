<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $title = "Hydrafacial | Lavelle Clinic";
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
              <img src="images/hydrafacial-machine.png" alt="Hydrafacial Machine" />
            </div>
          </div>
          <div class="col-md-5 col-lg-4 text-center">
            <div class="img-box">
              <img src="images/hydrafacial-logo-white.png" alt="Hydrafacial Logo" />
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
              <img src="videos/thumbs/hydrafacial-animation-og.png" alt="Hydrafacial OG" />
              <a class="play-overlay" data-fancybox href="videos/hydrafacial-animation.mp4"></a>
            </div>
          </div>
          <div class="col-md-6">
            <h1 class="common-heading">
              The
              <span class="site-primary-color-text">Hydrafacial</span>
              Treatment
            </h1>
            <div class="accordion accordion-flush" id="accordionSixStage">
              <div class="accordion-item">
                <div class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    6 Stages of Hydrafacial
                  </button>
                </div>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionSixStage">
                  <div class="accordion-body">
                    <ul class="check-square count-2">
                      <li>Detox</li>
                      <li>Cleanse</li>
                      <li>Peel</li>
                      <li>Extract + Hydrate</li>
                      <li>Fuse + Protect</li>
                      <li>Rejuvenation</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <div class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Who is it for?
                  </button>
                </div>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionSixStage">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Velit, iure.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <div class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Benefits
                  </button>
                </div>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionSixStage">
                  <div class="accordion-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Dolores, unde.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <div class="accordion-header" id="flush-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Cost
                  </button>
                </div>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionSixStage">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Neque, corrupti!
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="common-sec text-bg text-center">
      <div class="container">
        <div class="mb-5">
          <h2 class="common-heading">
            Is <span class="site-primary-color">Hydrafacial</span> Right for
            You?
          </h2>
          <p class="font-18px">
            Yes. We don’t have a type.<br />HydraFacial addresses all skincare
            needs.
          </p>
        </div>
        <div class="row justify-content-center hydrafacial-skin-types-row">
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="common-card">
              <div class="img-box">
                <img src="images/icons/icon-fine-lines.png" alt="Fine Lines Icon" />
              </div>
              <div class="content">FINE LINES + WRINKLES</div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="common-card">
              <div class="img-box">
                <img src="images/icons/icon-elasticity.png" alt="Elasticity Icon" />
              </div>
              <div class="content">ELASTICITY + FIRMNESS</div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="common-card">
              <div class="img-box">
                <img src="images/icons/icon-even-tone.png" alt="Even Tone Icon" />
              </div>
              <div class="content">EVEN TONE + VIBRANCY</div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="common-card">
              <div class="img-box">
                <img src="images/icons/icon-skin-texture.png" alt="Skin Texture Icon" />
              </div>
              <div class="content">SKIN TEXTURE</div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4 mb-sm-0">
            <div class="common-card">
              <div class="img-box">
                <img src="images/icons/icon-brown-spots.png" alt="Brown Spots Icon" />
              </div>
              <div class="content">BROWN SPOTS</div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4 mb-sm-0">
            <div class="common-card">
              <div class="img-box">
                <img src="images/icons/icon-oily.png" alt="Oily Icon" />
              </div>
              <div class="content">OILY + CONGESTED SKIN</div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="common-card">
              <div class="img-box">
                <img src="images/icons/icon-enlarged-pores.png" alt="Enlarged Pores Icon" />
              </div>
              <div class="content">ENLARGED PORES</div>
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
              <img src="videos/thumbs/dermalux-machine-og.png" alt="Dermalux Machine OG" />
              <a class="play-overlay" data-fancybox href="videos/dermalux-machine.mp4"></a>
            </div>
          </div>
          <div class="col-md-6">
            <h1 class="common-heading site-primary-color-text">
              <span class="site-primary-color-text">Dermalux</span>
            </h1>
            <div class="accordion accordion-flush" id="accordionDermalux">
              <div class="accordion-item">
                <div class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    What is Dermalux?
                  </button>
                </div>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionDermalux">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Vel, odit?
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <div class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Blue Light
                  </button>
                </div>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionDermalux">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Doloremque, corrupti.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <div class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Yellow Light
                  </button>
                </div>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionDermalux">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Officiis, cum.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <div class="accordion-header" id="flush-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Red Light
                  </button>
                </div>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionDermalux">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Facilis, fuga.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="common-sec videos-sliders-sec tile-bg">
      <div class="container">
        <div class="videos-sliders-carousel owl-carousel owl-theme">
          <div class="item">
            <div class="img-box vdo-box">
              <img class="lazyload" src="#" data-src="videos/thumbs/bav.jpg" alt="Bav thumbnail" />
              <a class="play-btn" data-fancybox href="videos/bav.mp4"></a>
            </div>
          </div>
          <div class="item">
            <div class="img-box vdo-box">
              <img class="lazyload" src="#" data-src="videos/thumbs/gunk.jpg" alt="Gunk thumbnail" />
              <a class="play-btn" data-fancybox href="videos/gunk.mp4"></a>
            </div>
          </div>
          <div class="item">
            <div class="img-box vdo-box">
              <img class="lazyload" src="#" data-src="videos/thumbs/poppy.jpg" alt="Poppy thumbnail" />
              <a class="play-btn" data-fancybox href="videos/poppy.mp4"></a>
            </div>
          </div>
          <div class="item">
            <div class="img-box vdo-box">
              <img class="lazyload" src="#" data-src="videos/thumbs/biancas-friend.jpg" alt="Biancas Friend thumbnail" />
              <a class="play-btn" data-fancybox href="videos/biancas-friend.mp4"></a>
            </div>
          </div>
          <div class="item">
            <div class="img-box vdo-box">
              <img class="lazyload" src="#" data-src="videos/thumbs/sana.jpg" alt="Sana thumbnail" />
              <a class="play-btn" data-fancybox href="videos/sana.mp4"></a>
            </div>
          </div>
          <div class="item">
            <div class="img-box vdo-box">
              <img class="lazyload" src="#" data-src="videos/thumbs/nina.jpg" alt="Nina thumbnail" />
              <a class="play-btn" data-fancybox href="videos/nina.mp4"></a>
            </div>
          </div>
          <div class="item">
            <div class="img-box vdo-box">
              <img class="lazyload" src="#" data-src="videos/thumbs/katy.jpg" alt="Katy thumbnail" />
              <a class="play-btn" data-fancybox href="videos/katy.mp4"></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    include_once 'layouts/ReviewSec.php';
    include_once 'layouts/Form.php';
    ?>
  </main>

  <!-- footer -->
  <?php include_once 'layouts/Footer.php'; ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
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
  </script>
</body>

</html>