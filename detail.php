<style>
*
{
	margin:0px;
	padding:0px;
}
#testlist {
list-style:none;
font-size:24px;
padding:20px;
}
#testlist li 
{
border:1px solid silver;
padding:10px;
margin-bottom:10px;
	}
#testlist li:hover
{
	background:#FF6600;
	
} 
#testlist li a{
	text-decoration:none;
	text-style:none;
	padding:20px;
	}
#testlist li a:hover
{
	color:white;
}
#testlist li a span
{
	text-align:right;	
}

</style>
<?php include"bslinks.html"; ?>
<div class="container-fluid">
<?php include "header.html";?>
<div class="row"style="min-height:400px;">
<div class="col-sm-6"style="padding:40px;"><center><img src="images/hospac.png"></center></div>
<div class="col-sm-6"style="background:pink;padding:40px;"><h1>PACKAGE DETAIL☺</h1></div>
</div>
<div class="row"style="min-height:200px;padding:60px;">
<div class="col-sm-12">
<ul id="testlist">
<li><a href="#">Lipid Profile<span>+</span></a></li>
<li><a href="#">Complete Blood Count<span>+</span></a></li>
<li><a href="#">Liver Function Test<span>+</span></a></li>
<li><a href="#">Bone Profile<span>+</span></a></li>
<li><a href="#">Thyroid Profile<span>+</span></a></li>
<li><a href="#">Urine Profile<span>+</span></a></li>
<li><a href="#">Diabetes Profile<span>+</span></a></li>
<li><a href="#">IRON Profile<span>+</span></a></li>
<li><a href="#">Vitamin Profile<span>+</span></a></li>
<li><a href="#">Kidney Function Test<span>+</span></a></li>
</ul>
</div>
</div>
<?php include "footer.html";?>
</div>