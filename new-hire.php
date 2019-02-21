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
    				<li><a href="hire_car.php">Hire Car</a></li>
    				<li><a href="return.php">Return</a></li>
    				<li><a href="update-customer.php">Update</a></li>
    				<li><a href="logout.php">Logout</a></li>
    			</ul>
        </div>
      </nav>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <section>
          <div>
          <form method="POST">
      <table align="left">
        <tr>
          <td align="right"><strong>Bike Type</strong><select name="bike_type" >
            <option>Select a bike type</option>
            <option>Simple</option>
            <option>Sports</option>
            <option>Heavy duty</option>
            <option>Scooty</option>
          </select>
        </td>
        </tr>
        <tr>
          <td align="right"><strong>From date</strong></td>
          <td><input type="date" name="from_date"></td>
        </tr>
        <tr>
          <td align="right"><strong>To date</strong></td>
          <td><input type="date" name="to_date"></td>
        </tr>
        <tr>
          <td align="right"><input type="submit" name="enter" value="Hire"></td>
        </tr>
      </table>
    </form>
  </div>
</section>

<?php
if(isset($_POST['enter'])){
                              include 'setup.php';
                              $data=$_POST['bike_type'];
                              $from_date=$_POST['from_date'];
                              $to_date=$_POST['to_date'];
                              $my_email=$_SESSION['user_email'];
                              $option1="Simple";
                              $option2="Sports";
                              $option3="Heavy duty";
                              $option4="Scooty";
                              $qry1="SELECT * FROM bike_table WHERE bike_type='$data'";
                              $run1=mysqli_query($conn,$qry1);
                              while ($rows = mysqli_fetch_array($run1))
                              {
                              $selection=$rows["available"];
                              $updo=$rows["available"];
                              }
                              $qry2="SELECT * FROM customer WHERE email='$my_email'";
                              $run2=mysqli_query($conn,$qry2);
                              while ($rows1 = mysqli_fetch_array($run2)){
                                $status=$rows2["b_status"];
                              }
  if(($data==$option1) AND ($status==0))
  { 
    if($selection!=0){
    $qry="INSERT INTO bike_issue(bike_type,email,from_date,to_date) VALUES ('$data','$my_email','$from_date','$to_date')";
  $run=mysqli_query($conn,$qry);
  if($run)
  { 
    $new= --$updo;
    $qry3="UPDATE bike_table SET available='$new' WHERE bike_type='$data'";
  $run3=mysqli_query($conn,$qry3);
    session_start();
              $_SESSION['user_email']=$my_email;
    echo "<script type = \"text/javascript\">
                         alert(\"Hire Successfull...\");
                         window.location = (\"customer.php\")
                           </script>";
  
  }
  else{session_start();
              $_SESSION['user_email']=$my_email;
    echo "<script type = \"text/javascript\">
                         alert(\"Couldnt Hire...\");
                         window.location = (\"customer.php\")
                           </script>";
}
}}
  else if($data==$option2 AND ($status==0))
  {
    if($selection!=0){
          $qry="INSERT INTO bike_issue(bike_type,email,from_date,to_date) VALUES ('$data','$my_email','$from_date','$to_date')";
  $run=mysqli_query($conn,$qry);
  if($run)
  {
    $new= --$updo;
    $qry3="UPDATE bike_table SET available='$new' WHERE bike_type='$data'";
  $run3=mysqli_query($conn,$qry3);
    session_start();
              $_SESSION['user_email']=$my_email;
    echo "<script type = \"text/javascript\">
                         alert(\"Hire Successfull...\");
                         window.location = (\"customer.php\")
                           </script>";
  }
  else{session_start();
              $_SESSION['user_email']=$my_email;
    echo "<script type = \"text/javascript\">
                         alert(\"Couldnt Hire...\");
                         window.location = (\"customer.php\")
                           </script>";
}
  }}
  else if($data==$option3 AND ($status==0))
  {
    if($selection!=0){
     $qry="INSERT INTO bike_issue(bike_type,email,from_date,to_date) VALUES ('$data','$my_email','$from_date','$to_date')";
    }
  $run=mysqli_query($conn,$qry);
  if($run)
  { $new= --$updo;
    $qry3="UPDATE bike_table SET available='$new' WHERE bike_type='$data'";
  $run3=mysqli_query($conn,$qry3);
    session_start();
              $_SESSION['user_email']=$my_email;
    echo "<script type = \"text/javascript\">
                         alert(\"Hire Successfull...\");
                         window.location = (\"customer.php\")
                           </script>";
  }
  else{session_start();
              $_SESSION['user_email']=$my_email;
    echo "<script type = \"text/javascript\">
                         alert(\"Couldnt Hire...\");
                         window.location = (\"customer.php\")
                           </script>";
}
}
  else if($data==$option4 AND ($status==0))
  { if(($selection!=0)){
     $qry="INSERT INTO bike_issue(bike_type,email,from_date,to_date) VALUES ('$data','$my_email','$from_date','$to_date')";
  $run=mysqli_query($conn,$qry);
  if($run)
  { $new= --$updo;
    $qry3="UPDATE bike_table SET available='$new' WHERE bike_type='$data'";
  $run3=mysqli_query($conn,$qry3);
    session_start();
              $_SESSION['user_email']=$my_email;
    echo "<script type = \"text/javascript\">
                         alert(\"Hire Successfull...\");
                         window.location = (\"customer.php\")
                           </script>";
  }}
  else{session_start();
              $_SESSION['user_email']=$my_email;
    echo "<script type = \"text/javascript\">
                         alert(\"Couldnt Hire...\");
                         window.location = (\"customer.php\")
                           </script>";
}
  } 
  else{
    session_start();
              $_SESSION['user_email']=$my_email;
    echo "<script type = \"text/javascript\">
                         alert(\"Couldnt Hire...\");
                         window.location = (\"customer.php\")
                           </script>";
  }
}
?>
</body>   
</html>