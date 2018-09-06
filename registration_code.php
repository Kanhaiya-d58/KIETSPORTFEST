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
$game = $_POST['game'];
$gender = $_POST['gender'];
$dob_year = $_POST['dob_year'];
$dob_months = $_POST['dob_months'];
$dob_date = $_POST['dob_date'];

$sql = "INSERT INTO registration (username,email,mobile,password,branch,year,game,gender,dob_year,dob_month,dob_date)
VALUES ('$username','$email','$mobile','$password','$branch','$year','$game','$gender','$dob_year','$dob_months','$dob_date')";

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
