<?php
session_start();
$_SESSION['email'];
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','sport');
$query="delete from registration where id='$id'";
mysqli_query($conn,$query);
header('location:registration_code.php');
	 
?>