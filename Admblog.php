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
<?php
include("Connection.php");

?>
<?php

	if(!$con)
	{
		echo "Connection error is ".mysqli_connect_error();
		
	}
	else
	{
		$q="select *from enquirydetail";
		
		$result=mysqli_query($con,$q);
		echo mysqli_error($con);
		
	}
	
?>
<form name="f" method="post" enctype="multipart/form-data" action="">
<table width="100%" height="700" border="0" cellspacing="0">
<tr>
<td width="20%">
<table width="100%" height="100%" cellspacing="0" border="0" style="color:white;" >
<tr height="100"><td ><img src="images/l.png"  width="100%" height="100%" /></td></tr>

<tr><td class="aa"><img src="images/adt.png" width="30" />&nbsp;&nbsp;&nbsp;<a href="Admcourse.php" class="ss">Courses</a></td></tr>
<tr><td class="aa"><img src="images/ade.png" width="30" /> &nbsp;&nbsp;&nbsp;<a href="Admevents.php"class="ss">Events</a></td></tr>
<tr><td class="aa"><img src="images/ado.png" width="30" /> &nbsp;&nbsp;&nbsp;<a href="Admoffer.php" class="ss">Offers</a></td></tr>
<tr><td class="aa"><img src="images/adb.png" width="30" /> &nbsp;&nbsp;&nbsp;<a href="Admblog.php" class="ss">Blog</a></td></tr>
<tr><td class="aa"><img src="images/logout.png" width="30" /> &nbsp;&nbsp;&nbsp;<a href="Home.php" class="ss">Logout</a></td></tr>

</table>
</td>
<td width="60%">

<table>
<tr><td><img src="" id="m1"    width="1000" height="250"  /></td></tr>
<tr><td>
<table align="center" cellpadding="10" cellspacing="10">
<tr><td colspan="2" align="center"><h2>Students Blog</h2></td></tr>
<tr>
<td>
<?php

				$count=1;
					while($sa=mysqli_fetch_array($result))
					{
					if($count%2==1)
						{
							echo "<table width=430 border=0 cellpadding=3 cellspacing=2 bgcolor=#DFDFDF>";
						}
						else
						{
							echo "<table width=430 border=0 cellpadding=3 cellspacing=2 bgcolor=#E8EBF7>";
						} 
				?>
                <tr><td style="font-weight:bold;font-size:20px;"><?=$sa["username"]; ?></td></tr>
                 <tr><td><?=$sa["subject"]; ?></td><td align="right"><?=$sa["endate"]; ?></td></tr>
                 <tr><td><?=$sa["content"]; ?></td></tr>
                 
                 </table>
                <?php 
				$count++;
				}
				?>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
<td width="20%">
<marquee direction="up" height="700">
<img src="images/c1.jpg"  width="300" height="300"/>
<img src="images/c3.jpg"  width="300" height="300"/>
<img src="images/c6.jpg"  width="300" height="300"/>

</marquee>

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