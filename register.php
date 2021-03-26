<?php 

	include 'connection.php';

	// if ($con) {
	// 	echo "s";
	// }else{
	// 	echo "f";
		// }
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
	$password = $_POST['password'];

	$hash_pass = password_hash($password, PASSWORD_DEFAULT);
	

	$query = "INSERT INTO `user`( `email`, `password`) VALUES ('$email','$hash_pass')";

	mysqli_query($con,$query);
	}

	

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
<?php include 'nav.php'; ?>
	<div class="w-50 m-auto">
		<h1>Register</h1>
		<div class="form-group m-auto">
			<form action="register.php" method="post">
		
				<label>Email:</label>
				<input type="email" name="email" class="form-control">

				<label>Password:</label>
				<input type="Password" name="password" class="form-control">

				  <button type="submit" 
				  name="submit" 
				  class="btn btn-primary mt-2">
				  Submit</button>
				  <br>
				<small >Already hve an account? <a href="login.php">Login</a></small>

			</form>
		</div>
	</div>
	<!-- <?php echo $email; ?> -->











<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <?php include 'footer.php'?>
</body>
</html>