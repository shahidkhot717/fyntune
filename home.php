<?php  
	session_start();

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
	<h1 class="m-auto">Home</h1>
	
	


<?php 
include 'connection.php';

	$result_per_page =  4;
	$sql = "SELECT * FROM post";

	$result = mysqli_query($con,$sql);

	$no_of_result = mysqli_num_rows($result);



	$no_of_pages = ceil($no_of_result/$result_per_page);


	

if (!isset($_GET['page'])) {
	$page = 1;
}else{
	$page = $_GET['page'];
}

$this_page_first_result = ($page - 1)*$result_per_page; 

$sql = "SELECT * FROM post LIMIT $this_page_first_result, 
$result_per_page";


$result = mysqli_query($con,$sql);
$rows  = mysqli_fetch_assoc($result);
	 $id = $rows['id'];
?><?php
while ($row  = mysqli_fetch_assoc($result) ) {?>
		<div class="container">
		<div class="card m-auto" style="width: 18rem;">
		  
		  <div class="card-body">
		  	<h4 class="card-title">

		     <?php echo $row['title'];?> Created By <?php echo $row['username']; ?>
		     	
		     </h4>
		    <p class="card-text"><?php echo $row['content'] ;?></p>

		    <small>Date Posted:<?php echo $row['date'];?></small>
		    <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
		    <a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a> 

		    
		  </div>
	</div>
</div> <br>
	<?php } 

for($page = 1 ; $page<=$no_of_pages ; $page++){
  	echo '<a href="home.php?page='. $page.'"> '.$page.'</a>';
  } ?>
 
  

  <?php include 'footer.php'?>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  
</body>
</html>