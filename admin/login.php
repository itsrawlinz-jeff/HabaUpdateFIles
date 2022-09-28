<?php

session_start();

include("includes/db.php");

?>
<!DOCTYPE HTML>
<html>

<head>

<title>Haba Admin Login</title>
<link rel="shortcut icon" href="favicon.ico" type="image/png">
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/login.css" >

</head>

<body style="background-color:purple">
<center><img src="logo.png" alt="GG LOGO" style="width: 200px;;"></center>

<div class="container" ><!-- container Starts -->

<form class="form-login" action="" method="post" ><!-- form-login Starts -->
<h2 class="form-login-heading" >Haba Admin Login</h2>

<input type="text" class="form-control" name="admin_email" placeholder="Email Address" required >

<input type="password" class="form-control" name="admin_pass" placeholder="Password" required >

<button class="btn btn-lg btn-primary btn-block" type="submit" name="admin_login" >

Log in

</button>


</form><!-- form-login Ends -->
<b><center><a href="../index.php" style="color:black;font-size:30px;">BACK TO GG HOME PAGE</a></center></b>
</div><!-- container Ends -->



</body>

</html>

<?php

if(isset($_POST['admin_login'])){

$admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);

$admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);

$get_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";

$run_admin = mysqli_query($con,$get_admin);

$count = mysqli_num_rows($run_admin);

if($count==1){

$_SESSION['admin_email']=$admin_email;

echo "<script>alert('You are Logged in into admin panel')</script>";

echo "<script>window.open('index.php?view_orders','_self')</script>";

}
else {

echo "<script>alert('Email or Password is Wrong')</script>";

}

}

?>