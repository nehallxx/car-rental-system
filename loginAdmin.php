<?php

if(isset($_POST['submit'])){
session_start();

$email=$_POST['email'];
$password=$_POST['pwd'];

$con = mysqli_connect("127.0.0.1","root","","carRentalDBB");
 if (mysqli_connect_errno()) {
     die("Connection failed: " . mysqli_connect_error());
 }

   $sql="SELECT *
   FROM admin
   WHERE email='$email' AND password='$password'";
   $query=mysqli_query($con,$sql) ;
   $res=mysqli_fetch_array($query);
   if($res){
    echo"<script>alert('login successful')</script>";
    header('location:adminhome.php');
   }
   else
   {
    echo"<script>alert('invalid email or password')</script>";
   }

}
?>
