

<?php 
	session_start();
	include 'connection.php';

	// if ($con) {
	// 	echo "s";
	// }else{
	// 	echo "f";
	// }

	

	

	

	if (isset($_POST['submit'])) {

		
		$title = mysqli_real_escape_string($con,$_POST['title']);
	$content = mysqli_real_escape_string($con,$_POST['content']);
	$date = date("Y-m-d H:i:s");
	$username = mysqli_real_escape_string($con,$_POST['name']);
	
	// echo $date ;
	// echo $username;
	
	
	

	$query = "INSERT INTO `post`( `title`, `username`, `content`, `date`) VALUES ('$title','$username','$content','$date')";



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
		<h1>Create Post</h1>
		<div class="form-group m-auto">
			<form 
			action="post.php" method="post">
		
				<label>Title:</label>
				<input type="text" name="title" class="form-control">
				<br>

				<label>Auther name:</label>
				<input type="text" name="name" class="form-control">

				
				
				<label>content:</label>
				<textarea class="form-control" name="content"></textarea>

				  <button type="submit" 
				  name="submit" 
				  class="btn btn-primary mt-2">
				  Submit</button>
				  
		

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