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
window.__cfRocketOptions = {byc:0,p:0,petok:"aff4bce78296c3b39ad9e2965e2ee7d2be6ba7b0-1522938245-1800"};
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
<div id="wrapper">

</div>



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
<link rel="stylesheet" type="text/css" href="css/css/sweetalert.css">


<script type="text/rocketscript" data-rocketsrc="js/sweetalert.min.js"></script>
<style>
           #rcorners1 {
    border-radius: 25px;
    background: #FF4500;
    padding: 20px; 
    width: 500px;
        
}
       </style>
<script type="text/rocketscript">
       function showPrevious()
       {
       	document.getElementById("showTable3").style.display='block';
       }
       </script>
<script type="text/rocketscript">
       
       function getName(model)
  {
    var d;
            $.ajax({
                type: 'GET',
                url: '../getCaptainName',
                data: {
                   
                    'lib': model
                  
                    
                },

                success: function (data) {
                   d=JSON.parse(data);

                   if(d.error==false)
                   {
                    
                    document.getElementById("sub").disabled = false;
                    document.getElementById("captainid").style.color='green';
                  }
                    else
                    {
                      document.getElementById("sub").disabled = true;
                      document.getElementById("captainid").style.color='red';
                    }
                    $("#captainid").html(d.msg);
                }
    });
          }
          
       </script>
<script type="text/rocketscript">

           function getCoordinator(id)
           {
                        $.ajax({
                type: 'GET',
                url: '../getApex',
                data: {
                   
                    'eventId': id
                  
                    
                },

                success: function (data) {
                
                    var table = document.getElementById("showTable");
                    
                    document.getElementById("showTable3").style.display='block';
                    $("#showTable").html(data);
                   
                }
            });
                               $.ajax({
                type: 'GET',
                url: '../getCoordinator',
                data: {
                   
                    'eventId': id
                  
                    
                },

                success: function (data) {
                console.log(data);
                  
                    $("#showTable2").html(data);
                    
                }
            });
           }
       </script>
</head>
<body>
<div class="gallery">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>S</span>tudent <span>C</span>ommitte <span>M</span>embers
				</h3>
				<div class="tittle-style">

				</div>
			</div>


<br>
<br>
<section>
<div class="container">
<div class="jumbotron">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-2">
<label for="EventName">Select Event</label>
</div>
<div class="col-md-3">
<select class="form-control" id="event" name="event" onchange="getCoordinator(this.value);" required>
<option value="">Choose One</option>
[{"name":"CRICKET","id":"6"},{"name":"FOOTBALL","id":"7"},{"name":"BADMINTON","id":"8"},{"name":"POOL","id":"9"},{"name":"ATHLETICS","id":"10"},{"name":"CHESS","id":"11"},{"name":"BASKETBALL","id":"12"},{"name":"VOLLEYBALL","id":"13"},{"name":"TABLE TENNIS","id":"14"},{"name":"LAWN TENNIS","id":"15"}]
<option value="6">CRICKET</option>
<option value="7">FOOTBALL</option>
<option value="8">BADMINTON</option>
<option value="9">POOL</option>
<option value="10">ATHLETICS</option>
<option value="11">CHESS</option>
<option value="12">BASKETBALL</option>
<option value="13">VOLLEYBALL</option>
<option value="14">TABLE TENNIS</option>
<option value="15">LAWN TENNIS</option>
</select>
</div>
</div>
</div>
</div>
</section>
<div id="showTable3" style="display: none;">
<section>
<center><h2>Apex Coordinator</h2></center>
<br>
<hr>
<div class="container">
<div class="jumbotron">
<div class="row">
<table class="table table-responsive table-stripped table-bordered">
<thead>
<th>S.No.</th>
<th>Name</th>
<th>Library Id</th>
<th>Contact No.</th>
<th>Branch</th>
<th>Year</th>
</thead>
<tbody id="showTable">
</tbody>
</table>
</div>
</div>
</div>
</section>
<br>
<section>
<center><h2>Student Coordinator</h2></center>
<br>
<hr>
<div class="container">
<div class="jumbotron">
<div class="row">
<table class="table table-stripped table-bordered">
<thead>
<th>S.No.</th>
<th>Name</th>
<th>Library Id</th>
<th>Contact No.</th>
<th>Branch</th>
<th>Year</th>
</thead>
<tbody id="showTable2">
</tbody>
</table>
</div>
</div>
</div>
</section>
</div>
</body>
<script data-rocketsrc="js/jquery.min.js" type="text/rocketscript"></script>
<script data-rocketsrc="js/bootstrap.js" type="text/rocketscript"></script>
<script data-rocketsrc="js/login.js" type="text/rocketscript"></script>
</body>


</div>
<?php
 include('footer.php');
 ?>
</html>