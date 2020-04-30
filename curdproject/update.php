<?php
$connection= new mysqli("localhost","root","",
	"curdproject")or die("connection failed%s\n".$connection->error);
if(isset($_POST['done'])){
	$id= $_GET['id'];
$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	$query = "update curdtable set id=$id,Username=$Username,Password=$Password where id=$id";
			$insert_query = $connection->query($query);
			header('location:display.php');
			echo "successfully updated";
		}
?>
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
	<div class = "col-lg-6 m-auto">
		<form method="post"> 
			<div class="card"><br>
	
				<div class ="card-header bg-dark">
					<h1 class ="text-white text-center">update operation</h1>
				</div>
			</div>

			
			<label>Username</label>
			<input type="text" name="Username" class ="form-control"><br>
			<label>Password</label>
			<input type="text" name="Password" class="form-control"><br>
			<button class ="btn btn-success" type="submit" name="done">submit</button><br>

		</form>

</body>
</html>