<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$subject="Get checkupk info.";
$mailfrom=$_POST['email'];
$loc=$_POST['selectcityname'];
$mailto="pramod871998@gmail.com";
$headers="From:".$mailfrom;
$txt="You have received in e-mail from".$name.".\n\n".$subject;
echo "$name"."$subject.";
mail($mailto,$subject,$txt,$headers);
header("Location:packlink.php?-mailsend");
}
?>

<!DOCTYPE HTML>
<html lang="en-us">
<head><title>maxshine</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="images/logo.png"/>
<style>
*
{
	margin:0px;
	padding:0px;
}
#dail
{
color:white;	
font-size:22px;
margin-left:30%;
}

#reqform
{
	background:white;
	min-height:200px;
	width:60%;
	padding:20px;
}
#reqform input{margin-bottom:10px;}
hr
{
	border:1px solid red;
}
#social a {
	margin-left:30px;
}

</style>
<?php include"bslinks.html"; ?>
</head>
<div class="container-fluid">
<div class="row"style="min-height:60px;line-height:60px;background:#FF6600; ">
<div class="col-sm-4"style="padding:20px;float:left;"><center><a href="http://maxshinehealth.com/"target="_blank"><img style="background:#FF6600;"src="images/logo.png" height="80%"width="80%"/></a></center></div>
<div class="col-sm-8"><a href="#"style=""><p id="dail"><b>Call Now +1800-120-911-911</b></p></a></div>
</div>
<div class="row" style="min-height:400px">
<div class="col-sm-12" style="background-image:url('images/hos4.jpg');padding:20px;">
<div class="row"style="padding:20px;">
<div class="col-sm-6"style="color:white;padding:40px;">
<center>
<span><h3 style="background:orange;border-radius:80px;">Get 95 Tests<br>
FULL BODY HEALTH CHECKUP<br>
<del>Rs.5999</del> Now @Rs.1999 Only<br>
At Your Doorstep<h3></span>
</center>
</div>
<div class="col-sm-6">
<center>
<form id="reqform"action="#" method="post">
<h5>Call Back Request</h5>
<input type="text" name="name"placeholder="Full Name*"class="form-control"required="ture"/>
<input type="email" name="email"placeholder="Email_ID*"class="form-control"required="ture"/>
<input type="number" name="mobno"placeholder="Mobile number*"class="form-control"required="ture"/>
Location : <select name="selectcityname" class="form-control"  required="ture">
<option value="location">--Select city name--</option>
<option>Utter_pradesh</option>
<option>Delhi</option>
<option>Haryana</option>
<option>Utterakhand</option>
<option>Banglore</option>
<option>Chenai</option>
<option>Raipur</option>
<option>Pune</option>
</select><br>
<input type="submit" name="submit"placeholder="SUBMIT"class="btn btn-primary form-control"/>
</form>
</center>
</div>
</div>
</div>
</div>
<div name="#"class="row"style="min-height:500px;background:silver;">
<div class="col-sm-1"></div>
<div class="col-sm-10" style="background:white;padding:10px;">
<div class="row"style="min-height:200px;background:aqua;"><h2>LISTS OF TESTS COVERED UNDER OUR ONLINE HEALTH PACKAGE "RS. 1999"</h2><hr>
<div class="col-sm-6"></div>
<div class="col-sm-6"></div>
</div>
<div class="row"style="min-height:200px;">
<div class="col-sm-6"><img src="images/ala.png" height="80%"width="90%"/></div>
<div class="col-sm-6 text-justify"><h2>OFFERS ARE FOR LIMITED TIME PERIOD ONLY;
JOIN US BEFORE IT’S GONE!</h2><hr><p>A timely health assessment gives you a clear picture of your current health condition and also helps to determine the potential future health risks.<br><br><br/>

Our complete health checkup package under ‘Rs. 999’ ensures get your disease cured before it’s too late and also allows you enjoy a healthier life in the future.</p></div>
</div>
<div class="row"style="min-height:300px;background:pink;">
<div class="col-sm-4">
<ul>
<li><img src="images/hw1.png"height="20%"width="25%"/>FREE DIET CHART<br>
Get free personalized diet chart based upon your unique needs, activities, and health conditions.</li>
<li><img src="images/hw2.png"height="20%"width="25%"/>A DETAILED BREAKDOWN OF EACH CHECKUP<br>
Get a chance to keep your eyes on even the small medical problems through our detailed breakdown of each checkup.</li>
<li><img src="images/hw3.png"height="20%"width="25%"/>A TRACK RECORD OF MILLIONS OF HAPPY CUSTOMERS<br>
As of now we have helped millions of individuals to diagnose and treat their various health issues.</li>
</ul>
</div>
<div class="col-sm-4"><img src="images/why_HW.png"height="90%"width="95%"/></div>
<div class="col-sm-4">
<ul>
<li><img src="images/hw4.png"height="20%"width="25%"/>PERSONALIZED HEALTH REPORT<br>
Our detailed personalized health screening report helps you easily diagnose your potential health problems.</li>
<li><img src="images/hw5.png"height="20%"width="25%"/>FREE SAMPLE COLLECTION<br>
Just give us your address and we will pick up your samples at free of cost from wherever you are.</li>
<li><img src="images/hw6.png"height="20%"width="25%"/>FREE DOCTOR CONSULTATION<br>
Our huge team of trained health advisors and doctors is delighted to offer you free support at initial level.</li>
</ul>
</div>
</div>

<div class="row"style="min-height:400px;padding:20px;">
<div class="col-sm-12">
<div class="row"style="min-height:200px;padding:20px;">
<div class="col-sm-4"><center><img src="images/benef1.png"height="25%"width="35%"/><br><p><b>QUALITY ASSURANCE</b><br>Our health checkup plans are fulfilled by NABL accredited labs to ensure you optimum quality.</p></center></div>
<div class="col-sm-4"><center><img src="images/benef2.png"height="25%"width="35%"/><br><p><b>AFFORDABILITY</b><br>Get up to 30-60% discount on Preventive Healthcare & Full Body Checkups.</p></center></div>
<div class="col-sm-4"><center><img src="images/benef3.png"height="25%"width="35%"/><br><p><b>LATEST TECHNOLOGY</b><br>Your report is prepared in our technologically-advanced and latest tools equipped laboratory.</p></center></div>
</div>
</div>
<div class="col-sm-12">
<div class="row"style="min-height:200px;padding:20px;"><h2></h2><hr>
<div class="col-sm-4"><center><img src="images/benef4.png"height="25%"width="35%"/><br><p><b>SERVICE</b><br>We hire only trained and certified phlebotomists for the most appropriate sample collection.</p></center></div>
<div class="col-sm-4"><center><img src="images/benef5.png"height="25%"width="35%"/><br><p><b>EXCELLENCE COMPLIANCE</b><br>Our labs follow 100 plus international quality standard operating procedures for sampling.</p></center></div>
<div class="col-sm-4"><center><img src="images/benef6.png"height="25%"width="35%"/><br><p><b>REPORT DELIVERY</b><br>A detailed report will be shared with you over your given email-id within 24 hours days of sample collection.</p></center></div>
</div>
</div>
</div>

<div class="row"style="min-height:200px;padding:20px;"><h2></h2>
<div class="col-sm-4"><center><img src="images/it1.png"height="60%"width="40%"/><br><p><b>BOOK AN APPOINTMENT</b><p></center></div>
<div class="col-sm-4"><center><img src="images/it2.png"height="60%"width="40%"/><br><p><b>FREE SAMPLE COLLECTION</b></p></center></div>
<div class="col-sm-4"><center><img src="images/it3.png"height="60%"width="40%"/><br><p><b>ONLINE REPORT WITHIN 24 HOURS</b></p></center></div>
</div>

<div class="row"style="min-height:200px;padding:20px;"><p><h2>LIFE IS PRICELESS, WHY YOU NEED TO TAKE A CHANCE!</h2><hr>
<div class="col-sm-6"style="padding:20px;"><center><img src="images/lifep.png"height="60%"width="60%"/></center></div>
<div class="col-sm-6 text-justify"style="padding:20px;"><p>Sign up with us right away to have a word with any of our health consultants and get the complete details on our full body checkup packages.<br><br><br>

With most individuals, the problem is that they let go off many opportunities to change their lives just out of ignorance. Never do that with your health, or else you can repent forever! Join our whole body checkup package to pre-empt any health conditions to prevent them from transforming into full-blown diseases.</p></div>
</div>


</div>
<div class="col-sm-1"></div>
</div>
<div class="row"style="min-height:40px;line-height:40px;background:#FF6600;color:white;">
<div class="col-sm-6">copyright 2015&copy; . All Rights Reserved. Designed by MaxShine HealthCare</div>
<div id="social"class="col-sm-6"style="margin-right:0px;">
<center>
<a href="#"><img src="images/facebook.png"/></a>
<a href="#"><img src="images/twitter.png"/></a>
<a href="#"><img src="images/youtube.png"/></a>
<a href="#"><img src="images/instagram.png"/></a>
</center>
</div>
</div>
</div>
</html>