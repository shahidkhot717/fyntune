<?php  
	session_start();

	include 'connection.php';

	$post_select = 'SELECT * FROM `post`';

		
		$query = mysqli_query($con,$post_select);

	$result_count = mysqli_num_rows($query);
// echo $email_count;
// 	if ($email_count) {
// 		$post_fetch = mysqli_fetch_assoc($query);

// 		$_SESSION['title'] = $post_fetch['title'] ;
// 		$_SESSION['content'] =$post_fetch['content'];
// 		$_SESSION['username'] =$post_fetch['username'];
// 		$_SESSION['date'] =$post_fetch['date'];



// }


	if (!isset($_SESSION['username'])) {
		echo "logged out";
		header('location:login.php');
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
	<?php include 'nav.php';?>
	<h1>home</h1>
	<!-- <?php echo $_SESSION['username'];?> -->
	<?php while ($row  = mysqli_fetch_array($query)) {
		echo '<div class="container">';
		echo '<div class="card" style="width: 18rem;">';
		  
		  echo '<div class="card-body">';
		    echo '<h4 class="card-title">';
		     echo $row['title'].' By ' .$row['username'].' </h4>';
		    echo '<p class="card-text">'. $row['content'] .'</p>';
		    echo '<a href="#" class="btn btn-danger">Delete</a>';
		  echo '</div>';
	echo '</div>';
echo '</div> <br>';
	} ?>
<!-- <div class="container">
		<div class="card" style="width: 18rem;">
		  
		  <div class="card-body">
		    <h4 class="card-title"><?php echo $_SESSION['title']; ?> By <?php echo  $_SESSION['username']; ?></h4>
		    <p class="card-text"><?php echo $_SESSION['content'];?></p>
		    <a href="#" class="btn btn-danger">Delete</a>
		  </div>
	</div>
</div> -->

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <?php include 'footer.php'?>
</body>
</html>