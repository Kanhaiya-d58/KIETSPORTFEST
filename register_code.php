<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sport";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$password=md5($password);
$branch = $_POST['branch'];
$year = $_POST['year'];
$gender = $_POST['gender'];
$dob_year = $_POST['dob_year'];
$dob_months = $_POST['dob_months'];
$dob_date = $_POST['dob_date'];
$game = $_POST['game'];
//print_r($game);
$strgame="";
for($i=0;$i<count($game);$i++)
{
	if($strgame!="")
		$strgame=$strgame.", ";
	$strgame=$strgame.$game[$i];
}
echo $sql = "INSERT INTO registration (username,email,mobile,password,branch,year,gender,dob_year,dob_month,dob_date,game)
VALUES ('$username','$email','$mobile','$password','$branch','$year','$gender','$dob_year','$dob_months','$dob_date','$strgame')";

if (mysqli_query($conn, $sql)) {
    echo "Your Registration successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<?php
function check_input($data, $problem)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	if ($problem && strlen($data) == 0)
	{
		show_error($problem);
	}
	return $data;
}
function show_error($myError)
{
?>
<p>Please correct the following error:</p>
<strong><?php echo $myError; ?></strong>
<p>Hit the back button and try again</p>
<?php
exit();
}
?>
