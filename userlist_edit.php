<?php
	include"conn.php";
	$uid=$_GET['u_id'];
	
	$query1="select *from user_tbl where u_id='$uid'";
	$res = mysqli_query($conn,$query1);
	$row = mysqli_fetch_array($res);

	if(isset($_POST['update']))
	{
		$name = $_POST['name'];
		$phone = $_POST['phone'];					
		$email = $_POST['email'];					
		$password = $_POST['password'];
		
		
		$query1 = "update user_tbl set name='$name', phone='$phone', email='$email', password='$password', where u_id ='$uid'";
		$result1 = mysqli_query($conn, $query1);
		if ($result1) 
		{
			echo "<div class='alert alert-success alert-dismissible fade in'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			<strong>success !</strong> Details Updated successfully!!!</div>";	
			
		} 
		else 
		{
			echo "<div class='message'><p>Something is wrong</p></div><br>";
		}         	
			
	}
?>
<html>
	<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
	        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
<body>
						<div class="log_section_2">
					<div class="row">
						<div class="col-md-12 padding15">
							
							<form>
								<div class="form-group">
									<label for="InputEmail1">Name</label>
									<input type="text" class="form-control" value="<?php echo $row['name']?>" name="name"  placeholder="Enter name">
								</div>
								<div class="form-group">
									<label for="InputEmail1">Contact</label>
									<input type="text" class="form-control" value="<?php echo $row['phone']?>" name="number"  placeholder="Enter Number">
								</div>
								<div class="form-group">
									<label for="InputEmail1">Email address</label>
									<input type="email" class="form-control" value="<?php echo $row['email']?>" name="email" placeholder="Enter email">
									<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else!.</small>
								</div>
								
								<div class="form-group">
								<label for="InputPassword1">Password</label>
								<input type="password" class="form-control" value="<?php echo $row['password']?>" name="password" placeholder="Password">
								</div>
								
						
						</div>
								
				<div class="form-group">
					<div class="container-fluid">
						<div class="col-sm-12">
						<div class="row">
											<div class="col-sm-4">
												<a href="contact us.php"><input type="reset" name="reset" value="Clear" class="form-control btn btn-warning"></a>
											</div>
											<div class="col-sm-4">
												<a href="contact us.php"><center><input type="text" name="goback" value="Go Back" class="form-control btn btn-info"></center></a>
											</div>
											<div class="col-sm-4">
												<center><input type="submit" name="update" id="submit" value="Update" class="form-control btn btn-primary"></center>
											</div>
										</div>
					</div>
					</div>
				</div>
			</div> 		
			
</body>
</html>