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
//	alert("hai"+i);
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
<?php
include("Connection.php");
session_start();
?>
<?php
if(!$con)
{
	echo "Connection error ".mysqli_connect_error();
}
else
{

	$q="select *from offerpackage";
	$result=mysqli_query($con,$q);
	echo mysqli_error($con);
	
?>
<form name="f" method="post">
<table width="100%" height="700" border="0" cellspacing="0">
<tr>
<td width="20%">
<table width="100%" height="100%" cellspacing="0" border="0" style="color:white;" >
<tr height="100"><td ><img src="images/l.png"  width="100%" height="100%" /></td></tr>
<tr><td class="aa"><img src="images/un.png" width="30" />&nbsp;&nbsp;&nbsp;<a href="Userenquiry.php" class="ss">Enquiry</a></td></tr>
<tr><td class="aa"><img src="images/ado.png" width="30" /> &nbsp;&nbsp;&nbsp;<a href="Userpackages.php" class="ss">Packages</a></td></tr>
<tr><td class="aa"><img src="images/adg1.png" width="30" /> &nbsp;&nbsp;&nbsp;<a href="Userguidance.php" class="ss">Guidance</a></td></tr>
<tr><td class="aa"><img src="images/view.png" width="30" /> &nbsp;&nbsp;&nbsp;<a href="Userprofile.php" class="ss">View Profile</a></td></tr>
<tr><td class="aa"><img src="images/logout.png" width="30" /> &nbsp;&nbsp;&nbsp;<a href="Home.php" class="ss">Logout</a></td></tr>

</table>
</td>
<td width="60%">
<table>

<tr><td><img src="" id="m1"   width="1000" height="250"  /></td></tr>
<tr><td align="right">
<?php
if(isset($_SESSION['userdata']))
{
	echo "<br>Welcome ".$_SESSION['userdata'];
}

?>&nbsp;&nbsp;&nbsp;&nbsp;
</td></tr>
<tr><td><h2><p align="center" style="font-family:Algerian;font-size:20px;">Offer Packages</h2></p></td></tr>
<tr><td>
<?php
echo "<table align='center' cellpadding='10' cellspacing='8' >";
	
	while($r=mysqli_fetch_assoc($result))
	{
		$id=$r['offerid'];
		echo "<tr><td rowspan='5'><img width='200' height='200' src='offer/".$r['photo']."'></td><td>".$r['offerid']."</td></tr>";
		echo "<tr><td>".$r['offername']."</td></tr>";
		echo "<tr><td>".$r['details']."</td></tr>";
		echo "<tr><td>".$r['course']."</td></tr>";
		echo "<tr><td>".$r['validity']."</td></tr>";
	
		
			
	}
	echo "</table>";
}
?>
</td></tr>
</table>
<br />
<br />

</td>
<td width="20%">
<img src="images/d.jpg" width="300" />
<br />
<img src="images/yy.jpg" width="300" />
<br />
<img src="images/k.png" width="300" />
<br />

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