<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "shubham.chauhan.020795@gmail.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>	
	
	
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>C</span>ontact
					<span>U</span>s
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="contact-row">
				<div class="col-md-6 contact-text1">
					<h4>Contact Our
						<span>Sport Fest</span>
					</h4>
					<p>All the user any problem regarding application quickly contact.....
					</p>
				</div>
				<div class="col-md-6 contact-w3lsright">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3497.8944700559855!2d77.4958014121117!3d28.752567582370524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf47204fb9241%3A0xf5c6d6eefa89a5df!2sKIET+Group+of+Institutions!5e0!3m2!1sen!2sin!4v1516987088892"
					    allowfullscreen></iframe>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="contact-lsleft">
		<div class="container">
			<div class="address-grid">
				<h4>Contact Details</h4>
				<ul class="w3_address">
					<li>
						<span class="fa fa-globe" aria-hidden="true"></span>KIET Group of Institution, NH 58 National highway, Ghazibad
					</li>
					<li>
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
						<a href="mailto:info@example.com">shubham.1614065@kiet.edu</a>
					</li>
					<li>
						<span class="fa fa-phone" aria-hidden="true"></span>+91 9917993860
					</li>
				</ul>
			</div>
			<div class="contact-grid agileits">
				<h4>Get In Touch</h4>
				<form method="post">
					<div class="">
						<input type="text" name="Name" placeholder="Name" required="">
					</div>
					<div class="">
						<input type="email" name="Email" placeholder="Email" required="">
					</div>
					<div class="">
						<input type="text" name="Phone Number" placeholder="Phone Number" required="">
					</div>
					<div class="">
						<textarea name="Message" placeholder="Message..." required=""></textarea>
					</div>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</div>
	<!-- //contact -->


	
	<!--/footer -->

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
	<!-- //js-files -->
	<?php
  }
	include('footer.php');
	?>

</body>

</html>