<!DOCTYPE html>
<?php
	include('header.php');
	?>
<html lang="zxx">

<head>
	<title>Sport-Fest</title>
	<!-- meta-tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //meta-tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

</head>

<body>
	
	
	<div class="register-form-main">
		<div class="container">
		<div class="row">
			<div class="title-div">
				<h3 class="tittle">
					<span>R</span>egister
					<span>F</span>orm
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="login-form">
			<div class="row">
				<form action="register_code.php" method="post">
					<div class="">
						<p>Username </p>
						<input type="text" class="name" name="username" Placeholder="Your Name" required="" />
					</div>
					<div class="">
					<p>E-mail</p>
						<input type="email" class="email" name="email" Placeholder="E-mail" required="" />
					</div>
					<div class="">
						<p>Mobile Number</p>
						<input type="number" maxlength="10" class="number" name="mobile" Placeholder="Your Mobile Number"  required=""  />
					</div>
					<div class="">
						<p>Password</p>
						<input type="password" class="password" name="password" id="password1" required="" />
					</div>
<table>
					<div class="">
						<tr><td><p>Branch</p>
						<select class="txt2"name="branch" required="">
						<option >Select</option>
					<option value="MCA">MCA</option>
					<option value="MBA">MBA</option>
					<option value="B.pharma">B.Pharma</option>
					<option value="CS">CS</option>
					<option value="IT">IT</option>
					<option value="EC">EC</option>
					<option value="ME">ME</option>
					<option value="EN">EN</option>
					<option value="CIVIL">CIVIL</option>
					</select>
						
					</div>
					</td>
					<td>
					
					<div class="" style="margin-left:100px;">
						<p>Year</p>
						<select class="txt2"name="year" required="">
						<option >Select</option>
					<option value="1st">1st Year</option>
					<option value="2nd">2nd Year</option>
					<option value="3rd">3rd Year</option>
					<option value="4th">4th Year</option>
					</select>
				
					</div>
					
					
				
			<div class="" style="margin-left:300px;">
						<td><p>Gender</p>
						<input type="radio" class="radio" name="gender" value="male"> Male
						<input type="radio" class="radio" name="gender" value="Female"> Female
					</div>
					</td>
					</tr>
					</table>
					<br/>
					<td>
					<div class="">
						<th>Date of Birth:</th>
							<td>
<select class="txt2"name="dob_year" required="">
<option >Year</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
</select>
<select class="txt4"name="dob_months" required="">
<option >Month</option>
<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>
<select class="txt3"name="dob_date" required="">
<option >Date</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
</div>
</td>
</tr>
</table><br/>

                 <table><div class="">
						<tr><td><p>Game:</p>
					
Cricket
<input type="checkbox" name="game[]" value="Cricket">
Football
<input type="checkbox" name="game[]" value="Football">
Vollyball
<input type="checkbox" name="game[]" value="Vollyball">
Basketball
<input type="checkbox" name="game[]" value="Basketball">
Badmintion
<input type="checkbox" name="game[]" value="Badmintion">
Lawn Tannis
<input type="checkbox" name="game[]" value="Lawn Tennis"><br/>
<br/>
Table Tannis
<input type="checkbox" name="game[]" value="Table Tennis">

Chess
<input type="checkbox" name="game[]" value="Chess">
Pool
<input type="checkbox" name="game[]" value="Pool">
Athletics
<input type="checkbox" name="game[]" value="Athletics">

</td>
</tr>
 </table>
						
					</div>
					<br/>
					<div>	
					<label class="anim">
						<input type="checkbox" class="checkbox">
						<span>I Accept Terms & Conditions</span>
					</label>
					</div>
					<div>
						<input type="reset" value="Reset">
						<input type="submit" onclick="alert('Are  You sure want to be register')" value="Register" name="register" width="50%" >
					</div>
					
					
				</form>
			</div>
		</div>
		</div>
	</div>

	

	<!-- js files -->
	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.js"></script>
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- smooth scrolling -->
	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
	<!-- //js-files -->
	<?php
	include('footer.php');
	?>

</body>

</html>