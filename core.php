<!doctype html>
<?php
	include('header.php');
	?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Sports Fest</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
<script type="text/javascript">
//<![CDATA[
window.__cfRocketOptions = {byc:0,p:0,petok:"4efb398354984c57fa2f129585ee93ad28c2b7af-1522936584-1800"};
//]]>
</script>
<script type="text/javascript" src="https://ajax.cloudflare.com/cdn-cgi/scripts/935cb224/cloudflare-static/rocket.min.js"></script>

<script type="text/rocketscript" data-rocketsrc="http://www.sportsfest-kiet.com/js/jquery.min.js"></script>
<script type="text/rocketscript">
  function getdata(reg)
  {
        //alert(reg);

    try{
   
   ajaxRequest = new XMLHttpRequest();
  
 }catch (e){
  
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
         
      }catch (e){
        
         alert("Your browser broke!");
         return false;
      }
   }
 }

 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('rule');
      
      ajaxDisplay.innerHTML = ajaxRequest.responseText;
      //alert(ajaxDisplay.length);
   }
 }
 ajaxRequest.open("GET", "get_rules.php?e="+reg, true);
 ajaxRequest.send(); 
  }
</script>
</head>



<script type="text/rocketscript">
$("#events").on('click',function() {
    $('html, body').animate({
        'scrollTop' : $("#event").position().top
    },700);
});
</script>
<script type="text/rocketscript">
   window.onload=function(){adjustStyle();}
     function adjustStyle() {
    width = parseInt(screen.width);
    if(width<701) 
    {
        document.getElementById('logo').setAttribute("width", "40%");
    } else if ((width>=701)&&(width<900)) {
        document.getElementById('logo').setAttribute("width", "70%");
    } else {
       document.getElementById('logo').setAttribute("width", "100%"); 
    }
}
  </script>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sports Fest</title>


<style>
           #rcorners1 {
    border-radius: 25px;
    background: #FF4500;
    padding: 20px; 
    width: 500px;
        
}
       </style>
</head>
<body>
<div class="gallery">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>C</span>ore <span>C</span>ommitte <span>M</span>ember
				</h3>
				<div class="tittle-style">

				</div>
			</div>

<section class="section">
<div class="container">
<div id="form_div2">
<table class="table">
<thead>
<tr>
<th><i>Event name</i></th>
<th><i>Name</i></th>
<th><i>Department</i></th>
<th><i>Contact No</i></th>
</tr>
</thead>
<tbody>
<tr>
<td>CRICKET</td>
<td>BRAJESH KUMAR TIWARI</td>
<td>EN</td>
<td>9450118020</td>
</tr>
<tr>
<td>FOOTBALL</td>
<td>VIVEK KUMAR PATHAK</td>
<td>ME</td>
<td>8791684864</td>
</tr>
<tr>
<td>BASKETBALL</td>
<td>SURYA PRAKASH</td>
<td>KSOP</td>
<td>8587017568</td>
</tr>
<tr>
<td>BADMINTON,AHLETICS</td>
<td>MUKUL AGGARWAL</td>
<td>IT</td>
<td>9899260385</td>
</tr>
<tr>
<td>VOLLEYBALL</td>
<td>ANKIT VERMA</td>
<td>MCA</td>
<td>9873137958</td>
</tr>
</tbody>
</table>
</div>
</div>
</section>
</body>

</div>
<?php
	include('footer.php');
	?>
</html>

