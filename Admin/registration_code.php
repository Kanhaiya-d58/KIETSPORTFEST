
<html>
<style>
body {
    background-color: AntiqueWhite;
	
   
}
</style>
<body>
<center><img src="images/logos.png" alt="image not found"><a href="login.php"><input type="button" value="Log out"></a>
<h1><font color="red">Total Register user</font></center></h1>
<?php
session_start();
$_SESSION['email'];

	$conn=mysqli_connect('localhost','root','','sport');
	 $query="select * from registration";
	$result=mysqli_query($conn,$query);
	 echo "<center><table border='1px'><tr><th>Id</th><th>Name</th><th>Email</th><th>Gender</th><th>Branch</th><th>Game</th><th>Mobileno.</th><th>Year</th><th>Delete</th></tr>";
	while($row=mysqli_fetch_assoc($result))
	{
				$id=$row['id'];
		        $name=$row['username'];
				$email=$row['email'];
				$gender=$row['gender'];
				$branch=$row['branch'];
				$year=$row['year'];
				$game=$row['game'];
				$mobile=$row['mobile'];
				$year=$row['year'];
				
				echo '<tr>';
				echo '<td>'.$id.'</td>';
				echo '<td> '.$name.' </td> ';
				echo ' <td> '.$email.' </td> ';
				echo ' <td> '.$gender.' </td> ';
				echo ' <td> '.$branch.' </td>';
				echo ' <td> '.$game.' </td> ';
				 echo '<td>'.$mobile.' </td>';
				 echo '<td>'.$year.' </td>';
				echo'<td><a href="delete.php?id='.$id.'">Delete</a> </td>';
                 echo'</tr>';				
   }

	echo "</table></center>";
?>
</body>
</html>