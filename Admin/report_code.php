<?php
session_start();
$_SESSION['email'];
if(isset($_POST['show']))
{
$game=$_POST['game'];

$con=mysqli_connect('localhost','root','','sport');
$sql="select * from registration where game='$game'";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res))
{
 $id=$row['id'];
 $game=$row['game'];
}
header("location:report.php?game='$game'");
}
?>