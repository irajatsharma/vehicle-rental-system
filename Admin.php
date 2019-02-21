<!DOCTYPE html>
<html>
<?php
session_start();
$_SESSION['user_email'];
?>
<head>
    <title>Vehicle Rental-Admin</title>
    <link rel="stylesheet" type="text/css" href="CSS/project.css">
    <link rel="stylesheet" type="text/css" href="CSS/makeup.css">
</head>
<body>
    <header id="main-header">
                <div class="c1">
                      <h1> Vehicle Rental System-Admin Portal</h1>
                </div>
    </header>
    <nav id="navbar">
            <div class="c2">
                <ul>
                    <li><a href="admin_update.php">Update</a></li>
                    <li>ADD
                        <ul>
                            <li><a href="admin_add_car.php">ADD Car</a></li>
                            <li><a href="admin_add_bike.php">ADD Bike</a></li>
                        </ul></li>
                    <li>Delete<ul>
                        <li><a href="admin_delete_car.php">Delete car</a></li>
                        <li><a href="admin_delete_bike.php">Delete bike</a></li>
                    </ul></li>
                    <li><a href="view-customer.php">View Customer</a></li>
                    <li><a href="logout.php">logout</a></li>
                   </ul>
               </div>
           </nav>
       </body>
       </html>
    