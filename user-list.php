<?php
session_start();

include("conn.php");

if (!isset($_SESSION['name'])) {
    header("location: index.html");
	
	$query=" select*from user_tbl";
	$result = mysqli_query($conn,$query);
	$data = (mysqli_num_rows($result));
	$row = mysqli_fetch_array($result);
}
?>
<!DOCTYPE html>
<html>
	<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
	        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
<body>
	<div class="container-fluid">
		<div class="col-sm-12">
			<h3 align="center">Registration-List</h3>
			<table class="table table-striped">
				<thead>					
					<th>Name</th>
					<th>Phone</th>					
					<th>Email</th>
					<th>Password</th>
					<th>Action</th>
				</thead>
				<tbody>
				<?php
					include"conn.php";
					$query1 = "select * from user_tbl";
					$res = mysqli_query($conn, $query1);
					$data = mysqli_num_rows($res);
					if($data)
					{
						while($row = mysqli_fetch_array($res))
						{
						?>
							<tr>
								
								<td><?php echo $row['name']?></td>
								<td><?php echo $row['phone']?></td>
								<td><?php echo $row['email']?></td>
								<td><?php echo $row['password']?></td>
								
								
								<td><a href="userlist_edit.php?u_id=<?php echo $row['u_id'];?>"><button>Edit</button></a></td>
								
								<td><a href="user_delete.php?u_id=<?php echo $row['u_id'];?>"><button>Delete</button></a></td>
							</tr>
					<?php	
					}
					
					}
					else
					{
						echo"<div class='alert alert-warning alert-dismissble fade in'>
							 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							 <strong>Success!</strong>Detail Update successfully!!!</div>";
					}
					?>
				</tbody>
			</table>
		</div>
	</div>	
</body>
	

</html>

