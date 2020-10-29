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
	width:400px;
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
<table width="100%" height="700" border="2" cellspacing="0">
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

<td><h3 style="background-color:thistle;border-radius:10px;text-align:center">Benefits of Exercises</h3></b>
<div>
Total Gym machines are part of the one-machine-for-multiple-exercises group of fitness equipment. While other strength training equipment are specifically built for one or a few different exercises, you can use the total gym to workout the entire body.
</div>


</td>

<td><h3 style="background-color:thistle;border-radius:10px;text-align:center">Yoga Tips</h3>
<div>
Practicing yoga in the morning is generally considered to be the best as it keeps energy levels high during the day. Yet, if it doesn’t happen, don’t let it be an excuse to skip your practice. You may choose a time slot which seems most convenient. It could be late mornings, before lunch, or evenings. 
</div>


</td>
</tr>
<tr>

<td><h3 style="background-color:thistle;border-radius:10px;text-align:center">Karate Tips</h3><br />
<div>
During that time I have been exposed to the many different types of people that train in the art. From cooperate business people, soccer moms, college students, military personnel, to professional athletes, muay Thai attracts people from all walks of life.
</div>


</td>

<td><h3 style="background-color:thistle;border-radius:10px;text-align:center">To maintain the Health</h3><br />
<div>
Aim for 2 and a half hours of moderate activity, like brisk walking or dancing, every week. If you're OK with vigorous exercise, stick to 1 hour and 15 minutes a week of things like running or playing tennis. Add a couple of days of strength training, too.
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