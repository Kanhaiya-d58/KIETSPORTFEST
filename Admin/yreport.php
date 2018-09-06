<?php
session_start();
$_SESSION['email'];
//$game=$_REQUEST['game'];
?>
<!DOCTYPE html>
<head>

<title>Sport_Fest</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>

<body>

<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo">
        <h1>Welcome Admin</h1>
    </a>
    
</div>
<!--logo end-->

<div>
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/.jpg">
                <span class="username">Mr.Amit Goyal</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="login.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->

<!--sidebar start-->
<aside style="float:left">
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
               
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Reports</span>
                    </a>
                    <ul class="sub">
						<li><a href="greport.php">Game Wise</a></li>
						<li><a href="yreport.php">Year Wise</a></li>
                        <li><a href="breport.php">Branch Wise</a></li>
                    </ul>
                </li>
                                <li>
                    <a href="registration_code.php">
                        <i class="fa fa-user"></i>
                        <span>Register User</span>
                    </a>
                </li>
        <!-- sidebar menu end-->
    </div>
</aside>
		</section>	
			<div class="container" style="margin-left:400px; margin-top:100px;">
				<div class="row"> 
				<br><br><br>
				<img src="images/logos.png" alt="image not found"><br/>
				
		
					<!--	<tr><td><p>Branch Wise</p>
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
						</td>
					</div>
					
					<td><p>Year Wise</p>
						<select class="txt2"name="year" required="">
						<option >Select</option>
					<option value="1st">First Year</option>
					<option value="2nd">Second Year</option>
					<option value="3rd">Third Year</option>
					<option value="4th">Fourth Year</option>
					</td>
					
					</select>  -->
					
					<form action="yreport.php" method="post">
					<label for="game">Year Wise:</label>
						<select class="txt2" name="year" required="">
						<option >Select</option>
					<option value="1st">First Year</option>
					<option value="2nd">Second Year</option>
					<option value="3rd">Third Year</option>
					<option value="4th">Fourth Year</option>
					
					</td>
					
					</select>
					<button value="show">Show</button>
					</form>
					<br/>
					<br/>
					<?php
					
						$year=$_POST['year'];
					
					?>
					<br>
					<br/>
					
					<?php
					
					$conn=mysqli_connect('localhost','root','','sport');
					$query="select * from registration where year='$year'";
					$result=mysqli_query($conn,$query);
					echo "<center><table border='1px'><tr><th>Id</th><th>Name</th><th>Email</th><th>Gender</th><th>Game</th><th>Branch</th><th>Mobileno.</th><th>Year</th></tr>";
					while($row=mysqli_fetch_assoc($result))
					{
				     $id=$row['id'];
					$name=$row['username'];
					$email=$row['email'];
					$gender=$row['gender'];
					$game=$row['game'];
					$branch=$row['branch'];
					$mobile=$row['mobile'];
					$year=$row['year'];
					
					
					echo "<tr>";
					echo '<td>'.$id.'</td>';
					echo '<td>'.$name.'</td>';
					echo '<td>'.$email.'</td>';
					echo '<td>'.$gender.'</td>';
					echo '<td>'.$game.'</td>';
					echo '<td>'.$branch.'</td>';
					echo '<td>'.$mobile.'</td>';
					echo '<td>'.$year.'</td>';
					
					echo "</tr>";
					}
					echo "</table>";
					
					?>
				
				
				</div>
			</div>
			
			
			
 <!-- footer -->
		  <div class="footer" style="margin-top:420px">
			<div class="wthree-copyright">
			<center>  <p>© 2018. All rights reserved | Design by <a href="http://w3layouts.com">MCA Developer</a></p> </center>
			</div>
		  </div>
  <!-- / footer -->

<!--main content end-->

<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>
