<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Luntian | Sign Up</title>
		<link rel="icon" type="image/png" href="../images/tablogo.png">
		<link rel="stylesheet" type="text/css" href="regPage.css"> 
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="left-container">
                <h1>Committed To Your Growth</h1>
            </div>
            <div class="form-container sign-up">
            	<h1 class="S_Up">Sign Up</h1>
                <form action="" method="POST">
                	
	                <div class="username">
	                  <i class="fa-solid fa-user user"></i>
	                  <input type="text" name="txt_username" id="txt_username" placeholder="Username" required>
	                </div>
	     
	                <div class="email">
	                  <i class="fa-solid fa-envelope eAdd"></i>
	                  <input type="email" name="txt_email" id="txt_email" placeholder="Email" required>
	                </div>
	                
	                <div class="phone">
	                  <i class="fa-solid fa-phone num"></i>
	                  <input type="tel" name="txt_contact" id="txt_contact" placeholder="Phone"  pattern="09[0-9]{9}"  oninput="this.value = this.value.replace(/[^0-9+]/g, '')" minlength="11" maxlength="11" required>
	                </div>

	                <div class="password">
	                  <i class="fa-solid fa-lock lock"></i>
	                  <input type="password" name="ps_pWord" id="ps_pWord" placeholder="Password" required>
	                </div>
	                
	                <div class="con_password">
	                  <i class="fa-solid fa-lock lockCon"></i>
	                  <input type="password" name="con_pWord" id="con_pWord" placeholder="Confirm Password" required> 
	                </div>
	                 
                     <input type="submit" name="btn_signUp" id="btn_signUp" value="Sign Up"> 
                     <h5>Already have an account? <a href="loginPage.php">Sign In</a></h5>
                </form>
            </div>
		</div>
	</body>
</html>
<?php
	include("connection.php");

	if (isset($_POST['btn_signUp'])) {
		$un = $_POST['txt_username'];
		$em = $_POST['txt_email'];
		$ph = $_POST['txt_contact'];
		$pw = $_POST['ps_pWord'];
		$cpw = $_POST['con_pWord'];

		if ($pw != $cpw) {
			Print '<script>alert("Passwords do not match!")</script>';
		} else {
			$sqlUname = "SELECT * FROM `tbl_registration`
						WHERE `Username` = '".$un."'";

			$resUname = $con -> query($sqlUname);

			if ($resUname->num_rows>0) {
				Print '<script>alert("Username is already taken!")</script>';
			} else {
				$sqlName = "SELECT * FROM `tbl_registration`
							WHERE `Email` = '".$em."'
							AND `Contact_Number` = '".$ph."'";

				$resName = $con -> query($sqlName);

				if ($resName->num_rows>0) {
					Print '<script>alert("Account is already registered! Please login instead.")</script>';
				} else {
					$sqlInsert = "INSERT INTO `tbl_registration` (`Username`,`Email`,`Contact_Number`,`Password`)
						VALUES ('".$un."','".$em."','".$ph."','".$pw."')";

					if ($con->query($sqlInsert) == TRUE) {
						Print '<script>alert("Account registered successfully!")</script>';
						Print '<script>window.location.assign("loginPage.php")</script>';
					}
				}
			}
		}
	} 
?>