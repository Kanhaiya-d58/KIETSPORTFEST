<?php
session_start();
if(isset($_POST['login']))
{

	$email=$_POST["email"];
	$password=md5($_POST["password"]);
	
	$conn=mysqli_connect('localhost','root','','sport');
	 $query="select * from registration where email='$email' && password='$password'";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($result))
	{
		 $user_email=$row['email'];
		 $user_pass=$row['password'];
	if($email==$user_email && $password==$user_pass)
	{
		$_SESSION['email']=$email;
		header('location:user/dashboard.php');
	}
	else
	{
      echo "your E-mail and password are not match";  
	  header("location:login.php");
	}
	}  
}
?>