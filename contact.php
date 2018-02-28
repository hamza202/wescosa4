<html class="wide wow-animation desktop landscape rd-navbar-fullwidth-linked" lang="en">
<head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/YouTubePopUp.css">
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;">
        <a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
                src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
    </div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
</head>

<style type="text/css">
    .cc{
        height: 165 !important;
    }
</style>
<body>
<!-- Page Loader-->

<!-- Page-->
<div class="page">
    <!-- Page Header -->

    <?php include ('header.php')?>

   <section class="breadcrumbs-custom bg-image" style="background-image: url(images/backiuhiu5.jpg);">
        <div class="shell">
          <h2 class="breadcrumbs-custom__title">Contacts</h2>
          <ul class="breadcrumbs-custom__path">
            <li><a href="index.html">Home</a></li>
            <li class="active">Contact Us</li>
          </ul>
        </div>
      </section>


      <section class="section section-lg bg-white">
        <div class="shell">
          <div class="layout-bordered">
            <div class="layout-bordered__main text-center">
              <div class="layout-bordered__main-inner">
                <h3>Get in Touch</h3>
                <p>We are available 24/7 by fax, e-mail or by phone. You can also use our quick contact form to ask a question about our services and projects.</p>
                <!-- RD Mailform-->
                <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" novalidate="novalidate">
                  <div class="range range-sm-bottom range-20">
                    <div class="cell-sm-6">
                      <div class="form-wrap">
                        <input class="form-input form-control-has-validation" id="contact-first-name" type="text" name="first-name" data-constraints="@Required"><span class="form-validation"></span>
                        <label class="form-label rd-input-label" for="contact-first-name">First name</label>
                      </div>
                    </div>
                    <div class="cell-sm-6">
                      <div class="form-wrap">
                        <input class="form-input form-control-has-validation" id="contact-phone" type="text" name="phone" data-constraints="@Numeric @Required"><span class="form-validation"></span>
                        <label class="form-label rd-input-label" for="contact-phone">Phone</label>
                      </div>
                    </div>
                    <div class="cell-xs-12">
                      <div class="form-wrap">
                        <label class="form-label rd-input-label" for="contact-message">Your Message</label>
                        <textarea class="form-input form-control-has-validation form-control-last-child" id="contact-message" name="message" data-constraints="@Required"></textarea><span class="form-validation"></span>
                      </div>
                    </div>
                    <div class="cell-sm-6">
                      <div class="form-wrap">
                        <input class="form-input form-control-has-validation" id="contact-email" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
                        <label class="form-label rd-input-label" for="contact-email">E-mail</label>
                      </div>
                    </div>
                    <div class="cell-sm-6">
                      <button class="button button-block button-primary" type="submit">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="layout-bordered__aside">
              <div class="layout-bordered__aside-item">
                <p class="heading-8">Get social </p>
                <ul class="list-inline-xs">
                  <li><a class="icon icon-sm icon-default fa fa-facebook" href="#"></a></li>
                  <li><a class="icon icon-sm icon-default fa fa-twitter" href="#"></a></li>
                  <li><a class="icon icon-sm icon-default fa fa-google" href="#"></a></li>
                  <li><a class="icon icon-sm icon-default fa fa-youtube" href="#"></a></li>
                </ul>
              </div>
              <div class="layout-bordered__aside-item">
                <p class="heading-8">Phone</p>
                <div class="unit unit-horizontal unit-spacing-xxs">
                  <div class="unit__left"><span class="icon icon-sm icon-primary material-icons-local_phone"></span></div>
                  <div class="unit__body"><a href="callto:#">966 00000000</a></div>
                </div>
              </div>
              <div class="layout-bordered__aside-item">
                <p class="heading-8">E-mail</p>
                <div class="unit unit-horizontal unit-spacing-xxs">
                  <div class="unit__left"><span class="icon icon-sm icon-primary mdi mdi-email-outline"></span></div>
                  <div class="unit__body"><a href="mailto:#">info@testing.org</a></div>
                </div>
              </div>
              <div class="layout-bordered__aside-item">
                <p class="heading-8">Address</p>
                <div class="unit unit-horizontal unit-spacing-xxs">
                  <div class="unit__left"><span class="icon icon-sm icon-primary material-icons-location_on"></span></div>
                  <div class="unit__body"><a href="#">Suadi Arabia<br> Riyadh</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

        <div id="map" style="width: 100%; height: 600px;"></div>


    <!-- Page Footer -->
    <?php include ('footer.php')?>

</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script type="text/javascript" async="" src="js/ec.js">


</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAL_JWaOHAaCzfhkMz7boUM9ox5MQU7df4&callback=initMap"
          type="text/javascript"></script>
<script src="js/core.min.js"></script>
<script src="js/YouTubePopUp.jquery.js"></script>
<script>
    jQuery(function () {
        jQuery(".popUpVideo").YouTubePopUp();
    });
</script>
<script src="js/script.js"></script>
<script type="text/javascript">
</script>

<script type="text/javascript">
    var locations = [
      ['AlMadinah AlMonawrah', 24.4714392, 39.8977597, 7],
      ['Riyadh', 24.7253981, 47.3830368, 9],
      ['Makah', 21.4362767, 39.9866352, 11],
      ['Buraidah', 26.3479206, 44.0635138, 11]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 5.25,
      center: new google.maps.LatLng(24.807725, 44.3727667 , 5.25),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
<a href="#" id="ui-to-top" class="ui-to-top fa fa-angle-up"></a></body><!-- Google Tag Manager --></html>