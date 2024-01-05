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
		<div id="fom">
			    <form method="POST">
        <div class="box bg-img">
            <div class="content">
            	<h3 style="text-align:center; color: black;font-size: 35px; font-weight:bold;padding-top: 10px;">Client Login </h3><br>
				<table height="100" align="center" >
					<tr>
						<td style="color:black">Email Address:</td>
						<td><input type="email" name="email" placeholder="Enter Email Address" required></td>
					</tr>
					<tr>
						<td style="color: black">Password:</td>
						<td><input type="password" name="pass" placeholder="Enter ID Number" required></td>
					</tr>
					<tr>
						<td><input type="submit" name="log" value="Login Here"></td>
						<td style="text-align:right;"><a href="signup.php">Sigup Here</a></td>
					</tr>
				</table>
                        
                   
    </form>

		</div>
	</div>
			<?php
				if(isset($_POST['log'])){
					include 'includes/config.php';
					
					$uname = $_POST['email'];
					$pass = $_POST['pass'];
					
					$qy = "SELECT * FROM client WHERE email = '$uname' AND id_no = '$pass'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['email'] = $row['email'];
						$_SESSION['pass'] = $row['id_no'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.................\");
									window.location = (\"dashboard.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"cilent_.php\")
									</script>";
					}
				}
			?>
			</div>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>



	