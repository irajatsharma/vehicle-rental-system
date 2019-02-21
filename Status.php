<!DOCTYPE html>
<html>
<head>
	<title>Status</title>
	<link rel="stylesheet" type="text/css" href="CSS/project.css">
    <link rel="stylesheet" type="text/css" href="CSS/makeup.css">
</head>
<body>
	<header id="main-head">
      	<div class="header">
      		<h1>Vehicle Rental System</h1>
      	</div>
      </header>
      <nav id="navbar">
    		<div class="c2">
    			<ul>
    				<li>Home</li>
    				<li><a href="register.php">Register</a></li>
    				<li><a href="Status.php">Status</li>
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
        

</body>
</html>