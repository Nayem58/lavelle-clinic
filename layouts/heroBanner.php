<?php
function heroBanner($heroBannerContent)
{
    echo <<<EOD
      <div class="common-sec hero-banner-sec py-0">
        <div class="container">
          $heroBannerContent
        </div>
      </div>
EOD;
// $heroBannerContent
}
