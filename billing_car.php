<!DOCTYPE html>
<html>
<?php
session_start();
if(!$_SESSION['user_email']){
	header("location: home.php");
}
$_SESSION['user_email'];
?>
<head> 
	<title>CAR BILLING</title>
</head>
<body>
	<table align="center">
		<tr>
			<td>YOUR BILL</td>
		</tr>
		<tr>
			<th>S No.</th>
			<th>Customer Name</th>
			<th>Issue Date</th>
			<th>Return Date</th>
			<th>AMOUNT</th>
			<th>LATE fees</th>
		</tr>
		<?php
          include 'setup.php';
          $my_email=$_SESSION['user_email'];
          $qry="SELECT * FROM car_billing WHERE email='$my_email'";
          $run=mysqli_query($conn,$qry);
          while($row=mysqli_fetch_array($run)){
          	$date2=$row['return_date_car'];
          	$date1=$row['from_date_car'];
          	$late=$row['late_fees_car'];
          	$name=$row['customer_name'];
          }
          $qry3="SELECT * FROM car_issue WHERE email='$my_email'";
    $run3=mysqli_query($conn,$run3);
    while($row3=mysqli_fetch_array($run3)){
      $bike=$row3['car_type'];
    }
    $qry4="SELECT * FROM car_table WHERE car_type='$bike'";
    $run4=mysqli_query($conn,$qry4);
    while($row4=mysqli_fetch_array('$run4')){
      $rent=$row4['rent_amount_car'];
  }
          $amount="$date*$rent + $late*10";
		  $current_date=strtotime("$date2");
          $old_date=strtotime("$date1");
          $diff=$current_date - $old_date;
          $date=round($diff/86400);

		?>
		<tr>
			<th>1</th>
			<th><?php echo $name; ?></th>
			<th><?php echo $date1;?></th>
			<th><?php echo $date2; ?></th>
			<th><?php echo $amount;?></th>
			<th><?php echo $late."*10"; ?></th>
			
		</tr>
		<nav>
			<ul>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>

</body>
</html>