<!DOCTYPE html>
<html>
<head>
	<title>hey</title>
</head>
<body>
	<?php
	include 'setup.php';
	$data="simple";
	$updo="3";
	$qry3="UPDATE bike_table SET available='$updo' WHERE bike_type='$data'";
	$run3=mysqli_query($conn,$qry3);
	if($run3){
		echo "successful";
	}
	else
	{
		echo "unsuccess";
	}
$new = --$updo;
echo $new;
	?>

</body>
</html>