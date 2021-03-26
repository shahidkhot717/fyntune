<?php 
include 'connection.php';

$id = $_GET['id'];

$deletequery = "delete from post where id =$id";

mysqli_query($con,$deletequery);

header('location:home.php');
?>