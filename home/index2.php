<!doctype html>
<html lang="en">
<head>
<?
require_once("./common.head.inc");
?>
</head>
<body>
  <? require_once("common.header.inc"); ?>
  <?
  	body();
  ?>
</body>
</html>

<?
function body(){
?>
  <!-- section intro -->
  <section id="intro" onclick="location.href='#contact'">
    <ul id="slippry-slider">
      <li>
        <a href="#slide1">
        	<img src="../assets/img/slide/91.jpg" alt="Welcome to Geeky Drive! </br><button  class='btn btn-lg btn-theme'>Book Now</button>">
        </a>
      </li>
      <li>
        <a href="#slide2"><img src="../assets/img/slide/6.jpg"  alt="As you think you travel, and As you love you attract </br><button  class='btn btn-lg btn-theme'>Book Now</button>"></a>
      </li>
      <li>
        <a href="#slide3"><img src="../assets/img/slide/12.jpg" alt="Clarity is the counter balance of profound thoughts. </br><button class='btn btn-lg btn-theme'>Book Now</button>"></a>
      </li>
    </ul>
  </section>
  <!-- end intro -->
  <!-- Section about -->
  <section id="about" class="section" style="display:none">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h3><span>About us</span></h3>
          </div>
          <div class="sub-heading">
            <p>
              Those who are crazy enough to think they can change the world Usually do.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="team-box">
            <img src="../assets/img/dummies/A5x5.jpg" alt="" class="img-responsive" />
            <div class="roles">
              <h5><strong>Aadil</strong></h5>
              <p>
                CO - Founder
              </p>
              <ul class="social-profile">
                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-box">
            <img src="../assets/img/dummies/SA5x5.jpg" alt="" class="img-responsive" />
            <div class="roles">
              <h5><strong>Saqib Butt</strong></h5>
              <p>
                Tech designer
              </p>
              <ul class="social-profile">
                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-box">
            <img src="../assets/img/dummies/F5x5.jpg" alt="" class="img-responsive" />
            <div class="roles">
              <h5><strong>Faisal Nazir</strong></h5>
              <p>
                Customer support
              </p>
              <ul class="social-profile">
                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-box">
            <img src="../assets/img/dummies/O5x5.jpg" alt="" class="img-responsive" />
            <div class="roles">
              <h5><strong>Sheikh Osama</strong></h5>
              <p>
                Overseas Partner
              </p>
              <ul class="social-profile">
                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end section about -->
  <!-- section works -->
  <section id="works" class="section gray" >
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h3><span>Services</span></h3>
          </div>
          <div class="sub-heading">
            <p>
              When rains, look for the rainbow. When it gets dark, look for the star.When plans to ride, GeekDrive.com
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <ul class="grid effect" id="grid">
            <?
		  $context_path = "http://" .$_SERVER['SERVER_NAME'] ."/";//TODO move it config file
		  $bookingFormURL = $context_path ."bookingform/bookingform.php";
		  ?>
			<li>
            	<a href="../assets/img/portfolio/111.jpg" class="fancybox" data-fancybox-group="gallery"
				title="Wedding <a href='goto.php?for=wedding'>Tap To Reserve</a>">
            		<img src="../assets/img/portfolio/111.jpg" alt="" />
            	</a>
            </li>
            <li>
            	<a href="../assets/img/portfolio/112.jpg" class="fancybox" data-fancybox-group="gallery"
				title="Corporates <a href='goto.php?for=corporates'>Tap To Reserve</a>">
            		<img src="../assets/img/portfolio/112.jpg" alt="" />
            	</a>
            </li>
            <li>
				<a href="../assets/img/portfolio/113.jpg" class="fancybox" data-fancybox-group="gallery"
				title="PakistanTour <a href='goto.php?for=pakistantour'>Tap To Reserve</a>">
					<img src="../assets/img/portfolio/113.jpg" alt="" />
				</a>
			</li>
            <li>
				<a href="../assets/img/portfolio/114.jpg" class="fancybox" data-fancybox-group="gallery"
				title="Events <a href='goto.php?for=events'>Tap To Reserve</a>">
					<img src="../assets/img/portfolio/114.jpg" alt="" />
				</a>
			</li>
            <li>
				<a href="../assets/img/portfolio/115.png" class="fancybox" data-fancybox-group="gallery"
				title="Festivals <a href='goto.php?for=Festivals'>Tap To Reserve</a>">
					<img src="../assets/img/portfolio/115.png" alt="" />
				</a>
			</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- section works -->
  <!-- section contact -->
  <section id="contact" class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h3><span>Get Your Ride</span></h3>
          </div>
          <div class="sub-heading">
            <p>
              If you are going to be the BEST, You've got to ride the BEST.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      	</div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h4><i class="icon-envelope"></i><strong>Booking form</strong></h4>
          <p>
            Want to work with us or just want to say hello? Don't hesitate to get in touch!
          </p>
		  <?
		  $context_path = "http://" .$_SERVER['SERVER_NAME'] ."/";//TODO move it config file
		  $bookingFormURL = $context_path ."bookingform/bookingform.php";
		  include($bookingFormURL);
		  ?>
        </div>
        <div class="col-md-6">
          <h4>Find our location</h4>
          <p>View from google map</p>
          <!-- map -->
          <div id="section-map" class="clearfix">
            <div id="google-map" data-latitude="33.7628" data-longitude="-84.3928"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end section contact -->
  <footer>
    <div class="verybottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aligncenter">
              <ul class="social-network social-circle">
                <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="aligncenter">
              <p>
                &copy; Geeky Drive Theme - All right reserved
              </p>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Geeky Drive
                <a href="https://bootstrapmade.com/">Free Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a href="#" class="scrollup"><i class="fa fa-angle-up fa-2x"></i></a>
  <!-- javascript -->
  <script src="../assets/js/jquery.easing.js"></script>
  <script src="../assets/js/classie.js"></script>
  <script src="../assets/js/bootstrap.js"></script>
  <script src="../assets/js/slippry.min.js"></script>
  <script src="../assets/js/nagging-menu.js"></script>
  <script src="../assets/js/jquery.nav.js"></script>
  <script src="../assets/js/jquery.scrollTo.js"></script>
  <script src="../assets/js/jquery.fancybox.pack.js"></script>
  <script src="../assets/js/jquery.fancybox-media.js"></script>
  <script src="../assets/js/masonry.pkgd.min.js"></script>
  <script src="../assets/js/imagesloaded.js"></script>
  <script src="../assets/js/jquery.nicescroll.min.js"></script>
  <script src="../assets/js/AnimOnScroll.js"></script>

  <script>
    new AnimOnScroll(document.getElementById('grid'), {
      minDuration: 0.4,
      maxDuration: 0.7,
      viewportFactor: 0.2
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#slippry-slider').slippry(
        defaults = {
          transition: 'vertical',
          useCSS: true,
          speed: 5000,
          pause: 3000,
          initSingle: false,
          auto: true,
          preload: 'visible',
          pager: false,
        }

      )
    });
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="../assets/js/custom.js"></script>


<?
}
?>