<!DOCTYPE html>
<html>
<head>
	<title>Registration Panel</title>
	<link rel="stylesheet" type="text/css" href="CSS/project.css">
</head>
<body>
	<header class="registration_header">Registration Panel</header>
	<div class="head_register">
		<form method="POST">
			<table align="center">
				<tr>
					<h2 align="center">New User? Register here</h2>
				</tr>
				<tr>
					<td align="right"><strong>First Name:</strong></td>
					<td><input type="text" name="user_first_name" placeholder="Enter your First name" required="required"></td>
				</tr>
				<tr>
					<td align="right"><strong>Last Name:</strong></td>
					<td><input type="text" name="user_last_name" placeholder="Enter your Last name" required="required"></td>
				</tr>
				<tr>
					<td align="right"><strong>Date Of Birth:</strong></td>
					<td><input type="Date" name="user_dob" required="required"></td>
				</tr>
				<tr>
					<td align="right"><strong>Address:</strong></td>
					<td><textarea name="user_address" cols="30" row="5" ></textarea></td>
				</tr>
				<tr>
					<td align="right"><strong>State:</strong></td>
					<td>   
						<select name="user_state" >
						     <option>Select Your State Or Union Territory</option>
						     <option>Andhra Pradesh</option>
						     <option>Arunachal Pradesh</option>
						     <option>Assam</option>
						     <option>Bihar</option>
						     <option>Chhattisgarh</option>
						     <option>Goa</option>
						     <option>Gujurat</option>
						     <option>Haryana</option>
						     <option>Himachal Pradesh</option>
						     <option>Jammu & Kashmir</option>
						     <option>Jharkhand</option>
						     <option>Karnataka</option>
						     <option>Kerala</option>
						     <option>Madhya Pradesh</option>
						     <option>Maharashtra</option>
						     <option>Manipur</option>
						     <option>Meghalaya</option>
						     <option>Mizoram</option>
						     <option>Nagaland</option>
						     <option>Odisha</option>
						     <option>Punjab</option>
						     <option>Rajasthan</option>
						     <option>Sikkim</option>
						     <option>Tamil Nadu</option>
						     <option>Telangana</option>
						     <option>Tripura</option>
						     <option>Uttar Pradesh</option>
						     <option>Uttrakhand</option>
						     <option>West Bengal</option>
						     <option>----------------</option>
						     <option>Andaman and nicobar islands</option>
						     <option>Chandigrah</option>
						     <option>Dadar and Nagar Haveli</option>
						     <option>Daman and Diu</option>
						     <option>Delhi</option>
						     <option>Lakshadweep</option>
						     <option>Puducherry(Pondicherry)</option>
					    </select>
					</td>
				</tr>
				<tr>
					<td align="right"><strong>city:</strong></td>
					<td><input type="text" name="user_city" placeholder="Enter your City" required="required"></td>
				</tr>
				<tr>
					<td align="right"><strong>Phone Number:</strong></td>
					<td><input type="text" name="user_no" placeholder="Enter your Phone Number" required="required"></td>
				</tr>
				<tr>
					<td align="right"><strong>Password:</strong></td>
					<td><input type="Password" name="user_pass" placeholder="Enter your Password" required="required"></td>
				</tr>
				<tr>
					<td align="right"><strong>Email:</strong></td>
					<td><input type="Email" name="user_email" placeholder="Enter your Email" required="required"></td>
				</tr>
				<tr>
					<td align="right"><strong>Driving license number:</strong></td>
					<td><input type="text" name="user_lic" placeholder="Enter your Driving license Number" required="required"></td>
				</tr>
				<tr>
					<td align="right"><strong>Driving license:</strong></td>
					<td><input type="file" name="user_image" ></td>
				</tr>
				<tr>
					<td align="right"><input type="submit" name="register" value="Register"></td>
				</tr>
			</table>
			 <?php
                 

	                 if(isset($_POST['register'])){

	                 	include 'setup.php';
	               	$user_first_name=mysqli_real_escape_string($conn,$_POST['user_first_name']);
	            	$user_last_name=mysqli_real_escape_string($conn,$_POST['user_last_name']);
	            	$user_dob=mysqli_real_escape_string($conn,$_POST['user_dob']);
	            	$user_address=mysqli_real_escape_string($conn,$_POST['user_address']);
	            	$user_state=mysqli_real_escape_string($conn,$_POST['user_state']);
	            	$user_city=mysqli_real_escape_string($conn,$_POST['user_city']);
	            	$user_no=mysqli_real_escape_string($conn,$_POST['user_no']);
	            	$user_pass=mysqli_real_escape_string($conn,$_POST['user_pass']);
	            	$user_email=mysqli_real_escape_string($conn,$_POST['user_email']);
	            	$user_lic=mysqli_real_escape_string($conn,$_POST['user_lic']);
	            	$status=0;
	     	
	            	#$user_image=$_FILES['user_image']['name'];
	            	#$user_tmp=$_FILES['user_image']['tmp_name'];

	                if($user_address=='' OR $user_state==''){
	     	          	echo "<script>alert('please fill the details')</script>";
	     		        exit();
	     	            }
	     	            if(!filter_var($user_email,FILTER_VALIDATE_EMAIL)){
	     		         echo "<script>alert('Your Emails is not valid')</script>";
	     	              exit();
	     	             }
	     	               if(strlen($user_pass)<8){
	     		           echo "<script>alert('Please have a Password more than 8 characters')</script>";
	     	               exit();
	     	              }
	     	              $select_email="select * from customer where email='$user_email'";
	                    	$run_email=mysqli_query($conn,$select_email);
	                    	$check_email=mysqli_num_rows($run_email);
	                     	if($check_email==1){
	     	            	echo "<script>alert('User or email already registered')</script>";
	     	            	 	exit();
	                    	}
	     	               else
	     		          #move_uploaded_file($user_tmp,'DL/$user_image'); 
	     		          $insert = "INSERT INTO customer (first_name,last_name,DOB,address,State,city,phone_num,password,email,DL_no,b_status,registration_date) VALUES ('$user_first_name','$user_last_name','$user_dob','$user_address','$user_state','$user_city','$user_no','$user_pass','$user_email','$user_lic','0',NOW())";
	     	             $run_insert=mysqli_query($conn,$insert);
                         if($run_insert){
	     	    	
	     	            	echo "<script>alert('Successful Registration')</script>";
	     	            	echo "<script>windows.open('home.php','_self')";
	     	             }
           
                         mysqli_close($conn);
	                  }
	         ?>
		</form>
		<h3 align="center">Already Registered?<a href="home.php">Login here</a></h3>
	</div>
	


</body>
</html>