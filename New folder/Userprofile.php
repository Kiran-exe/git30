<html>
<head >
<title> USER PROFILE </title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<style type="text/css">
	body{
		background-image: url(bg.jpg);
		background-size: cover;
		background-repeat: no-repeat;
        background-position: right;
	}
</style>
<body>
<div id ="container" style="height:100%">

<div id="header" style="color :purple ; background-color : black; height:100px;width=100%">
<font size=30><center><B><I><?php
if (isset($_COOKIE["uid"]))
{
$uid=$_COOKIE["uno"];
echo" $uid's     ";
}
?>Profile </I></B></center></font></div>

<div id="menu" style="height:100%;width:180px;background-color: black; float:left;"><br><br>

<ul style="list:none;padding:0;width:180px;height:100%;">


<li style="padding 15px;font-family:Cambria;font-size:18px;background-color:purple;border-bottom:1px solid silver;"><a style="color:#fff;text-decoration:none;"href="Booking1.html"> Booking</a><br>
<li style="padding 15px;font-family:Cambria;font-size:18px;background-color:purple;border-bottom:1px solid silver;"><a style="color:#fff;text-decoration:none;" href="Donation1.html"> Donation</a><br>
<li style="padding 15px;font-family:Cambria;font-size:18px;background-color:purple;border-bottom:1px solid silver;"><a style="color:#fff;text-decoration:none;" href=" Temple.php "> Logout</a> <br>





</ul>
</div><center>
<div style="height:70%;width:100%; top-margin:10%"><img src="user.png" style="height:100.5%;width:50.2%;"></div></center>
</div>

</body>
</html>
