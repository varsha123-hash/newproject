<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<div class ="col-lg-12">
		<br><br>

		<h1 class="text-warning text=center"> Display Table Data</h1>
		<br>
		<table class="table table-stiped table-hover table-border" >
			<tr>
				<td> id</td>
				<td> Username</td>
				<td> Password</td>
				<td> Delete</td>
				<td> Update</td>
			</tr>
<?php
	include 'conn.php';

	$q = "select * from curdtable";
	$query = mysqli_query($conn,$q);
	while ($res= mysqli_fetch_array($query)){
		//echo"<pre>";print_r($res);die();
		
	


?>
			<tr>
				<td> <?php echo $res['id']; ?></td>
				<td> <?php echo $res['Username']; ?></td>
				<td> <?php echo $res['Password']; ?></td>
				<td> <button class ="btn-danger btn"><a href="delete.php?id=<?php echo $res['id'];?>" class="text-white">Delete</a></button></td>
				<td> <button class ="btn-danger btn"><a href="update.php?id=<?php echo $res['id'];?>" class="text-white">Update</a></button></td>
				
			</tr>
			<?php
			}
			?>

		</table>
	</div>
</div>
</div>

</body>
</html>
