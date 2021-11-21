<html>
<head><title>maxshine</title>
<style>
#fb:hover
{
	background-color:lime;
}
#ed  input
{
	font-size:18px;
}
#ed
{
	height:320px;
	width:30%;
	margin-left:60%;
	margin-top:30px;
	background-color:#696969;
	opacity:0.4%;
	position:absolute;
	z-index:999%;
	padding:20px;
	 background-repeat:repeat-y;
	 border:2px solid white;
}
</style>
<?php include"bslinks.html"; ?>
<script>
var images=["hos4.jpg","hos5.jpg","hos7.jpg","hos8.jpg","hos9.jpg","hos10.jpg","hos1.jpg","hos2.jpg","hos3.jpg","hos6.jpg","lab3.jpg"];
var i=0;
function next()
{
var img=document.getElementById("img");
i++;
if(i==images.length)
{
	i=0;
}
img.src="images/"+images[i];
}
function pev()
{
var img=document.getElementById("img");

if(i==0)
{
	i=images.length;
}
i--;
img.src="images/"+images[i];
}
function move()
{
	var img=document.getElementById("img");
	i++;
	if(i==images.length)
	{
		i=0;
	}
	window.setTimeout("move()",3000);
	img.src="images/"+images[i];
	
	}
</script>
<meta charset="UTF-8">
</head>

<body onload="move()">
<div class="container-fluid">
<!--Including header with menu,logo,websitename-->
<?php include "header.html";?>
<!--start slider-->
<div class="row"style="min-height:420px">
<div class="col-sm-12"style="background-color:#A9F5E1;padding:0px;border:4px solid #ff00ff;float:left;">
<img id="img" src="hos4.jpg" height="420px" width="100%"/><button
<button onclick="pev()"style="height:70px;width:30px;font-size:30px;position:absolute;top:150px;left:0px;"><</button>

<button onclick="next()"style="height:70px;width:30px;font-size:30px;position:absolute;top:155px;left:97.5%;">></button>

</div>
<!--slider end-->
<form id="ed" action="#" method="post">
<input  type="text" name="#"placeholder="Name" class="form-control"style="margin-bottom:10px;"/>
<input  type="email" name="#"placeholder="Email"class="form-control" required="ture"style="margin-bottom:10px;"/>
<input  type="number" name="#"placeholder="Phone"class="form-control"required="ture"style="margin-bottom:10px;"/>
<textarea  type="text" name="#"placeholder="Special notes, concerns, or requirements
"class="form-control"required="ture"style="margin-bottom:10px;"></textarea><hr style="margin-bottom:10px;">
<center><input type="submit" name="#" value="Get a callback"style="border:1px solid orange;padding:10px;color:orange;"/></center>
</form>
</div>
<div class="row" style="min-height:350px;">
<div class="col-sm-3"style="background-color:#A9F5F2;">
<a  id="fb"href="studydownload.php"><button id="btndown" class="nav-item"class="btn btn-primary" style="background-color:lime;color:blue;position:absolute;top:2px;left:55%;z-index:999">STUDY_MATREAL</button></a>
<marquee direction="up" height="350px" onmouseover="stop()" onmouseout="start()">
<?php
 include "connect.php";
 $cmd="Select *from Tbl_Notificaction order by NotificationId desc";
 $res=MySQLi_Query($con,$cmd);
 echo "<ul>";
 while($x=MySQLi_fetch_assoc("$res"))
 {
	 echo "<li style='color:white;font-size:18px;'>".$x["NotificactionMsg"]." Posted On: ".$x["NDT"]."</li>";
 }
 echo "</ul>";
?>
</marquee>
</div>
<div class="col-sm-9"style="background-color:white;">
<div class="row"style="min-height:80px;">
<div class="col-sm-12 text-justify"style="background-color:#F8ECE0;font-size:17px;font-family:Times New Roman;"><h3>Introduction:-</h3>
 
</div>
</div>
<div class="row"style="min-height:90px;">
<div class="col-sm-8 text-justify"style="background-color:#F8ECE0;font-size:17px;font-family:Times New Roman;">

</div>
<div class="col-sm-4 text-justify"style="background-color:pink;padding:0px;border:1px solid blue;font-size:15px;">

</div>
</div>
<div class="row"style="min-height:80px;">
<div class="col-sm-12 text-justify"style="background-color:#F8ECE0;font-size:17px;font-family:Times New Roman;">

</div>
</div>

</div>
</div>
<!--including footer and copyright-->
<?php include "footer.html";?>
</div>
<!-- Start: Enquiry Popup -->
<button id="btneq" class="btn btn-primary" style="position:fixed;top:250px;left:-25px;transform:rotate(90deg);z-index:999" onclick="managePopup(this,dveq)">Enquiry</button>

 <a  id="fb"href="feedbackform.php"><button id="btnfdb" class="nav-item"class="btn btn-primary" style="background-color:#1ABC9C  ;color:white;position:fixed;top:500px;left:95%;transform:rotate(90deg);z-index:999;">Feedback</button></a>
</body>
</html>
