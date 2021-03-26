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
	<h1>home</h1>
	
	


<?php 
include 'connection.php';

	$result_per_page =  4;
	$sql = "SELECT * FROM post";

	$result = mysqli_query($con,$sql);

	$no_of_result = mysqli_num_rows($result);
// echo $no_of_result;

// 	while ($row  = mysqli_fetch_array($result)) {
// 		echo '<div class="container">';
// 		echo '<div class="card" style="width: 18rem;">';
		  
// 		  echo '<div class="card-body">';
// 		    echo '<h4 class="card-title">';
// 		     echo $row['title'].' By ' .$row['username'].' </h4>';
// 		    echo '<p class="card-text">'. $row['content'] .'</p>';
// 		    echo '<a href="#" class="btn btn-danger">Delete</a>';
// 		  echo '</div>';
// 	echo '</div>';
// echo '</div> <br>';
// 	}


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
$rows  = mysqli_fetch_array($result);
	echo $id = $rows['id'];

while ($row  = mysqli_fetch_array($result) ) {
		echo '<div class="container">';
		echo '<div class="card" style="width: 18rem;">';
		  
		  echo '<div class="card-body">';
		    echo '<h4 class="card-title">';
		     echo $row['title'].' By ' .$row['username'].' </h4>';
		    echo '<p class="card-text">'. $row['content'] .'</p>';
		    echo '<a href="delete.php?id="'.$id.' class="btn btn-danger">Delete</a>';
		  echo '</div>';
	echo '</div>';
echo '</div> <br>';
	} 

for($page = 1 ; $page<=$no_of_pages ; $page++){
  	echo '<a href="home.php?page='. $page.'"> '.$page.'</a>';
  } ?>
  <!-- <?php  ?> -->
  

  <?php include 'footer.php'?>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  
</body>
</html>