<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Day - HTML Bootstrap Template</title>

  <!-- Bootstrap -->
  <link href="pages/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="pages/css/font-awesome.min.css">
  <link rel="stylesheet" href="pages/css/animate.css">
  <link href="pages/css/animate.min.css" rel="stylesheet">
  <link href="pages/css/style.css" rel="stylesheet" />
  <!-- =======================================================
    Theme Name: Day
    Theme URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <header id="header">
    <nav class="navbar navbar-default navbar-static-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <div class="navbar-brand">
            <a href="index.html"><h1>Bệnh viện nha khoa Hà Nội</h1></a>
          </div>
        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="trangchu">Trang chủ</a></li>
              <li role="presentation"><a href="gioithieu" class="active">Giới thiệu</a></li>
              <li role="presentation"><a href="lienhe" class="active">Liên hệ</a></li>
             
            </ul>
          </div>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->

  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3877827168285!2d105.85853091391445!3d21.017164386004705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abee2cabbe6f%3A0xa87d18d26d9dc536!2zQuG7h25oIHZp4buHbiBUcnVuZyDGsMahbmcgUXXDom4gxJHhu5lpIDEwOA!5e0!3m2!1svi!2s!4v1522685306386" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

  <section class="contact-page">
    <div class="container">
      <div class="text-center">
        <h2>Drop Your Message</h2>
        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="row contact-wrap">
        <div class="col-md-6 col-md-offset-3">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button></div>
          </form>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#contact-page-->


<footer>
    <div class="container">
      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h4>Giới thiệu</h4>
        <p>Day is tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters.</p>
        <div class="contact-info">
          <ul>
            <li><i class="fa fa-home fa"></i>Suite 54 Elizebth Street, Victoria State Newyork, USA </li>
            <li><i class="fa fa-phone fa"></i> +38 000 129900</li>
            <li><i class="fa fa-envelope fa"></i> info@domain.net</li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="text-center">
          <h4>Hình ảnh nổi bật</h4>
          <ul class="sidebar-gallery">
            <li><a href="#"><img src="pages/img/gallery1.png" alt="" /></a></li>
            <li><a href="#"><img src="pages/img/gallery2.png" alt="" /></a></li>
            <li><a href="#"><img src="pages/img/gallery3.png" alt="" /></a></li>
            <li><a href="#"><img src="pages/img/gallery4.png" alt="" /></a></li>
            <li><a href="#"><img src="pages/img/gallery5.png" alt="" /></a></li>
            <li><a href="#"><img src="pages/img/gallery6.png" alt="" /></a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
        <div class="">
          <h4>Newsletter Registration</h4>
          <p>Subscribe today to receive the latest Day news via email. You may unsubscribe from this service at any time</p>
          <div class="btn-gamp">
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter Email">
          </div>
          <div class="btn-gamp">
            <a type="submit" class="btn btn-default">Subscribe</a>
          </div>

        </div>
      </div>

    </div>
  </footer>
  <div class="sub-footer">
    <div class="container">
      <div class="social-icon">
        <div class="col-md-4">
          <ul class="social-network">
            <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 col-md-offset-4">
        <div class="copyright">
          &copy; Day Theme. All Rights Reserved.
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Day
            -->
            <a href="https://bootstrapmade.com/">Free Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="js/wow.min.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>
  <script>
    (function($) {
      //Google Map
      var get_latitude = $('#google-map').data('latitude');
      var get_longitude = $('#google-map').data('longitude');

      function initialize_google_map() {
        var myLatlng = new google.maps.LatLng(get_latitude, get_longitude);
        var mapOptions = {
          zoom: 14,
          scrollwheel: false,
          center: myLatlng
        };
        var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map
        });
      }
      google.maps.event.addDomListener(window, 'load', initialize_google_map);
    })(jQuery);
  </script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
