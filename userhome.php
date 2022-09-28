<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php

$id=$_GET['id'];
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Profile Home
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">User Home</li>
     </ul>
   </div>
   <div class="navigation" style="background-color: #ccc;"><!-- Innernavigation starts -->
   	
   	  	<!-- <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
		            <li><a href="view_profile.php?id=<?php echo $id;?>">View Profile</a></li>
		            <li><a href="partner_preference.php?id=<?php echo $id;?>">Partner Preference</a></li>
		    		<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		               <li><a href="photouploader.php?id=<?php echo $id;?>">Upload Photos</a></li>
		               <li><a href="view_profile.php?id=<?php echo $id;?>">View Profile</a></li>
		               <li><a href="create_profile.php?id=<?php echo $id;?>">Edit Profile</a></li>  
		              </ul>
		            </li>
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="search.php">Regular Search</a></li>
		                <li><a href="faq.php">Faq</a></li>
		              </ul>
		            </li>
		        </ul> -->
		</div>
   </div><!-- End of inner navigation -->
   <div
  </div>
</div>
<!-- form.123formbuilder.com script begins here --><script type="text/javascript" defer src="https://form.123formbuilder.com/embed/6163698.js" data-role="form" data-default-width="650px"></script><!-- form.123formbuilder.com script ends here -->


<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});

</script>
<div >
  <!-- <center>  <button style="background-color:red">  <a href="match.php"><h2 style="color:white"><b><u>MATCH NOW</u></b></h2></a></button>
</center> -->
<!-- <center><b><a href="match.php" class="button" style="color:r">GET A MATCH </a></b></center> -->
<!-- <button type="submit" class="button">Click here!</button> -->
<style>
  .button {
  background-color: #1c87c9;
  -webkit-border-radius: 60px;
  border-radius: 60px;
  border: none;
  color: #eeeeee;
  cursor: pointer;
  display: inline-block;
  font-family: sans-serif;
  font-size: 20px;
  padding: 5px 15px;
  text-align: center;
  text-decoration: none;
}
@keyframes glowing {
  0% {
    background-color: #2ba805;
    box-shadow: 0 0 3px #2ba805;
  }
  50% {
    background-color: #49e819;
    box-shadow: 0 0 10px #49e819;
  }
  100% {
    background-color: #2ba805;
    box-shadow: 0 0 3px #2ba805;
  }
}
</style>
</div>
<?php include_once("footer.php")?>

</body>
</html>	