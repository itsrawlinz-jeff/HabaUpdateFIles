<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "habadati_login";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
    
if(isset($_POST['save']))
{


    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $country=$_POST['country'];
    $contact=$_POST['contact'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $pgender=$_POST['pgender'];
    $rstatus=$_POST['rstatus'];
    $smoke=$_POST['smoke'];
    $drink=$_POST['drink'];
    $pdrink=$_POST['pdrink'];
    $income=$_POST['income'];
    $partnerage=$_POST['partnerage'];
    $chronic=$_POST['chronic'];
    $plan=$_POST['plan'];
    // $image=$_POST['image'];

   

    $sql = "INSERT INTO matchrequests (fullname,email,country,contact,dob,gender,pgender,rstatus,smoke,drink,pdrink,income,partnerage,chronic,plan)
    VALUES('$fullname','$email','$country','$contact','$dob','$gender','$pgender','$rstatus','$smoke','$drink','$pdrink','$income','$partnerage','$chronic','$plan')";    
 


   if (mysqli_query($conn, $sql)) {
      $message="Match Request Successfull!Proceed To Payment";
      echo "<script type='text/javascript'>alert('$message');</script>";
      header("Refresh: 0, ./paypal.php?amount=50&user=$useremail:");
   }
   else {
      $messageErr="Check Your Inputs";
      echo "<script type='text/javascript'>alert('$messageErr');</script>";
   }
 }
//   // insert in database 
//   if (mysqli_query($conn, $sql)) {
//     // echo " <CENTER> <b>PROCEED TO CHECKOUT</b></CENTER>";
//         header("Location:./choose-payment.php?amount=50&user=$useremail:");
//         // header("location: http://www.google.com");
//         exit();

//  } else {
//     echo "Error: " . $sql . "
// " . mysqli_error($conn);
//  }
//  mysqli_close($conn);

// }
?>