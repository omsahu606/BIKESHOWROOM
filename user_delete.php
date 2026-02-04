<?php
	include"conn.php";
	
	$u_id=$_GET['u_id'];
		$query = "delete from user_tbl where u_id='$u_id'";
		$result = mysqli_query($conn, $query);
		if($result)
		{
			?>
			<script type="text/javascript">
				alert("Data Delete Successfully")
				window.open("user-list.php","_self");
			</script>
			<?php
			
		}
		else
		{
			?>
			<script type="text/javascript">
				alert("Something is Wrong")
				window.open("admin.php","_self");
			</script>
			<?php	
		}
?>