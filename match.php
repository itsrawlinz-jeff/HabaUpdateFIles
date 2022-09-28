
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Favicons -->
   <link href="assets/img/apple-touch-icon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> 


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <title>MATCH</title>
</head>
<body  style="background-color:#ffff99 !important;>
   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top" style="background-color: white;">
    <div class="container d-flex align-items-center" >

      <!-- <h1 class="logo me-auto"><a href="index.php" style="color:white;">Haba</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo me-auto"><img src="images/logos.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="index.php" style="color:black ;">Home</a></li>
          <li><a href="about.php"style="color:black;" >About</a></li>
          <li class="dropdown"><a href="#"  style="color:black ;"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="login.php">Login</a>
              <li><a href="register.php">Sign Up</a></li>
              <li><a href="view_profile.php">Profile</a></li>

              
                
                  <!-- <li><a href="#">Membership For Men</a></li>
                  <li><a href="#">Membership For Women</a></li>
                  <li><a href="#">Safari Dating Membership</a></li>
                  <li><a href="#">Business Escort Membership</a></li>
                  <li><a href="#">Complementary</a></li>
                  <li><a href="#">Exclusive Senior Dating</a></li> -->
                  <!-- <li><a href="#">Portfolio</a></li> -->
                
              </li>
              <!-- <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li> -->
            </ul>
          </li>
          <!-- <li><a href="gallery.html" style="color:black ;">Gallery</a></li> -->
          <!-- <li><a href="/Haba/index.php" style="color:black ;">Login</a></li> -->
          <li><a href="contact.php" style="color:black ;">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
<div class="form-style-10">
<h1>GET A PATRTNER NOW!<span>Courtesy Of Huba!</span></h1 style="background-color:red !important">

<form action="insert.php" method="post">
    <div class="section"><span>1</span><b>Your Details</b></div>
    <div class="inner-wrap">
        <label>Your Full Name <input type="text" name="name" /></label>
        <div>
        <label>Gender </label>
        <select name="gender" id="gender">
       <option value="Male">Male</option>
       <option value="Female">Female</option>
       </select>
        </div>
        <!-- <label>Address <textarea name="field2"></textarea></label> -->
        <label>Email Address <input type="email" name="email" /></label>
        <label>Phone Number <input type="text" name="phonenumber" /></label>
        

    </div>

    <h1 style="background-color:maroon !important">PREFERRED PARTNER DETAILS</span></h1>
    <div class="section"><span></span><b>Partner Details</b></div>
        <div class="inner-wrap">
        <div>
        <label>Preferred Partner Gender </label>
        <select name="gender" id="gender">
       <option value="Male">Male</option>
       <option value="Female">Female</option>
       </select>
       <label>Preffered Age Bracket </label>
        <select name="gender" id="gender">
       <option value="Male">18-25</option>
       <option value="Female">25-35</option>
       <option value="">36-46</option>
       <option value="">46-56</option>
       <option value="">57-67</option>
       </select>
        </div>
        <!-- <l


        <!-- <label>Confirm Password <input type="password" name="field6" /></label> -->
    </div>
    <div class="button-section">
    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
     <!-- <span class="privacy-policy">
     <input type="checkbox" name="field7">You agree to our Terms and Policy. 
     </span> -->
    </div>
 

</form>
</div>
<style>
  <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<style type="text/css">
.form-style-10{
	width:450px;
	padding:30px;
	margin:40px auto;
	background: #FFF;
	border-radius: 10px;
	-webkit-border-radius:10px;
	-moz-border-radius: 10px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	-moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.form-style-10 .inner-wrap{
	padding: 30px;
	background: #F8F8F8;
	border-radius: 6px;
	margin-bottom: 15px;
}
.form-style-10 h1{
	background: red;
	padding: 20px 30px 15px 30px;
	margin: -30px -30px 30px -30px;
	border-radius: 10px 10px 0 0;
	-webkit-border-radius: 10px 10px 0 0;
	-moz-border-radius: 10px 10px 0 0;
	color: #fff;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
	font: normal 30px 'Bitter', serif;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	border: 1px solid #257C9E;
}
.form-style-10 h1 > span{
	display: block;
	margin-top: 2px;
	font: 13px Arial, Helvetica, sans-serif;
}
.form-style-10 label{
	display: block;
	font: 13px Arial, Helvetica, sans-serif;
	color: #888;
	margin-bottom: 15px;
}
.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="datetime"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select {
	display: block;
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	padding: 8px;
	border-radius: 6px;
	-webkit-border-radius:6px;
	-moz-border-radius:6px;
	border: 2px solid #fff;
	box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
	-moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
	-webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
	font: normal 20px 'Bitter', serif;
	color: #2A88AD;
	margin-bottom: 5px;
}
.form-style-10 .section span {
	background: #2A88AD;
	padding: 5px 10px 5px 10px;
	position: absolute;
	border-radius: 50%;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border: 4px solid #fff;
	font-size: 14px;
	margin-left: -45px;
	color: #fff;
	margin-top: -3px;
}
.form-style-10 input[type="button"], 
.form-style-10 input[type="submit"]{
	background: #2A88AD;
	padding: 8px 20px 8px 20px;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	color: #fff;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
	font: normal 30px 'Bitter', serif;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	border: 1px solid #257C9E;
	font-size: 15px;
}
.form-style-10 input[type="button"]:hover, 
.form-style-10 input[type="submit"]:hover{
	background: #2A6881;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
.form-style-10 .privacy-policy{
	float: right;
	width: 250px;
	font: 12px Arial, Helvetica, sans-serif;
	color: #4D4D4D;
	margin-top: 10px;
	text-align: right;
}
</style>
</style>
 <!-- ======= Footer ======= -->
 <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Haba</h3>
        <p>
          Nairobi,Kenya <br>
          
          <strong>Phone:</strong> +1 605-971-3544(Whatsapp Only) <br>
          <strong>Email:</strong> enquiries@habadatingclub.com<br>
        </p>
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

     

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Join Our Mailing List</h4>
        <p>Input Your Email Below To Join The Haba Family</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe" style="color:rgb(253, 2, 170)">
        </form>
      </div>

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>Haba</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
     
      <!-- Designed by <a href="">Rawlinz Designs</a> -->
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="assets/img/loader.gif" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script>
  var preloader = document.getElementById('loader');
  function preLoaderHandler(){
      preloader.style.display = 'none';
  }
</script>
<!-- Vendor JS Files -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6278e6a3b0d10b6f3e71451d/1g2k49sut';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>