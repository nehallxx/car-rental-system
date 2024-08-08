
<?php session_start()?>
<html>
	<head>
	<style>
	body {
	background-image: url('img7.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	}
	@media all and (min-width: 992px) {
	.navbar .nav-item .dropdown-menu{ display: none; }
	.navbar .nav-item:hover .nav-link{   }
	.navbar .nav-item:hover .dropdown-menu{ display: block; }
	.navbar .nav-item .dropdown-menu{ margin-top:0; }
    }
	</style>
		<link rel="stylesheet" media="screen" href="bootstrap.min.css">

			<title>Update Page</title>


			<nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <a class="navbar-brand" href="adminhome.php">
   						 <img src="carlogo.jpeg" width="60" height="40" alt="">
					</a>
						<li class="nav-item active">
							<a class="nav-link" href="customer_info.php">Customers <span class="sr-only">(current)</span></a>
						</li>
            <li class="nav-item active">
							<a class="nav-link" href="car_info.php">Cars <span class="sr-only">(current)</span></a>
						</li>

    	 <li class="nav-item dropdown">
		   <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Reports  </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="carcustomer.php"> Car & Customer Information </a></li>
			  <li><a class="dropdown-item" href="car.php"> Car Information </a></li>
			  <li><a class="dropdown-item" href="carstate.php"> Car Status </a></li>
			  <li><a class="dropdown-item" href="bycustomer.php"> Reservations Of Customer By Email </a></li>
			  <li><a class="dropdown-item" href="dailypayments.php"> Daily Payments </a></li>
		    </ul>
		</li>
						</li>
					<li class="nav-item dropdown">
		   <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Modifications  </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="add.php"> ADD CAR </a></li>
			  <li><a class="dropdown-item" href="delete.php"> Delete Car</a></li>
			 <li><a class="dropdown-item" href="update.php"> Update Car </a></li>
		    </ul>
		</li>
						<li class="nav-item active">
							<a class="nav-link" href="all_reservations.php">Reservations <span class="sr-only">(current)</span></a>
						</li>
											<li class="nav-item dropdown">
		   <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Advanced Search  </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="advancedcar.php"> By Car </a></li>
			  <li><a class="dropdown-item" href="delete.php"> By Customer</a></li>
			  <li><a class="dropdown-item" href="carstate.php"> By Reservation </a></li>
		    </ul>
		</li>

						<li class="nav-item">
							<a  class="nav-link" href="logout.php">Logout</a>
						</li>
      </ul>
    </div>
  </div>
</nav>
	</head>

	<body class="modal-body">
		<div>
			<form action="update.php" method="post">
				<br>
				<h2 style="color:white; text-align:center">UPDATE CAR</h2>
        <br>
<div  >
  <label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >Plate Number:</label>
  <input required style="width:25%;font-size:20;color:black;margin-left:20%"type='text' class="form-control" name='plate_number' id="plate_number"/>
<br>
  <div style="margin-left:38%">
  <input style="color:white;background-color:blue;font-size:20;" class="btn btn-primary btn-lg" herf="#" id=submit type="submit" name="search" value="Search"> <BR></BR>
  </div>
  <br>


  <table class="table">

  <thead class="light">
  <tr>
  <th scope="col">#</th>
  <th scope="col">Plate no.</th>
  <th scope="col">Brand</th>
  <th scope="col">Type</th>
  <th scope="col">Model</th>
  <th scope="col">Year</th>

  <th scope="col">Color</th>
  <th scope="col">Price</th>
  <th scope="col">Seats</th>
  <th scope="col">State</th>
  <th scope="col">Insurance</th>
  <th scope="col">img.</th>
  <th scope="col">Office ID</th>
  </tr>
  </thead>

  <?php
   include 'DB connection.php';
	if(isset($_POST['search'])){
  $plate_number=$_POST['plate_number'];
  $query="SELECT * FROM car WHERE plate_number='$plate_number' ";
  $index=0;
	$result = mysqli_query($connection,$query);
  		while ($row=mysqli_fetch_array($result))  { $index++?>

  <tbody class="opacity-50" style="background:white;">
  <tr>
  <th scope="row"><?php echo $index?></th>
      <td><?php echo $row['plate_number']?></td>
      <td><?php echo $row['brand']?></td>
      <td><?php echo $row['type']?></td>
      <td><?php echo $row['model']?></td>
      <td><?php echo $row['year']?></td>

      <td><?php echo $row['color']?></td>
			<td><?php echo $row['price']?></td>
			<td><?php echo $row['seats']?></td>
      <td><?php echo $row['state']?></td>
			<td><?php echo $row['insurance']?></td>
			<td><?php echo $row['image']?></td>
			<td><?php echo $row['office_id']?></td>
  </tr>
  <?php }} ?>

  </tbody>
  </table>

</BR>




<div >
<label style="font-size:130%;color:black;margin-top:7px">Color:</label>
	<input style="padding: 4px; width: 160px;margin-top:7px" type='text' class="form-control" name='color'  id="color">

	<label style="font-size:130%;color:black;margin-top:7px;margin-left: 20px" >Price/Day:</label>
	<input style="padding: 4px; width: 160px;margin-top:7px" type='number' class="form-control" name='price' id="price"/>

	<label style="font-size:130%;color:black;margin-top:7px;margin-left: 20px" >Insurance:</label>
	<input style="padding: 4px; width: 160px;margin-top:7px"type='number' class="form-control" name='insurance'id="insurance"/>

</div>

<div >


	<label style="font-size:130%;color:black;margin-top:12px">Image Path:</label>
	<input style="padding: 4px; width: 160px;margin-top:12px" type='text' class="form-control" name='img'id="img"/><br>

	<label style="font-size:130%;color:black;margin-top:12px;margin-left: 20px;" >Office ID</label>
	<input style="padding: 4px; width: 160px;margin-top:12px"type='text' name="office_id"class="form-control" id="office_id"/><br>

</div>


<div style="margin-right:80%">
<input style="color:white;background-color:blue;border: none;font-size:20;margin-right:30%" class="btn btn-primary btn-lg" herf="#" id=submit type="submit" name="modify" value="UPDATE"> <BR></BR>
</div>
</div>

</form>
</div>

<?php
if(isset($_POST['modify'])){
include 'DB connection.php';
$plate_number=$_POST['plate_number'];
$color=$_POST['color'];
$insurance=$_POST['insurance'];
$price=$_POST['price'];
$image=$_POST['img'];
$office_id=$_POST['office_id'];

if($color!=""){
  $sql = "UPDATE car SET color='$color' WHERE plate_number='$plate_number' ";
	$result = mysqli_query($connection,$sql);
  }

  if($insurance!=""){
    $sql = "UPDATE car SET insurance='$insurance'  WHERE plate_number='$plate_number' ";
    $result = mysqli_query($connection,$sql);
  }

  if($price!=""){
    $sql = "UPDATE car SET price='$price'  WHERE plate_number='$plate_number' ";
    $result = mysqli_query($connection,$sql);
  }

  if($image!=""){
    $sql = "UPDATE car SET `image`='$image'  WHERE plate_number='$plate_number' ";
    $result = mysqli_query($connection,$sql);
  }


  if($office_id!=""){
    $sql = "UPDATE car SET office_id='$office_id'  WHERE plate_number='$plate_number' ";
    $result = mysqli_query($connection,$sql);
  }
}
?>


</body>
</html>
