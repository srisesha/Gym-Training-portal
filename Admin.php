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
session_start();
?>
<?php

if(isset($_REQUEST['signin']))
{
	$c=$_REQUEST['category'];
	
	$u=$_REQUEST['user'];
	$p=$_REQUEST['pass'];
	if($c=="Admin")
	{
		if($u=="admin" && $p=="admin")
		{
			header("location:Admcourse.php");
		}
		else
		{
			echo "<script>alert('Invalid Username and Password')</script>";
		}
	}
	else if($c=="User")
	{
		if(!$con)
		{
			echo "Connection error is ".mysqli_connect_error();
			
		}
		else
		{
			$q="select *from userprofile where uname='$u' and password='$p'";
			$result=mysqli_query($con,$q);
			echo mysqli_error($con);
			while($r=mysqli_fetch_assoc($result))
			{
				$username=$r['uname'];
				$id=$r['uid'];
			}
			if(isset($username))
			{
				$_SESSION['userdata']=$username;
				$_SESSION['userid']=$id;	
				header("location:Userenquiry.php");
			}
			else
			{
				echo "<script>alert('Invalid Username and Password')</script>";
			}
		}
		
		
	}
	
}

?>
<form name="f" method="post">
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
<tr><td colspan="4"><img src="" id="m1"    width="1000" height="250"  /></td></tr>
<tr>
<td>

</td>
</tr>
<tr>
<td colspan="4" height="50">

<table align="center" cellpadding="10" cellspacing="10">
<tr><td colspan="2" align="center"><h2>Admin Login </h2></td></tr>
<tr><td>Username:</td><td><input type="text" name="user" id="user" onBlur="username();" /><span id="t1"><span></td><td rowspan="3">

</td></tr>
<tr><td>Password:</td><td><input type="password" name="pass" id="pass" onBlur="ipass();" /><span id="t2"><span></td></tr>
<tr><td colspan="2" align="center">
<input type="radio" name="category" id="category" value="Admin" />Admin
<input type="radio" name="category" id="category" value="User" />User

</td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="signin" id="signin" value="Sign In" />
<input type="reset" name="clear" id="clear" value="Clear" /></td></tr>

<tr><td colspan="2" align="center"><a href="Register.php" style="color:blue;">New User?</a></td></tr>

</table>
<br /><br />
<br /><br />


</td>
</tr>
</table>



</td>
<td width="20%">
<marquee direction="up" height="700">
<img src="images/c1.jpg"  width="300" height="300"/>
<img src="images/c3.jpg"  width="300" height="300"/>
<img src="images/c6.jpg" width="300" height="300"/>

</marquee>
</td>
</tr>
<tr bgcolor="#34495e" style="color:white;" height="50">
<td align="center" colspan="3">
<marquee>Copyright @ Fitness Training 2017</marquee>
</td>
</tr>

</table>
</form>
</body>
</html>