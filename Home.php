<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.ss
{

	 text-decoration:none;
	 text-align:center;
	// color:black;
	 font-size:25px;
	 //color:#953163;
	
	 
}

.aa
{
	text-align:center;
	//background-color:#83D6DE;
	background-color:black;
	color:white;
	height:50px;
	
}
.aa:hover
{
	//background-color:#1DABB8;
 background-color:#bdc3c7;
 //color:black;
 
}
.bb
{
	height:100;
}
a
{
	color:white;
}
a:hover
{
	//color:black;
}
div
{
	text-align:justify;
	width:300px;
	line-height:25px;
}
</style>

<script>
var i=0;
var a=new Array(4);
a[0]=new Image();
a[0].src="images/b1.jpg";

a[1]=new Image();
a[1].src="images/b2.jpg";

a[2]=new Image();
a[2].src="images/b3.jpg";

a[3]=new Image();
a[3].src="images/b4.jpg";

function slide()
{
	//alert("hai"+i);
	document.getElementById("m1").src=a[i].src;
	
	i=i+1;
	if(i==4)
	{
		i=0;
	}
	setTimeout("slide();",1500);
}
</script>
</head>

<body onload="slide();">
<table width="100%" height="700" border="0" cellspacing="0">
<tr>
<td width="20%">
<table width="100%" height="100%" cellspacing="0" border="0" style="color:white;" >
<tr height="100"><td ><img src="images/l.png"  width="100%" height="100%" /></td></tr>

<tr><td class="aa"><img src="images/home-icon.png" width="30" />&nbsp;&nbsp;&nbsp;<a href="Home.php" class="ss">Home</a></td></tr>
<tr><td class="aa"><img src="images/t.png" width="30" /> &nbsp;&nbsp;&nbsp;<a href="Training.php" class="ss">Training</a></td></tr>
<tr><td class="aa"><img src="images/trophy.png" width="30" /> &nbsp;&nbsp;&nbsp;<a href="Programs.php" class="ss">Programs</a></td></tr>
<tr><td class="aa"><img src="images/g1.png" width="30" /> &nbsp;&nbsp;&nbsp;<a href="Gallery.php" class="ss">Gallery</a></td></tr>
<tr><td class="aa"><img src="images/a.png" width="30" /> &nbsp;&nbsp;&nbsp;<a href="Admin.php" class="ss">Admin</a></td></tr>

</table>
</td>
<td width="60%">
<table>
<tr><td colspan="4"><img src="" id="m1"  width="1000" height="250"  /></td></tr>
<tr><td colspan="4" align="center" height="50" style="font-family:Algerian;font-weight:bold;font-size:20px;">
Our Services!!!!
</td></tr>
<tr>
<td>
<img  src="images/cfit.png" width="130" height="160" />
</td>
<td><b>Gymnasium</b><br />
<div>
Personal trainers can devise a customized fitness routine, sometimes including a nutrition plan, to help clients achieve their goals. They can also monitor and train with members.
</div>
</td>
<td>
<img  src="images/cdance.png" width="130" height="160" />
</td>
<td><b>Dance Academy</b><br />
<div>
Dance is a performance art form consisting of purposefully selected sequences of human movement. This movement has aesthetic and symbolic value, and is acknowledged as dance by performers and observers.


</div>
</td>
</tr>
<tr>
<td>
<img  src="images/cyoga.png" width="130" height="160" />
</td>
<td><b>Yoga Meditation</b><br />
<div>
One of the beauties of the physical practice of yoga is that the poses support and sustain you no matter how old or young, or fit or frail, you come to your mat. 


</div>
</td>
<td>
<img  src="images/ckarate.png" width="130" height="160" />
</td>
<td><b>Karate</b><br />
<div>
Karate has no philosophy. Some people think that the tradition of Karate came from Buddhism and Karate has a connection with the absolute, space and universe, but I don’t believe in that.
</div>
</td>
</tr>
<tr>
<td colspan="4" height="50">

</td>
</tr>
</table>



</td>
<td width="20%">
<img src="images/g2.jpg" height="700" width="100%"/>

</td>
</tr>
<tr bgcolor="#34495e" style="color:white;" height="50">
<td align="center" colspan="3">
<marquee>Copyright @ Fitness Training 2017</marquee>
</td>
</tr>

</table>
</body>
</html>