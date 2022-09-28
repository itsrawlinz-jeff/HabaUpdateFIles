<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>HOME</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<!--font-Awesome-->

<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Meet,<br>Your True Love Today</h1>
      <h2>Brought To You Courtesy Of Haba</h2>
      <a href="gallery.html" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="color: white;">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>WHY Haba?</h3>
            <p class="fst-italic">
              We Make Love Happen
            </p>
          
            <p>
              Haba was first founded to challenge the antiquated rules of dating. Now, Haba empowers users to connect with confidence whether dating, networking, or meeting friends online. We’ve made it not only necessary but acceptable for women to make the first move, shaking up outdated gender norms. 
              We prioritise kindness and respect, providing a safe online community for users to build new relationships
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

   
     <!-- ======= Popular  Section ======= -->
     <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>OUR SERVICES</h2>
        </div>
        <b><u> <a href="/huba/login.php"> <h2 style="color: white;">SIGN UP FOR FREE</h2> </a>
        </u></b>
  <!-- ======= Popular  Section ======= -->
  <section id="popular-courses" class="courses">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <!-- <h2>Haba Testimonials</h2> -->
       
      </div>

      <div class="row" data-aos="zoom-in" data-aos-delay="100">

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">
            <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
            
              </div>
              <br>
              <br>
             <p>About Business Escort Membership</p>
              <div class="trainer d-flex justify-content-between align-items-center">
             
                <div class="trainer-profile d-flex align-items-center">
                  <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                  <span>Business Escort Membership</span>
                </div>
                
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="course-item">
            <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                
              </div>

               <p> Exclusive</p>                <div class="trainer d-flex justify-content-between align-items-center">
                <div class="trainer-profile d-flex align-items-center">
                  <!-- <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt=""> -->
                  <span>Exclusive</span>
                </div>
                <div class="trainer-rank d-flex align-items-center">
                  
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="course-item">
            <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
              
              </div>

              <!-- <h3><a href="course-details.html">Copywriting</a></h3> -->
              <p>Exsclusive Senior Dating</p>
              <div class="trainer d-flex justify-content-between align-items-center">
                <div class="trainer-profile d-flex align-items-center">
                  <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                  <span>Exclusive Senior Dating</span>
                </div>
                <div class="trainer-rank d-flex align-items-center">
                  <!-- <i class="bx bx-user"></i>&nbsp;20
                  &nbsp;&nbsp;
                  <i class="bx bx-heart"></i>&nbsp;85 -->
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->

      </div>

    </div>
  </section><!-- End Popular Courses Section -->
 <!-- division -->

    <!-- ======= Popular  Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!-- <h2>Haba Testimonials</h2> -->
         
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
              
                </div>

               <p>About Business Escort Membership</p>
                <div class="trainer d-flex justify-content-between align-items-center">
               
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                    <span>Business Escort Membership</span>
                  </div>
                  
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  
                </div>

                 <p> Exclusive</p>                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <!-- <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt=""> -->
                    <span>Exclusive</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                
                </div>

                <!-- <h3><a href="course-details.html">Copywriting</a></h3> -->
                <p>Exsclusive Senior Dating</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                    <span>Exclusive Senior Dating</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <!-- <i class="bx bx-user"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;85 -->
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

  

  </main><!-- End #main -->






	
    <div class="footer">
    	<div class="container">
    		<div class="col-md-4 col_2">
    			<h4>About Us</h4>
    			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Help & Support</h4>
    			<ul class="footer_links">
    				<li><a href="#">24x7 Live help</a></li>
    				<li><a href="contact.php">Contact us</a></li>
    				<li><a href="#">Feedback</a></li>
    				<li><a href="faq.php">FAQs</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Quick Links</h4>
    			<ul class="footer_links">
    				<li><a href="privacy.php">Privacy Policy</a></li>
    				<li><a href="terms.php">Terms and Conditions</a></li>
    				<li><a href="services.php">Services</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Social</h4>
    			<ul class="footer_social">
				  <li><a href="#"><i class="fa fa-facebook fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-google-plus fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
			    </ul>
    		</div>
    		<div class="clearfix"> </div>
    		<div class="copy">
		      <p>Copyright © 2017 Marital . All Rights Reserved  | Brought To You By <a href="http://code-projects.org
.com/" target="_blank">code-projects.org
</a> </p>
	        </div>
    	</div>
    </div>
</body>
</html>	