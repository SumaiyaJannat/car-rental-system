<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<style>
	body{
		  background-image: url('https://media-cldnry.s-nbcnews.com/image/upload/t_fit-1240w,f_auto,q_auto:best/newscms/2019_13/2798361/190325-rental-cars-cs-229p.jpg');
	background-size:cover;display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #282828;
    color: #d0d0d0;
	}


	.box {

    background-color:lightgrey;
    display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;
    width: 400px;
    height: 400px;
    box-shadow: 5px 8px 5px rgba(0, 0, 0, 0.3);
}
.content {
	font-color:black;
    text-align: center;
}
</style>

<body>
		

	
		<div class="wrapper">
			
				<form method="post">
					        <div class="box bg-img">
                              <div class="content">
                              	<h3 style="text-align:center; color: black;font-size: 35px; font-weight:bold;padding-top: 10px;">Signup</h3><br>
					<table>
						<tr>
							<td style="color:black">Full Name:</td>
							<td><input type="text" name="fname" required></td>
						</tr>
						<tr>
							<td style="color:black">Phone Number:</td>
							<td><input type="text" name="phone" required></td>
						</tr>
						<tr>
							<td style="color:black">Email Address:</td>
							<td><input type="email" name="email" required></td>
						</tr>
						<tr>
							<td style="color:black">ID Number:</td>
							<td><input type="text" name="id_no" required></td>
						</tr>
						<tr>
							<td style="color:black">Gender:</td>
							<td>
								<select name="gender">
									<option> Select Gender </option>
									<option> Male </option>
									<option> Female </option>
								</select>
							</td>
						</tr>
						<tr>
							<td style="color:black">Location:</td>
							<td><input type="text" name="location" required></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right;" ><input type="submit" name="save" value="Submit Details"></td>
						</tr>
					</table>
				</div>
			</div>
				</form>
				<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$id_no = $_POST['id_no'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];
							
							$qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,status)
							VALUES('$fname','$id_no','$gender','$email','$phone','$location','Available')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered.\");
											window.location = (\"cilent_login.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"signup.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
		</div>
	