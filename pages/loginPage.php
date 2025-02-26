<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Luntian | Sign In</title>
		<link rel="stylesheet" type="text/css" href="loginPage.css"> 
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="left-container">
                <h1>Committed To Your Growth</h1>
            </div>
            <div class="form-container sign-in">
                <form action="" method="POST">
                    <img src="../icons/LuntianLogo.png" class="logo" alt="Luntian Logo">
	                <div class="username">
	                  <i class="fa-solid fa-user user"></i>
	                  <input type="text" name="txt_userEmail" id="txt_userEmail" placeholder="Phone/Username/Email" required>
	                </div>
	                <div class="password">
					  <i class="fa-solid fa-lock lock"></i>
					  <input type="password" name="ps_pWord" id="ps_pWord" placeholder="Password" required>
					
					</div>
                     <input type="submit" name="btn_signIn" id="btn_signIn" value="Log In">
                 	 <p class="forgotPass"><a href="#">Forgot Password?</a></p>
                 	 <hr class="line">
                     <h5>Don't have an account? <a href="regPage.php">Sign Up</a></h5>
                </form>
            </div>
		</div>
	</body>
</html>
<?php
	include("connection.php");
	
	session_start();

	if (isset($_POST['btn_signIn'])) {

		$usr = $_POST['txt_userEmail'];
		$psw = $_POST['ps_pWord'];

		$sql = "SELECT * FROM `tbl_registration` WHERE (`Username` = '".$usr."' OR `Email` = '".$usr."') AND `Password` = '".$psw."'";

		$res = $con->query($sql);

		if ($res->num_rows>0) {
			if ($row = $res->fetch_assoc()) {
				$_SESSION['loggedin'] = true;
				$_SESSION['ID'] = $row['RegID'];
				Print '<script>alert("Welcome, '.$row['Username'].'!")</script>';
				Print '<script>window.location.assign("homepage.php?id='.$row['RegID'].'")</script>';
			}
		} else {
		Print '<script>alert("User not found!")</script>';
		}
	}

?>
