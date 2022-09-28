<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
<title>About Haba
</title>
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
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
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
<body  style="background-color:#ffff99 !important;>
<!-- ============================  Navigation Start =========================== -->
 <?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">About</li>
     </ul>
   </div>
   <div class="about">
   	  <div class="col-md-6 about_left">
   	  	<img src="images/woman1.jpg" class="img-responsive" alt=""/>
   	  </div>
   	  <div class="col-md-6 about_right">
   	  	<h1>Membership For Women</h1>
   <p>
Our services are designed for the elite and our members include entrepreneurs, CEOs, celebrities, models, politicians and highly committed professionals from across the globe.
 <br>
 Once you become our member we take the initiative of knowing you on a personal level, to ensure we match you with commitment-minded singles who share similar interests, life goals and aspirations.We will then arrange exclusive introductions with prospects who are best suited for you. 
 <br>
 We also organize monthly unique and luxury events for our members like gataways, camps, road trips, Parties, blackties, Red carpet events, golf tournaments. 
</p>
<a href="https://habadatingclub.com/LOGIN/loginsystem/welcome.php" >BECOME A MEMBER</a>

 <!--<button type="./LOGIN/loginsystem/">BECOME A MEMBER</button>-->
 <br>
 <br>
 We also organize monthly unique and luxury events for our members like getaways, camps, road trips, Parties, blackties, Red carpet events, golf tournaments. 
</p>
<br>
<ol style="color:#010b16">
    
    <li><a href="http://habadatingclub.com/events/index.html">Virtual Speed Dating</a></li>
    <li><a href="http://habadatingclub.com/events/index.html">Its Just Breakfast Event</a></li>
    <li><a href="http://habadatingclub.com/events/index.html">Virtual Speed Dating</a></li>
    <li><a href="http://habadatingclub.com/events/index.html">Its Just Lunch Event</a></li>
    <li><a href="http://habadatingclub.com/events/index.html">Its Just Dinner Event</a></li>
    <li><a href="http://habadatingclub.com/events/index.html">Its Just Dancing Event</a></li>
    <li><a href="http://habadatingclub.com/events/index.html">Its Just tasting wine Event</a></li>
    <li><a href="http://habadatingclub.com/events/index.html">Its Just singles event</a></li>


 </ol>
<br>
<br>	
 <a href="http://habadatingclub.com/events/index.html" >BESPOKE EVENTS: MEMBERS AREA</a>            <center><a href="./LOGIN/loginsystem/""> <h1 style="color:red;"><b>  <u>SIGN UP NOW</u>  </b></h1> </a> </center>


		
			
   	  <div class="clearfix"> </div>
   </div>
  </div>
</div>



<?php include_once("footer.php");?>

</body>
</html>	