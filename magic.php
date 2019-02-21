<!DOCTYPE html>
<html>
<head>
	<title>exper</title>
</head>
<body>
<form action="magic.php" method="POST">
	<input type="date" name="date1">
	<input type="date" name="date2">
	<input type="submit" name="submit" value="enter">
</form>
<?php
if(isset($_POST['submit'])){
	$date1=$_POST['date1'];
	$date2=$_POST['date2'];
	$current_date=strtotime("$date2");
	$old_date=strtotime("$date1");
	$diff=$current_date - $old_date;
	$date=round($diff/86400);
	echo $date;
	

}
?>
</body>
</html>