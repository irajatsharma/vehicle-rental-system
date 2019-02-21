<!DOCTYPE html>
<html>
<head>
    <title>Vehicle Rental-Admin</title>
    <link rel="stylesheet" type="text/css" href="CSS/makeup.css">
    <link rel="stylesheet" type="text/css" href="CSS/project.css">
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
                    <li><ul>
                        <li><a href="admin_delete_car.php">Delete car</a></li>
                        <li><a href="admin_delete_bike.php">Delete bike</a></li>
                    </ul></li>
                    <li><a href="view-customer.php">View Customer</a></li>
                    <li><a href="logout.php">logout</a></li>
                   </ul>
               </div>
           </nav>
           <section>
             <table align="center">
               <tr><td><strong>View Customer</strong></td></tr>
               <tr>
                 <th>S No.</th>
                 <th>First Name</th>
                 <th>last name</th>
                 <th>DOB</th>
                 <th>Address</th>
                 <th>State</th>
                 <th>City</th>
                 <th>phone number</th>
                 <th>DL_no</th>
                 <th>registration date</th>
                 <th>email</th>
               </tr>
               <?php
               include 'setup.php';
               $qry="SELECT * FROM customer";
               $run=mysqli_query($conn,$qry);
               $i=0;
               while($row=mysqli_fetch_array($run)){
                $first=$row['first_name'];
                $last=$row['last_name'];
                $dob=$row['DOB'];
                $add=$row['address'];
                $st=$row['State'];
                $city=$row['city'];
                $num=$row['phone_num'];
                $li=$row['DL_no'];
                $re=$row['registration_date'];
                $ee=$row['email'];
                $i++;
               
               ?>
               <tr>
                 <td> <?php echo $i?></td>
                 <td><?php echo $first?></td>
                 <td><?php echo $last ?></td>
                 <td><?php echo $dob?></td>
                 <td><?php echo $add?></td>
                 <td><?php echo $st?></td>
                 <td><?php echo $city?></td>
                 <td><?php echo $num?></td>
                 <td><?php echo $li?></td>
                 <td><?php echo $re?></td>
                 <td><?php echo $ee?></td>

               </tr>
             <?php } ?>
             </table>
           </section>
       </body>
       </html>
    