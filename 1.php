<!DOCTYPE html>
<html>
<head>
	<title>ex</title>
</head>
<body>
	<form action="experiment.php" method="POST">
		<input type="text" name="user_email" >
		<input type="submit" name="submit" value="submit">
	</form>
<?php
	if(isset($_POST['submit'])){
include 'setup.php';
$my_email = mysqli_real_escape_string($conn,$_POST['user_email']);
$qry="SELECT  from customer where email='$my_email'";
$result=mysqli_query($conn,$qry);
 $row=mysqli_fetch_assoc($result);
 $cap=$rows['cust_id'];
 echo $cap;

?>

</body>
</html>