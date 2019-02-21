<!DOCTYPE html>
<html>
<head>
	<title>Vehicle Rental System</title>
	<link rel="stylesheet" type="text/css" href="CSS/project.css">
    <link rel="stylesheet" type="text/css" href="CSS/makeup.css">
</head>
<body>
      <header id="main-head">
      	<div class="header">
      		<h1>Vehicle Rental System</h1>
      	</div>
      </header>
       <div id="container">
    		    <div id="sliderbox">
    			     <img src="IMAGES/1.jpg">
    			     <img src="IMAGES/2.jpg">
    			     <img src="IMAGES/3.jpg">
    			     <img src="IMAGES/4.jpg">
    		    </div>
        </div>
        <nav id="navbar">
    		<div class="c2">
    			<ul>
    				<li>Home</li>
    				<li><a href="register.php">Register</a></li>
    				<li><a href="#modal1">Login</a></li>
    				<li><a href="#modal">about us</li>
    			</ul>
    		</div>
    	</nav>
    	 <div class="modal" id="modal">
              <div class="modal__content">
                  <a href="#" class="modal__close">&times;</a>
                            <h2 class="modal__heading">Vehicle Rental System</h2>
                            <p class="modal__paragraph">                            </p>
                </div>
         </div>
          <div class="modal1" id="modal1">
              <div class="modal__content1">
                  <a href="#" class="modal__close1">&times;</a>
                            <h2 class="modal__heading1">Vehicle Rental System</h2>
                            <form action="home.php" method="post">
                            	<table align="center" bgcolor="white" width="500">
                            		<tr align="center">
                            			<td colspan="6">
                            				<h2>Login here</h2>
                            			</td>
                            		</tr>
                            		<tr>
                            		    <td align="right"><strong>Email:</strong></td>
                            		    <td>
                            		   	     <input type="text" name="user_email" placeholder="Enter your email" required="required">
                                        </td>
                            		</tr>
                            		<tr>
                            		    <td align="right"><strong>Password:</strong></td>
                            		    <td>
                            		   	     <input type="Password" name="user_pass" placeholder="Enter your Password" required="required">
                                        </td>
                            		</tr>
                            		<tr>
                            		    <td align="center">
                            		    <td>
                            		   	     <input type="submit" name="login" value="login">
                                        </td>
                            		</tr>
                                </table>
                            </form>
                            <h3 align="center">New User?<a href="register.php">Register here</a>
                            <p class="modal__paragraph1"> login issue @conatct administrator
                                your system is very is handy in dealing with the issues faced by the customer our priority is customer
                            </p>
                </div>
         </div>
         <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <section id="showcase">
            <div class="c1">
                   <h1>About Vehicle Rental System</h1>
                     <p>Car Rental Broker Management System CRBMS is a web-based car reservation system, capable of handling all business aspects a Car Hire Broker can imagine. The system is individually configurable in accordance with the wishes and business requirements of Car Rental Broker. It meets the specifications of OTA (OpenTravel Alliance) and ACRISS (Association of Car Rental Industry Systems Standards). Compliance with the standards allows for its flexible interconnection to any third party systems.

                    </p> 
        </div>
        </section>
        <section id="showcase2">
            <div class="c1">
                <h1> Awareness </h1>
                 <p>The role of the driver is key in delivering improved road safety. Even the most advanced safety technologies will not offer protection if they are not applied properly. The simple fact is that drivers need to take responsibility for good tire maintenance. This includes checking them on a regular basis to ensure optimal tire pressure and compliance with legal minimum tread depths. It also means choosing the correct tires for the season and weather conditions.                                                                          

                At Goodyear EMEA* we have made it our mission to not only continuously improve the performance of our tires, but also to raise awareness among consumers of the role that they have to play in improving road safety. 
                 </p>
            </div>
        </section>
         <?php
         if(isset($_POST['login'])){
          include 'setup.php';
         	$user_email=mysqli_real_escape_string($conn,$_POST['user_email']);
         	$user_pass=mysqli_real_escape_string($conn,$_POST['user_pass']);
            
             $sql = "SELECT * FROM admin WHERE uname = '$user_email' AND pass = '$user_pass'";
             $result = mysqli_query($conn, $sql);
              $num = mysqli_num_rows($result);
                 while($row=mysqli_fetch_array($result)){
                    $new=$row['uname'];
                 }
                 if($new==$user_email){
                       echo "<script type = \"text/javascript\">
                         alert(\"Login Successful...\");
                         window.location = (\"admin.php\")
                           </script>";
                    }  
            else
            {
         	$sel="SELECT * FROM customer where email='$user_email' AND password='$user_pass'";

         	$run=mysqli_query($conn,$sel);

         	$check =mysqli_num_rows($run);

            if($check == 0){
            	echo "<script>alert('Password or Email Incorrect')</script>";
            	exit();

            }
            else
            {
              session_start();
            	$_SESSION['user_email']=$user_email;
            	echo "<script type = \"text/javascript\">
                         alert(\"Login Successful...\");
                         window.location = (\"customer.php\")
                           </script>";
            }
        }
        mysqli_close($conn);
                    }
         ?>
</body>
<footer>
	
</footer>
</html>