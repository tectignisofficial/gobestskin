<?php 
include("include/config.php");

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $branch=$_POST['branch'];
  $message=$_POST['message'];
 
  $sql=mysqli_query($conn,"INSERT INTO `contact`(`name`, `email`, `mobile`, `branch`, `message`) VALUES ('$name','$email','$mobile','$branch','$message')");
  if($sql==1){
    echo '<script>alert("Successfully submitted");</script>';
    header("location:contact-us.php");
}else {
    echo '<script>alert("oops...somthing went wrong");</script>';
}
        
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gobest Skin &amp; Hair Clinic – Advanced Skin/Hair Treatments In Pune</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>

 .info-box1 {
      padding: 10px;
      border-radius: 10px;
      border: 1px solid rgb(214 215 216 / 50%);
      ;
      box-shadow: 0 0 20px rgb(214 215 216 / 50%);
    }
    

.split {
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: space-between;
	align-items: strech;
	
}
.split p {
		flex-basis: 100%;
		/* @include media('tabletUpwards') {
			flex-basis: 48%;
		} */
	}

nav.social {
	display: inline-block;
	padding: 0;
	margin-bottom: 18px;

}

.comparison-slider-wrapper {
	position: relative;
	width: 100%;
	margin: 20px 0;
	background-color: white;}

	.comparison-slider {
		position: relative;
		width: 100%;
		margin: 0;
		border: 5px white solid;
		box-sizing: border-box; }
		
        .comparison-slider> img {
			width: 100%;
			height: auto;
			display: block;
		}

		.overlay {
			display: none;
			position: absolute;
			width: 250px;
			bottom: 20px;
			right: 20px;
			background-color: rgba(0, 0, 0, 0.4);
			padding: 10px;
			box-sizing: border-box;
			color: #DDD;
			text-align: right;
			
		}
        /* @include media('tabletUpwards') {
				display: block;
			} */

		.resize {
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			width: 50%;
			overflow: hidden;
			
			
		}
        .resize > img {
				display: block;
			}
            .resize.overlay {
				right: auto;
				left: 20px;
				text-align: left;
			}

		.divider {
			position: absolute;
			width: 2px;
			height: 100%;
			background-color: rgba(256, 256, 256, 0.2);
			left: 50%;
			top: 0;
			bottom: 0;
			margin-left: -1px;
			cursor: ew-resize;}
            .divider:before {
				content: "";
				position: absolute;
				width: 20px;
				height: 20px;
				left: -9px;
				top: 50%;
				margin-top: -10px;
				background-color: white;
				transform: rotate(45deg);
				transition: all 0.1s ease-in-out;
			}
            .divider:after {
				content: "";
				position: absolute;
				width: 12px;
				height: 12px;
				left: -5px;
				top: 50%;
				margin-top: -6px;
				background-color: white;
				transform: rotate(45deg);
				transition: all 0.1s ease-in-out;
			}
			.divider .draggable:before {
					width: 30px;
					height: 30px;
					left: -14px;
					margin-top: -15px;
				}
                .divider .draggable::after {
					width: 20px;
					height: 20px;
					left: -9px;
					margin-top: -10px;
					background-color: #555;
				}
			
		

	.caption {
		position: relative;
		width: 100%;
		padding: 10px;
		box-sizing: border-box;
		font-size: 12px;
		font-style: italic;
	}

.suppoprt-me {
	display: inline-block;
	position: fixed;
	bottom: 10px;
	left: 10px;
	width: 20vw;
	max-width: 250px;
	min-width: 200px;
	z-index: 9;
	
}
.suppoprt-me img {
		width: 100%;
		height: auto;
	}
    
  </style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Monday - Saturday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +1 5589 55488 55
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <?php include("include/header.php");?>


  <!-- End Header -->



  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>

        </div>

      </div>

      <div>
        <img src="assets/img/gallery_default.jpg" alt="">
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-12">
            <div class="row">
              <?php
              $sql=mysqli_query($conn,"select * from gallery");
              while($result=mysqli_fetch_array($sql)){
              ?>
              <div class="col-md-3">
                <div class="info-box1 mt-4">
                  <div><?= $result['service']; ?></div>
                </div>
              </div>
              <?php } ?>
              <!--              
              <div class="col-md-3">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="container">
        <div class="row mt-5">

          <div class="col-12">
            <div class="row">
            <?php
              $sql=mysqli_query($conn,"select * from gallery");
              while($result=mysqli_fetch_array($sql)){
              ?>
              <div class="col-6 col-md-3 col-lg-3">
                <div class="comparison-slider-wrapper">
                  <div class="comparison-slider">
                    <div class="overlay">And I am the <strong>after</strong> image.</div>
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/751678/marioPhoto-2.jpg" alt="marioPhoto 2">
                    <div class="resize">
                      <div class="overlay">I am the <strong>before</strong> image.</div>
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/751678/marioPhoto-1.jpg"
                        alt="marioPhoto 1">
                    </div>
                    <div class="divider"></div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
            <!-- <form method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">

                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3">
                  <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Your phone" required="">
                </div>
                <div class="col-md-6 form-group mt-3 ">
                  <input type="text" class="form-control" name="branch" id="branch" placeholder="Branch Name"
                    required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" id="message" rows="7" placeholder="Message"
                  required=""></textarea>
              </div>

              <div class="text-center"><button type="submit" name="submit" class="submitbutton" id="submit">Send
                  Message</button></div>
            </form> -->
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("include/footer.php");?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" ></script>
  <script>$(document).ready(function() {
  if ($(".comparison-slider")[0]) {
      let compSlider = $(".comparison-slider");
      compSlider.each(function() {
          let compSliderWidth = $(this).width() + "px";
          $(this).find(".resize img").css({ width: compSliderWidth });
          drags($(this).find(".divider"), $(this).find(".resize"), $(this));
      });
      $(window).on("resize", function() {
          let compSliderWidth = compSlider.width() + "px";
          compSlider.find(".resize img").css({ width: compSliderWidth });
      });
  }
});
function drags(dragElement, resizeElement, container) {

  let touched = false;
  window.addEventListener('touchstart', function() {
      touched = true;
  });
  window.addEventListener('touchend', function() {
      touched = false;
  });
  dragElement.on("mousedown touchstart", function(e) {
          dragElement.addClass("draggable");
          resizeElement.addClass("resizable");
          //create vars
          let startX = e.pageX ? e.pageX : e.originalEvent.touches[0].pageX;
          let dragWidth = dragElement.outerWidth();
          let posX = dragElement.offset().left + dragWidth - startX;
          let containerOffset = container.offset().left;
          let containerWidth = container.outerWidth();
          let minLeft = containerOffset + 10;
          let maxLeft = containerOffset + containerWidth - dragWidth - 10;
          dragElement.parents().on("mousemove touchmove", function(e) {
              
              if ( touched === false ) {
                  e.preventDefault();
              }
              
              let moveX = e.pageX ? e.pageX : e.originalEvent.touches[0].pageX;
              let leftValue = moveX + posX - dragWidth;

              if (leftValue < minLeft) {
                  leftValue = minLeft;
              } else if (leftValue > maxLeft) {
                  leftValue = maxLeft;
              }

              let widthValue = (leftValue + dragWidth / 2 - containerOffset) * 100 / containerWidth + "%";

              $(".draggable").css("left", widthValue).on("mouseup touchend touchcancel", function() {
                  $(this).removeClass("draggable");
                  resizeElement.removeClass("resizable");
              });
              
              $(".resizable").css("width", widthValue);
              
          }).on("mouseup touchend touchcancel", function() {
              dragElement.removeClass("draggable");
              resizeElement.removeClass("resizable");
              
          });
      
      }).on("mouseup touchend touchcancel", function(e) {
          // stop clicping the image and move the slider
          dragElement.removeClass("draggable");
          resizeElement.removeClass("resizable");
      
      });
  
}
</script>
</body>

</html>