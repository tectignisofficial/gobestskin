<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Medicio</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
          <style>
            .ftr__list {
  border:1px solid #ddd;
}


@media only screen and (max-width : 767px) {
	
/**nav-expand for footer with head and ul**/
.nav-folderized .nav h4 { cursor: pointer;width:100%;padding:2px 5px; }
.nav-folderized ul { max-height: 0; overflow:hidden; transition: max-height 1s ease-out; }
.nav-folderized .nav h4:after { content: "+"; float: right; }
.nav-folderized .nav.open h4:after { content: "-"; }
.nav-folderized .nav.open ul { height:auto; max-height: 500px; transition: max-height 1s ease-in !important; }
/**nav-expand for footer with head and ul**/
}
          </style>
          <div class="nav-folderized">
          <div class="ftr__list nav col-sm-3">
    <h4>Learn</h4>
    <ul>
      <li><a href="#">New User FAQ</a></li>
      <li><a href="#">New User FAQ</a></li>
      <li><a href="#">New User FAQ</a></li>
      <li><a href="#">New User FAQ</a></li>
    </ul>
  </div>
  <div class="col-lg-2 col-md-6 footer-links ftr__list nav">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>
</div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Medicio</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" ></script>
  <script>
    $('.haidetail').hide();
$(document).ready(function(){
    $('.before1').click(function(){
        $('.beforedetail').show();
        $('.haidetail').hide();
    });
    $('.Hair1').click(function(){
        $('.haidetail').show();
        $('.beforedetail').hide();
    })
});
$(".nav-folderized h4").click(function(){
	  $(this).parent(".nav").toggleClass("open"); 
	  $('html, body').animate({ scrollTop: jQuery(this).offset().top - 170 }, 1500 );
  });
  
  </script>