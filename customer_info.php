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

			<title>Customer Page</title>


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
			<form action="customer_info.php" method="post">
				<br><br><br>
				<h2 style="color:white; text-align:center">Customers</h2><br>


        <table class="table table-hover table-light">
  <thead class="thead-dark">
    <tr>
      		<th scope="col">#</th>
      		<th scope="col">customer_id</th>
     		<th scope="col">SSN</th>
      		<th scope="col">fname</th>
			<th scope="col">Lname</th>
			<th scope="col">phone</th>
			<th scope="col">email</th>
			<th scope="col">reg_date</th>
			<th scope="col">sex</th>
			<th scope="col">birth_date</th>
			<th scope="col">address</th>
    </tr>
  </thead>
  <?php
    include 'DB connection.php';
	$query="SELECT * FROM customer ORDER BY reg_date";
	$result = mysqli_query($connection,$query);
	$index=0;

	while ($row=mysqli_fetch_array($result)) {       $index=$index+1;
		?>

  <tbody class="opacity-50" style="background:white;">
    <tr>
     		<th scope="row"><?php echo $index ?></th>
      		<td><?php echo $row['customer_id']?></td>
      		<td><?php echo $row['SSN']?></td>
      		<td><?php echo $row['fname']?></td>
			<td><?php echo $row['lname']?></td>
			<td><?php echo $row['phone']?></td>
			<td><?php echo $row['email']?></td>
			<td><?php echo $row['reg_date']?></td>
			<td><?php echo $row['sex']?></td>
     		<td><?php echo $row['birth_date']?></td>
			<td><?php echo $row['address']?></td>
    </tr>
	<?php } ?>
  </tbody>
</table>
			</form>
		</div>
	</body>
</html>
