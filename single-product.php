<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head> 
    <!-- Site Title-->
    <title>Single product</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>

    <div class="page">
<?php include('header.php') ?>
      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image" style="background-image: url(images/bg-image-14.jpg);">
        <div class="shell">
          <h2 class="breadcrumbs-custom__title">Single product</h2>
          <ul class="breadcrumbs-custom__path">
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li class="active">Single product</li>
          </ul>
        </div>
      </section>

      <!-- Single product-->
      <section class="section section-md bg-white">
        <div class="shell">
          <div class="layout-horizontal layout-horizontal_1">
            <div class="layout-horizontal__aside">
              <div class="slick-slider-vertical slick-slider-vertical_sm">
                <div class="slick-slider carousel-parent" id="parent-carousel" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel">
                  <div class="item">
                    <div class="slick-image">
                      <div class="product-preview"><img src="images/single-product-1-226x284.png" alt="" width="226" height="284"/>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="slick-image">
                      <div class="product-preview"><img src="images/single-product-2-282x293.png" alt="" width="282" height="293"/>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="slick-image">
                      <div class="product-preview"><img src="images/single-product-3-338x256.png" alt="" width="338" height="256"/>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="slick-image">
                      <div class="product-preview"><img src="images/single-product-4-214x326.png" alt="" width="214" height="326"/>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="slick-slider carousel-child" id="child-carousel" data-for="#parent-carousel" data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="3" data-xs-items="3" data-sm-items="3" data-md-items="3" data-lg-items="3" data-slide-to-scroll="1" data-vertical="false" data-xs-vertical="false" data-sm-vertical="true" data-md-vertical="true" data-lg-vertical="true" data-center-mode="true">
                  <div class="item">
                    <div class="slick-slider__inner">
                      <div class="product-preview"><img src="images/single-product-1-226x284.png" alt="" width="226" height="284"/>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="slick-slider__inner">
                      <div class="product-preview"><img src="images/single-product-2-282x293.png" alt="" width="282" height="293"/>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="slick-slider__inner">
                      <div class="product-preview"><img src="images/single-product-3-338x256.png" alt="" width="338" height="256"/>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="slick-slider__inner">
                      <div class="product-preview"><img src="images/single-product-4-214x326.png" alt="" width="214" height="326"/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="layout-horizontal__main"> 
              <article class="single-product">
                <div class="single-product__header">
                  <h3 class="single-product__title">Thread Faceplate</h3>
                </div>
                <div class="single-product__main">
                  <!-- Tabs-->
                  <div class="tabs-custom tabs-horizontal tabs-line">
                    <!-- Nav tabs-->
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#tabs-product-1" data-toggle="tab">Description</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane fade in active" id="tabs-product-1">
                        <p>With our unique spin-balanced construction to eliminate vibration, this Faceplate is perfect for precision turning on a wide range of projects.</p>
                      </div>
                    </div>
                  </div>
                  <div class="group group-buttons group-middle"><a class="button button-darker" href="">get a quote</a>
                    <p>or</p><a class="button button-primary" href="#">get price list</a>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <?php include('footer.php')?>

    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>