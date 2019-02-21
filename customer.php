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
    				<li>Hire
    					<ul><li><a href="new-hire.php">Hire bike</a></li>
                             <li><a href="hire_car.php">Hire Car</a></li>
    					</ul>
    				</li>
    				<li><a href="return.php">Return</a></li>
    				<li><a href="customer-update.php">Update</a></li>
    				<li><a href="logout.php">Logout</a></li>
    			</ul>
    		</div>
    	</nav>
    	
</body>
</html>