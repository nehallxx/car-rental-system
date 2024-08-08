
<?php

if(isset($_POST['submit'])){
session_start();

$email=$_POST['email'];
$password=$_POST['pwd'];
$encpassword=md5($password);

/*mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('carRentalDB') or die(mysql_error());*/
$con = mysqli_connect("127.0.0.1","root","","carRentalDBB");
 if (mysqli_connect_errno()) {
     die("Connection failed: " . mysqli_connect_error());
 }
$sql="SELECT *  FROM customer WHERE email='$email' AND password='$encpassword'";
$query=mysqli_query($con,$sql) ;
   $row=mysqli_fetch_array($query);
   if($row){
   $sql = "SELECT * FROM customer WHERE email = '$email'";
    $res = mysqli_query($con, $sql);
    $userRow = mysqli_fetch_array($res);
    $id=$userRow['customer_id'];
    $fname = $userRow['fname'];
    $lname = $userRow['lname'];
    $email = $userRow['email'];
    $phone = $userRow['phone'];
    $_SESSION['customer_id']=$id;
    $_SESSION['email']=$email;
    $_SESSION['fname']=$fname;
    $_SESSION['lname']=$lname;
    $_SESSION['phone']=$phone;

    echo"<script>alert('login successful')</script>";
    header('location:welcome.php');
   }
   else
   {
    echo"<script>alert('invalid email or password')</script>";
   }

}
?>
