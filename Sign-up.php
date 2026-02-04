<!DOCTYPE html>
<html>
   <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		<link rel="icon" href="images/fevicon.png" type="image/gif" />
		<link href="css/fonts.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
			<script src="js/jquery.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
      
		<link rel="stylesheet" href="css/fonts2.min.css">
	</head>
   
	<body class="color">
			<div class="container">
			<?php
						session_start();
						
						include "conn.php";
						
						if (isset($_POST['register']))
						{
							$name = $_POST['name'];
							$phone = $_POST['phone'];
							$email = $_POST['email'];
							$pass = $_POST['password'];
							$cpass = $_POST['cpass'];
							
							$query = "select * from user_tbl where email='{$email}'";
							$res = mysqli_query($conn, $query);
							
							if (mysqli_num_rows($res)>0)
							{
								echo"<div class='alert alert-success alert-dismissible fade in'>
								<a href='#' class='close' data-dismiss ='alert'  aria-lable='close'>&times;</a>
								<strong>success!</strong> You are register successfully!!!</div>";
								echo"<a href='Sign-in.php'><button class='btn btn-info'>Go Sign-in page</button></a>";
							}
							else
							{
								if($pass===$cpass)
					{
							$sql = "insert into user_tbl(name,phone,email,password) values('$name','$phone','$email','$pass')";
									$result = mysqli_query($conn, $sql);
									
									if ($result)
									{
										echo"SucesS";
											
									}
									else
									{
										echo"<div class='message'><p>This email is used, Try another One Please!</p></div><br>";
									}
								}
								else
								{
									echo"<div class='alert alert-warning alert-dismissible fade in'>
										<a href='#' calss='close' data-dismiss='alert' arial-lable='close'>&times;</a>
										<strong>warning!</strong>Password does not match</div>";
								}
							}
						}
						
					?>
						<h1 class="contact_taital">Ragistration</h1>
						 <p class="contact_text"> Sign-in of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
					
				
				<div class="log_section_2">
					<div class="row">
						<div class="col-md-12 padding15">
							
							<form method="POST">
								<div class="form-group">
									<label for="InputEmail1">Name</label>
									<input type="text" class="form-control" name="name" placeholder="Enter name" required>
								</div>
								<div class="form-group">
									<label for="InputEmail1">Contact</label>
									<input type="text" class="form-control" name="phone" placeholder="Enter Number" required>
								</div>
								<div class="form-group">
									<label for="InputEmail1">Email address</label>
									<input type="email" class="form-control" name="email" placeholder="Enter email" required>
									<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else!.</small>
								</div>
								
								<div class="form-group">
								<label for="InputPassword1">Password</label>
								<input type="password" class="form-control" name="password" placeholder="Password" required>
								</div>
								
								<div class="form-group" required>
								<label for="InputPassword1">CPass</label>
								<input type="password" class="form-control" name="cpass"  placeholder="Password">
								</div>
								
								<button name="register" type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div> 	
								
	</body>
</html>