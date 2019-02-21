<!DOCTYPE html>
<html>
<?php
        session_start();
        $_SESSION['user_email'];
?>
<head>
	<title>Customer Panel</title>
	<link rel="stylesheet" type="text/css" href="CSS/project.css">
</head>
<body>
		<header id="main-header">
    		    <div class="c1">
    		          <h1> Vehicle Rental System</h1>
    	        </div>
         </header>
         <nav id="navbar">
    		<div class="c2">
    			<ul>
    				<li><a href="#">Hire</a></li>
    				<li><a href="return_car.php">Return Car</a></li>
    				<li><a href="update-customer.php">Update</a></li>
    				<li><a href="logout.php">Logout</a></li>
    			</ul>
        </div>
      </nav>
      <br>
      <br>
      <br>
      <section>
          <div>
          <form method="POST">
      <table align="center">
        <td align="right"><strong>Return_date</strong></td>
          <td><input type="date" name="re_date"></td>
        </tr>
                <tr>
          <td align="right"><input type="submit" name="enter" value="Return"></td>
        </tr>
      </table>
    </form>
  </div>
</section>

<?php
if(isset($_POST['enter'])){
  include 'setup.php';
   $return_date=$_POST['re_date'];
   $my_email=$_SESSION['user_email'];
    $qry1="SELECT * FROM bike_issue WHERE email='$my_email'";
    $run1=mysqli_query($conn,$qry1);
    while($row1=mysqli_fetch_array($run1)){
    $date2=$row1['to_date'];
    $date1=$row['from_date'];
    }
    $qry="SELECT * customer WHERE email='$my_email'";
    $run=mysqli_query($conn,$qry);
    while($row2=mysqli_fetch_array($run)){
      $customer_name=$row2['first_name'];
    }
    $qry3="SELECT * bike_type WHERE email='$my_email'";
    $run3=mysqli_query($conn,$run3);
    while($row3=mysqli_fetch_array($run3)){
      $bike=$row3['bike_type'];
    }
    $qry4="SELECT * FROM bike_table WHERE bike_type='$bike'";
    $run4=mysqli_query($conn,$qry4);
    while($row4=mysqli_fetch_array('$run4')){
      $rent=$row4['rent_amount'];
      $update=$row4['available'];
    }
    $current_date=strtotime("$date2");
    $old_date=strtotime("$date1");
    $diff=$current_date - $old_date;
    $date=round($diff/86400);
    $reff=strtotime("$return_date");
    $newdiff=$reff - $old_date;
    $newday=round($newdiff/86400);
    $qry5="UPDATE customer SET b_status='0' WHERE email='$my_email'";
    $run5=mysql_query($conn,$qry5);
    $fresh= ++$update;
    $qry6="UPDATE bike_table SET available='$fresh' WHERE bike_type='$bike'";
    $run6=mysqli_query($conn,$qry6);
    if($newday > $date){
      $tax=$newday - $date;

      $qry2= "INSERT INTO bike_billing(customer_name_bike,from_date_bike,to_date_bike,email,late_fees) VALUES ('$customer_name','$date1','$return_date','$my_email','$tax')";
      $run2=mysqli_query($conn,$qry2);
      session_start();
              $_SESSION['user_email']=$my_email;
      echo "<script type = \"text/javascript\">
                         alert(\"Couldnt Hire...\");
                         window.location = (\"billing.php\")
                           </script>";
    }
    else
    {  $tax="0";
      $qry2= "INSERT INTO bike_billing(customer_name_bike,from_date_bike,to_date_bike,email,late_fees) VALUES ('$customer_name','$date1','$return_date','$my_email','$tax')";
      $run2=mysqli_query($conn,$qry2);
      session_start();
              $_SESSION['user_email']=$my_email;
      echo "<script type = \"text/javascript\">
                         alert(\"Couldnt Hire...\");
                         window.location = (\"billing.php\")
                           </script>";
    }
}
?>
</body>   
</html>

 