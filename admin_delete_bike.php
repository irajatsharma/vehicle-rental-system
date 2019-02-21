<!DOCTYPE html>
<html>
<?php
$_SESSION['user_email'];
?>
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
                    <li><a href="view-customer.php">View Customer.php</a></li>
                    <li><a href="logout.php">logout.php</a></li>
                   </ul>
               </div>
           </nav>
           <section>
             <form method="POST"><table align="left">
        <tr>
            <td align="right"><strong>car Type</strong><select name="bike_type" >
            <option>Select a CAR type</option>
            <option>Simple</option>
            <option>Sports</option>
            <option>Heavy duty</option>
            <option>Scooty</option>
          </select>
        </td>
        </tr>
         <tr>
           <td align="right"><strong>Quantity</strong></td>
           <td><input type="text" name="Quantity" placeholder="enter the value" required="required"></td>
         </tr>
         <tr>
           <td><input type="submit" name="enter" value="enter"></td>
         </tr>
      </form>
           </section>
           <?php
           if(isset($_POST['enter'])){ 
            include 'setup.php';
            $admin=$_SESSION['user_email'];
            $data=$_POST['bike_type'];
            $value=$_POST['Quantity'];
            $qry="SELECT * FROM bike_table WHERE bike_type='$data'";
            $run=mysqli_query($conn,$qry);
            while($row=mysqli_fetch_array($run)){
              $base=$row['available'];
            }
           $new= $base - $new;
           if($new>0){
           $qry1="UPDATE bike_table SET available='$new' WHERE bike_type='$data'";
           $run2=mysqli_query($conn,$qry1);
           if($run2){
             session_start();
              $_SESSION['user_email']=$admin;
                        echo "<script type = \"text/javascript\">
                         alert(\"update Successfull...\");
                         window.location = (\"admin.php\")
                           </script>";

           }
         }}
           ?>
       </body>
       </html>
    