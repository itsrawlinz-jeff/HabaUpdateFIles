<!-- ============================  Navigation Start =========================== -->
 <div class="navbar navbar-inverse-blue navbar" style="background-color:#ffff99 ;color: black !important;">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner navbar-inner_1" style="background-color:#ffff99 !important;>
        <div class="container">
           <div class="navigation" >
             <nav id="colorNav">
			   <ul>
			<!-- 	<li class="green">
				  <a href="#" class="icon-home"></a>
				  <ul>
				  <?php 
				  if(isloggedin()){
				  	$id=$_SESSION['id'];
				  	echo "<li><a href=\"userhome.php?id=$id\">Home</a></li>";
				  	echo "<li><a href=\"logout.php\">Logout</a></li>";
				  }
				  else{
				  	echo "<li><a href=\"login.php\">Login</a></li>";
				  	echo "<li><a href=\"register.php\">Register</a></li>";
				  }

				  ?>
					
				  </ul>
				</li> -->
			   </ul>
             </nav>
           </div>
           <a class="brand" href="index.php" ><img src="images/logos.png" alt="logo"style="width: 90px;height:50px; !important"></a>
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
 
		 <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2" >
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"></a>
		   </div> 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
		            <li><a href="index.php"><b>Home</b></a></li>
		            <li><a href="about.php"><b>About</b></a></li>
		           <li><a href="http://habadatingclub.com/events/index.html"><b>Events</b></a></li>
				  	                <li><a href="packages.php" style="color:#00001a;">Haba Packages</a></li>

		    		<li><a href="./LOGIN/loginsystem/"><b>Login</b></a></li>
		            <li ><a href="contact.php"><b>Contacts</b></a></li>
					<li></li>
		        </ul>
		     </div><!-- /.navbar-collapse -->
		    </nav>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->