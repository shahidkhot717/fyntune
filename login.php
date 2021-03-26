<?php 
	session_start();
	include 'connection.php';

	// if ($con) {
	// 	echo "s";
	// }else{
	// 	echo "f";
	// }

	

	// $query = "INSERT INTO `user`( `email`, `password`) VALUES ('$email','$password')";

	

	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$email_search = "SELECT * FROM `user` WHERE email='$email'";

	$query = mysqli_query($con,$email_search);

	$email_count = mysqli_num_rows($query);

	if ($email_count) {
		$email_pass = mysqli_fetch_assoc($query);

		$db_pass = $email_pass['password'];
		$_SESSION['username'] = $email_pass['email'];

		$pass_decode = password_verify($password, $db_pass);

		if ($pass_decode) {
			echo "success";
			header('location:home.php');
		}else{
			echo "incorrect";
		}
	}else{
		echo "email not found";
	}
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
		<h1>Login</h1>
		<div class="form-group m-auto">
			<form 
			action="login.php" method="post">
		
				<label>Email:</label>
				<input type="email" name="email" class="form-control">
				
				<label>Password:</label>
				<input type="Password" name="password" class="form-control">

				  <button type="submit" 
				  name="submit" 
				  class="btn btn-primary mt-2">
				  Submit</button>
				  <br>
				<small >Don't have an Account? <a href="register.php">Register</a></small>
		

			</form>
		</div>
	</div>








<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <?php include 'footer.php'?>

</body>
</html>