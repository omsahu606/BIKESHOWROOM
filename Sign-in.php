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
	
		include"conn.php";
		
		if(isset($_POST['login']))
		{
			$email = $_POST['email'];
			$password = $_POST['password'];
			
			
			$sql = "select * from user_tbl where email='$email' and  password='$password'";
			
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$count = mysqli_num_rows($result);
			
	
				if($count===1)
				{
					$_SESSION['uid'] = $row['u_id'];
					$_SESSION['name'] = $row['name'];
					$_SESSION['phone'] = $row['phone'];
					$_SESSION['email'] = $row['email'];
					echo"<div class='alert alert-success alert-dismissible fade in'>
					<a href='#' class='close' data-dismiss ='alert'  aria-lable='close'>&times;</a>
					<strong>success!</strong> You are login successfully!!!</div>";
					header("location: index.php");
				}
				else
				{
					echo "<div class='message'><p><strong>Wrong Email or Password</strong></p></div>";
				}
			}
		
?>
				
					
						<h1 class="contact_taital">LOGIN</h1>
						 <p class="contact_text"> Sign-in of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
					
				
				<div class="log_section_2">
					<div class="row">
						<div class="col-md-12 padding15">
						
							<form method="POST">
							<div class="log_section_1 ">
							  <div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control log_text" id="#" name="email" aria-describedby="emailHelp" placeholder="Enter email">
							  </div>
							  <div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control log_text" id="#" name="password" placeholder="Password">
							  </div>
							  
							  <button type="submit" name="login" class="btn btn-primary">Submit</button>
							</div>
							
							  
							</form>
							
						</div>
					</div>
				</div>
			</div>
			</div>
		

	</body>
</html>