<?php
// $con = mysqli_connect("localhost","root","","matrimony");
$servername='localhost';
$username='root';
$password='';
$dbname = "matrimony";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
  if(!$conn){
      die('Could not Connect MySql Server:' .mysql_error());
    }
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $gender = $_POST['gender'];
     $email = $_POST['email'];
     $phonenumber = $_POST['phonenumber'];
     $preferredgender = $_POST['preferredgender'];
     $preferredage = $_POST['preferredage'];

     $sql = "INSERT INTO matchs (name,gender,email,phonenumber,preferredgender,preferredage)
     VALUES ('$name','$gender','$email','$phonenumber','$preferredgender','$preferredage')";
     if (mysqli_query($conn, $sql)) {
        echo "Match Requested successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);

}

?>
